<?php
require_once __DIR__ . '/../src/config/dbcon.php';
require_once __DIR__ . '/../src/functions/branches.php';

$search = trim($_GET['q'] ?? '');
$page   = max(1, (int) ($_GET['page'] ?? 1));

$total      = countBranches($conn, $search);
$totalPages = max(1, (int) ceil($total / BRANCHES_PER_PAGE));
$page       = min($page, $totalPages);

ob_start();
renderBranchCards(getBranches($conn, $search, $page));
$cards = ob_get_clean();

ob_start();
renderPagination($page, $totalPages);
$pagination = ob_get_clean();

header('Content-Type: application/json');
echo json_encode(['cards' => $cards, 'pagination' => $pagination]);