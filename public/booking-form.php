<?php
$pageTitle = "Booking a Service";
include 'includes/header.php';
?>

<main>
    <section class="booking-container">
        <div class="booking-card">
            <h1>Booking form</h1>
            <div class="services">
                <h2>Services</h2>
                <select name="service" id="service" required>
                    <option value="" disabled selected hidden>Choose your service</option>
                    <option value="brakes">Brakes</option>
                    <option value="oil-change">Oil Change</option>
                    <option value="tires-bat">Tires &amp; Batteries</option>
                    <option value="ac">AC &amp; Services Repair</option>
                    <option value="maintenance">Maintenance</option>
                    <option value="pms">PMS Packages</option>
                    <option value="multiple">Multiple services</option>
                </select>

                <div class="panel" data-service="pms">
                    <div class="panel-inner">

                        <div class="radio-group">
                            <p>Choose your oil</p>
                            <label><input type="radio" name="oil_grade" value="regular" checked> Regular Oil</label>
                            <label><input type="radio" name="oil_grade" value="semi"> Semi-Synthetic Oil</label>
                            <label><input type="radio" name="oil_grade" value="full"> Fully-Synthetic Oil</label>
                        </div>

                        <!-- REGULAR -->
                        <div class="grade-group" data-grade="regular">
                            <label class="option"><input type="radio" name="pms" value="pms-reg-express"> PMS Gas Regular Express</label>
                            <label class="option"><input type="radio" name="pms" value="pms-reg-plus"> PMS Gas Regular Plus</label>
                            <label class="option"><input type="radio" name="pms" value="pms-reg-premium"> PMS Gas Regular Premium</label>
                        </div>

                        <!-- SEMI-SYNTHETIC -->
                        <div class="grade-group" data-grade="semi">
                            <label class="option"><input type="radio" name="pms" value="pms-semi-express"> PMS Gas Semi-Synthetic Express</label>
                            <label class="option"><input type="radio" name="pms" value="pms-semi-plus"> PMS Gas Semi-Synthetic Plus</label>
                            <label class="option"><input type="radio" name="pms" value="pms-semi-premium"> PMS Gas Semi-Synthetic Premium</label>
                        </div>

                        <!-- FULLY-SYNTHETIC -->
                        <div class="grade-group" data-grade="full">
                            <label class="option"><input type="radio" name="pms" value="pms-full-express"> PMS Gas Fully-Synthetic Express</label>
                            <label class="option"><input type="radio" name="pms" value="pms-full-plus"> PMS Gas Fully-Synthetic Plus</label>
                            <label class="option"><input type="radio" name="pms" value="pms-full-premium"> PMS Gas Fully-Synthetic Premium</label>
                        </div>

                    </div>
                </div>

                <!-- Multiple services -->
                <div class="panel" data-service="multiple">
                    <div class="panel-inner">
                        <label class="option"><input type="checkbox" name="items[]" value="brakes">Brakes</label>
                        <label class="option"><input type="checkbox" name="items[]" value="oil-change">Oil Change</label>
                        <label class="option"><input type="checkbox" name="items[]" value="tires-bat">Tires &amp; Batteries</label>
                        <label class="option"><input type="checkbox" name="items[]" value="ac">AC &amp; Services Repair</label>
                        <label class="option"><input type="checkbox" name="items[]" value="maintenance">Maintenance</label>
                        <label class="option"><input type="checkbox" name="items[]" value="pms">PMS Packages</label>
                    </div>
                </div>
            </div>
            <div class="vehicle-information">
                <h2>Vehicle</h2>
                <select name="car-makes" id="">
                    <option value="" disabled selected hidden>Choose car makes</option>

                </select>
                <select name="car-model" id="">
                    <option value="" disabled selected hidden>Choose car model</option>
                </select>
                <select name="year-model" id="">
                    <option value="">Choose year model</option>
                    <option value="">2026</option>
                    <option value="">2025</option>
                    <option value="">2024</option>
                    <option value="">2023</option>
                    <option value="">2022</option>
                    <option value="">2021</option>
                    <option value="">2020</option>
                    <option value="">2019</option>
                    <option value="">2018</option>
                    <option value="">2017</option>
                    <option value="">2016</option>
                    <option value="">2015</option>
                    <option value="">2014</option>
                    <option value="">2013</option>
                    <option value="">2012</option>
                    <option value="">2011</option>
                    <option value="">2010</option>
                    <option value="">2009</option>
                    <option value="">2008</option>
                    <option value="">2007</option>
                    <option value="">2006</option>
                    <option value="">2005</option>
                    <option value="">2004</option>
                    <option value="">2003</option>
                    <option value="">2002</option>
                    <option value="">2001</option>
                    <option value="">2000</option>
                    <option value="">1999</option>
                    <option value="">1998</option>
                    <option value="">1997</option>
                    <option value="">1996</option>
                    <option value="">1995</option>
                    <option value="">1994</option>
                    <option value="">1993</option>
                    <option value="">1992</option>
                </select>
            </div>
            <div class="schedule-section">
                <h2>Schedule your Appointment</h2>
                <input type="date">
                <input type="time">
            </div>
            <div class="booking-wrap">
                <input type="submit" value="Book Now">
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>