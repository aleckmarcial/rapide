<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Rapide') ?></title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="vendor/aos/aos.css">
    <link rel="stylesheet" href="css/membership-form.css">
    <link rel="stylesheet" href="css/booking-form.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="index.php"><img class="logo-img" src="img/logo.png" alt="rapide-logo"></a>
        </div>

        <button type="button" class="hamburger" id="hamburger-btn" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav>
            <ul class="navlinks">
                <li class="navlinks-close">
                    <button type="button" class="close-btn" id="close-btn" aria-label="Close menu">&times;</button>
                </li>
                <li><a href="#">Services</a></li>
                <li><a href="index.php#branch-locator">Branches</a></li>
                <li><a href="membership-form.php">Membership</a></li>
                <li><a href="index.php#about-section">About Us</a></li>
            </ul>
        </nav>

        <div class="icons-container">
            <a href="" aria-label="Cart" class="icon-link">
                <?php include 'img/icons/cart.svg'; ?>
            </a>
            <a href="login.php" aria-label="Cart" class="icon-link">
                <?php include 'img/icons/user.svg'; ?>
            </a>
        </div>
    </header>