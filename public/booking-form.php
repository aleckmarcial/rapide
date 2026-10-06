<?php
$pageTitle = "Booking Form";
include 'includes/header.php' ?>

<main>
    <section class="layout">
        <div class="sidebar">
            <h2>SERVICES</h2>
            <button>BRAKES</button>
            <button>OIL CHANGE</button>
            <button>TIRES &amp; BATTERIES</button>
            <button>SUSPENSION</button>
            <button>MAINTENANCE</button>
            <button>PACKAGES</button>
        </div>

        <div class="body">
            <span>BOOKING FORM</span>
            <div>
                <span>Services</span>
                <select id="cars" name="cars">
                    <option value="pads-small">PADS: Small ₱2,450</option>
                    <option value="pads-medium">PADS: Medium ₱2,850</option>
                    <option value="pads-large">PADS: Large ₱3,250</option>
                    <option value="shoes-small">SHOES: Small ₱2,450</option>
                    <option value="shoes-medium">SHOES: Medium ₱2,450</option>
                    <option value="shoes-large">SHOES: Large ₱2,450</option>
                </select>
            </div>
            <div>
                <div>
                    <span>CUSTOMER INFORMATION</span>
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <input type="text" placeholder="Mobile Number">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Plate number">
                </div>
                <div>
                    <span>Vehicle</span>
                    <select id="cars" name="cars-model" aria-placeholder="Car Model">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select id="cars" name="cars" aria-placeholder="Year Model">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <input type="radio" name="choice">Gas
                    <input type="radio" name="choice">Diesel
                </div>
                <div>
                    <span>Schedule Your Appointment</span>
                    <input type="date">
                    <input type="time">
                </div>
                <div>
                    <span>Payment Options</span>
                    <select name="" id="">
                        <option value="">Reserve</option>
                        <option value="">Pay now</option>
                        <option value="">Pay with points</option>
                    </select>
                    <select name="mode-of-payment" id="">
                        <option value="">GCash</option>
                        <option value="">VISA</option>
                        <option value="">MASTER</option>
                        <option value="">PayPal</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
</main>