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
        </div>
    </section>
</main>