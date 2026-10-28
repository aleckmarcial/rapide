<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= htmlspecialchars($pageTitle ?? 'Denied Application') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/denied.css">
</head>

<body>
    <main>
        <div class="container">
            <img src="img/denied.png" alt="Application denied">
            <div class="description">
                <h1>Application Denied</h1>
                <p>Thank you for applying to Rapide. Unfortunately, we're unable to approve your membership application at this time. You're welcome to reapply in the future. Questions? Contact us at <a href="mailto:info@rapide.com.ph">info@rapide.com.ph</a>.</p>
            </div>

            <a href="logout.php" class="btn">Back to Login</a>
        </div>
    </main>
</body>

</html>