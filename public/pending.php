<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= htmlspecialchars($pageTitle ?? 'Pending Application') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/pending.css">
</head>

<body>
    <main>
        <div class="container"> 
            <img src="img/pending.png" alt="Application pending">
            <div class="description">
                <h1>Application Pending</h1>
                <p>Your account is still under review. We'll notify you once it has been approved.</p>
            </div>

            <a href="logout.php" class="btn">Back to Login</a>
        </div>
    </main>
</body>

</html>