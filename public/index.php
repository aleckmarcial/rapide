<?php $pageTitle = "Home | Rapide"; ?>
<?php include 'includes/header.php'; ?>

<main>
    <section id="hero-section">
        <div class="hero-container">
            <img src="img/bg.png" alt="Rapide auto service shop front">
            <div class="hero-text">
                <h1>Experience the Rapide Way!</h1>
                <p>CASA-quality services at affordable prices.</p>
                <a href="#" class="hero-btn">Book Now</a>
            </div>
        </div>
    </section>

    <section id="about-section">
        <div class="history-block">
            <div class="aboutImg-container">
                <img src="img/rapide.jpg" alt="Rapide auto service about">
                <p class="img-caption">Our shop on Chino Roces Avenue, Makati</p>
            </div>
            <div class="description">
                <h2>Our History</h2>
                <p>Rapidé is born of a joint venture with Midas International, the largest auto service center chain in the world. That partnership gave us the basis for our systems and procedures — the foundation of what we now call the Rapidé Way.</p>

                <div class="stats-row">
                    <div class="stat">
                        <span class="stat-number">20+</span>
                        <span class="stat-label">Years of Service</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">CASA</span>
                        <span class="stat-label">Quality Standard</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="advantages-block">
            <div class="miko-container">
                <img src="img/miko2.png" alt="Rapide mascot holding a wrench">
            </div>
            <div class="description">
                <h2>Our Advantages</h2>
                <p>Rapidé's quality assurance comes down to one phrase: CASA-quality services at affordable prices.</p>

                <ul class="advantage-list">
                    <li>
                        <span class="advantage-icon" aria-hidden="true">🔧</span>
                        Skilled, certified technicians
                    </li>
                    <li>
                        <span class="advantage-icon" aria-hidden="true">⚙️</span>
                        State-of-the-art equipment
                    </li>
                    <li>
                        <span class="advantage-icon" aria-hidden="true">💰</span>
                        Affordable, transparent pricing
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <div class="carousel">
            <div class="track">
                <div class="track-group">
                    <div class="brand-logo"><img src="img/bmw.png" alt="BMW"></div>
                    <div class="brand-logo"><img src="img/chevrolet.png" alt="Chevrolet"></div>
                    <div class="brand-logo"><img src="img/ford.png" alt="Ford"></div>
                    <div class="brand-logo"><img src="img/honda.png" alt="Honda"></div>
                    <div class="brand-logo"><img src="img/hyundai.png" alt="Hyundai"></div>
                    <div class="brand-logo"><img src="img/kia.png" alt="Kia"></div>
                    <div class="brand-logo"><img src="img/mazda.png" alt="Mazda"></div>
                    <div class="brand-logo"><img src="img/mitsubishi.png" alt="Mitsubishi"></div>
                    <div class="brand-logo"><img src="img/subaru.png" alt="Subaru"></div>
                    <div class="brand-logo"><img src="img/toyota.png" alt="Toyota"></div>
                </div>
                <div class="track-group" aria-hidden="true">
                    <div class="brand-logo"><img src="img/bmw.png" alt=""></div>
                    <div class="brand-logo"><img src="img/chevrolet.png" alt=""></div>
                    <div class="brand-logo"><img src="img/ford.png" alt=""></div>
                    <div class="brand-logo"><img src="img/honda.png" alt=""></div>
                    <div class="brand-logo"><img src="img/hyundai.png" alt=""></div>
                    <div class="brand-logo"><img src="img/kia.png" alt=""></div>
                    <div class="brand-logo"><img src="img/mazda.png" alt=""></div>
                    <div class="brand-logo"><img src="img/mitsubishi.png" alt=""></div>
                    <div class="brand-logo"><img src="img/subaru.png" alt=""></div>
                    <div class="brand-logo"><img src="img/toyota.png" alt=""></div>
                </div>
            </div>
        </div>

    <section id="services-section">
        <div>
            <h2 class="services-title">Our Services</h2>
        </div>

        <div class="services-container">
            <a href="#" class="service-card">
                <img src="img/brakes.png" alt="Brakes">
                <div class="service-card-overlay"></div>
                <div class="service-card-fill"></div>
                <div class="card-content">
                    <span>Brakes</span>
                </div>
                <span class="card-cta">Book Now</span>
            </a>

            <a href="#" class="service-card">
                <img src="img/oil-change.png" alt="Oil Change">
                <div class="service-card-overlay"></div>
                <div class="service-card-fill"></div>
                <div class="card-content">
                    <span>Oil Change</span>
                </div>
                <span class="card-cta">Book Now</span>
            </a>

            <a href="#" class="service-card">
                <img src="img/tires-batteries.png" alt="Tires & Batteries">
                <div class="service-card-overlay"></div>
                <div class="service-card-fill"></div>
                <div class="card-content">
                    <span>Tires & Batteries</span>
                </div>
                <span class="card-cta">Book Now</span>
            </a>

            <a href="#" class="service-card">
                <img src="img/ac-services.png" alt="AC Services & Repair">
                <div class="service-card-overlay"></div>
                <div class="service-card-fill"></div>
                <div class="card-content">
                    <span>AC Services &amp; Repair</span>
                </div>
                <span class="card-cta">Book Now</span>
            </a>

            <a href="#" class="service-card">
                <img src="img/maintenance.png" alt="Maintenance">
                <div class="service-card-overlay"></div>
                <div class="service-card-fill"></div>
                <div class="card-content">
                    <span>Maintenance</span>
                </div>
                <span class="card-cta">Book Now</span>
            </a>

            <a href="#" class="service-card">
                <img src="img/packages.png" alt="Packages">
                <div class="service-card-overlay"></div>
                <div class="service-card-fill"></div>
                <div class="card-content">
                    <span>Packages</span>
                </div>
                <span class="card-cta">Book Now</span>
            </a>
        </div>
    </section>

    <!-- <section>
    </section> -->
</main>

<?php include 'includes/footer.php'; ?>