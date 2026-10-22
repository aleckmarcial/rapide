<?php
// src/functions/auth.php
function loginUser(mysqli $conn, string $email, string $password)
{
    $stmt = mysqli_prepare(
        $conn,
        "SELECT id, password, fname, role, memstat FROM accounts WHERE email = ?"
    );
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;

}
