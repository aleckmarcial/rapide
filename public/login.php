<?php
session_start();
require_once __DIR__ . '/../src/config/dbcon.php';
require_once __DIR__ . '/../src/functions/auth.php';

$error = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $user = loginUser($conn, $email, $password);

    if ($user) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fname']   = $user['fname'];
        $_SESSION['role']    = $user['role'];
        
        $status = strtolower($user['memstat']);

        if ($user['role'] === 'admin') {
            $page = 'admin.php';
        } elseif ($user['memstat'] === 'Pending') {
            $page = 'pending.php';
        } elseif ($user['memstat'] === 'Denied') {
            $page = 'denied.php';
        } else {
            $page = 'index.php';
        }

        header("Location: $page");
        exit;
    }

    $error = 'Invalid email or password.';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | Rapide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main>
        <form method="POST" action="">

            <div class="content-wrapper">
                <div class="sidebar">
                    <a href="index.php"><img src="img/logo.png" alt="Rapide"></a>
                </div>

                <div class="login-box">
                    <h1>WELCOME</h1>
                    <input type="email" name="email" class="input-field" placeholder="Email"
                        autocomplete="email" aria-label="Email"
                        value="<?= htmlspecialchars($email) ?>" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" autocomplete="off" aria-label="Password" required>
                    <?php if ($error): ?>
                        <p class="error"><?= htmlspecialchars($error) ?></p>
                    <?php endif; ?>
                    <button type="submit" class="login-btn" name="login">Login</button>
                    <p>Not a member yet? <a href="membership-form.php">Apply now!</a></p>
                </div>
                <img src="img/miko2.png" alt="" class="mikko">
            </div>
        </form>
    </main>
</body>

</html>