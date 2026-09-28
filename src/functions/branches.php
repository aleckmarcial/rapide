<?php
const BRANCHES_PER_PAGE = 12;

function countBranches(mysqli $conn, string $search = ''): int
{
    $like = '%' . $search . '%';
    $stmt = $conn->prepare(
        "SELECT COUNT(*) FROM branches
         WHERE branch_name LIKE ? OR city LIKE ? OR province LIKE ? OR address LIKE ?"
    );
    $stmt->bind_param('ssss', $like, $like, $like, $like);
    $stmt->execute();
    return (int) $stmt->get_result()->fetch_row()[0];
}

function getBranches(mysqli $conn, string $search = '', int $page = 1, int $perPage = BRANCHES_PER_PAGE): array
{
    $like   = '%' . $search . '%';
    $offset = ($page - 1) * $perPage;

    $stmt = $conn->prepare(
        "SELECT branch_name, city, province, address, email, contact_number
         FROM branches
         WHERE branch_name LIKE ? OR city LIKE ? OR province LIKE ? OR address LIKE ?
         ORDER BY branch_name
         LIMIT ? OFFSET ?"
    );
    $stmt->bind_param('ssssii', $like, $like, $like, $like, $perPage, $offset);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

function renderBranchCards(array $branches): void
{
    if (empty($branches)) {
        echo '<p class="no-results">No branches found.</p>';
        return;
    }

    foreach ($branches as $branch): ?>
        <div class="branch-card">
            <img src="img/branch-pic.png" alt="">
            <span class="branch-name"><?= htmlspecialchars($branch['branch_name']) ?></span>
            <span class="location"><?= htmlspecialchars($branch['city'] . ', ' . $branch['province']) ?></span>
            <span class="address"><?= htmlspecialchars($branch['address'] ?? 'Address not available') ?></span>
            <span class="contact"><?= htmlspecialchars($branch['contact_number'] ?? 'No contact number listed') ?></span>
            <span class="email"><?= htmlspecialchars($branch['email'] ?? 'No email listed') ?></span>
        </div>
    <?php endforeach;
}

function renderPagination(int $page, int $totalPages): void
{
    if ($totalPages <= 1) {
        return;
    }

    // Show first, last, and the pages around the current one; collapse the rest into "…"
    $items = [];
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i === 1 || $i === $totalPages || abs($i - $page) <= 1) {
            $items[] = $i;
        } elseif (end($items) !== '…') {
            $items[] = '…';
        }
    }
    ?>
    <nav class="pagination" aria-label="Branch pages">
        <button type="button" class="page-btn" data-page="<?= $page - 1 ?>"
                aria-label="Previous page" <?= $page <= 1 ? 'disabled' : '' ?>>&laquo;</button>

        <?php foreach ($items as $item): ?>
            <?php if ($item === '…'): ?>
                <span class="page-ellipsis">…</span>
            <?php else: ?>
                <button type="button" class="page-btn<?= $item === $page ? ' active' : '' ?>"
                        data-page="<?= $item ?>"
                        <?= $item === $page ? 'aria-current="page"' : '' ?>><?= $item ?></button>
            <?php endif; ?>
        <?php endforeach; ?>

        <button type="button" class="page-btn" data-page="<?= $page + 1 ?>"
                aria-label="Next page" <?= $page >= $totalPages ? 'disabled' : '' ?>>&raquo;</button>
    </nav>
    <?php
}