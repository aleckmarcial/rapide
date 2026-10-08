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
</head>

<body class="<?= ($currentPage ?? '') === 'booking-form' ? 'has-sidebar-actions' : '' ?>">
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
                <li><a href="#">Services</a></li>
                <li><a href="#">Packages</a></li>
                <li><a href="#">Redeem</a></li>
                <li><a href="#">Membership</a></li>
                <li><a href="#">About Us</a></li>
            </ul>

            <?php if (($currentPage ?? '') === 'booking-form'): ?>
                <div class="menu-sidebar-actions">
                    <h2>SERVICES</h2>
                    <button type="button" >BRAKES</button>
                    <button type="button" >OIL CHANGE</button>
                    <button type="button" >TIRES &amp; BATTERIES</button>
                    <button type="button" >SUSPENSION</button>
                    <button type="button" >MAINTENANCE</button>
                    <button type="button" >PACKAGES</button>
                </div>
            <?php endif; ?>
        </nav>
    </header>