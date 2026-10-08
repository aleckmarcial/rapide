<?php
$pageTitle = 'Be a Member';
include 'includes/header.php';
?>

<main>
    <section class="form-container">
        <div class="form-card">
            <h1>Apply for Membership</h1>
            <div class="user-details-container">
                <h2>Personal Information</h2>
                <div class="user-details-input">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <input type="text" placeholder="Email Address">
                    <input type="text" placeholder="Phone number">
                    <input type="text" placeholder="Home Address" class="address">
                </div>
            </div>
            <div class="user-password-container">
                <h2>Create Password</h2>
                <div class="user-password-input">
                    <input type="password" placeholder="Password">
                    <input type="password" name="" id="" placeholder="Re-enter Password">
                </div>
            </div>
            <div class="user-payment-container">
                <h2>Payment Information</h2>
                <div class="user-payment-input">
                    <select name="payments" id="payments" required>
                        <option value="" disabled selected hidden>Choose a payment method</option>
                        <option value="gcash">Gcash</option>
                        <option value="maya">Maya</option>
                        <option value="cc">Visa / Master</option>
                        <option value="paypal">Paypal</option>
                    </select>

                    <label class="field ewallet">E-wallet Name
                        <input type="text" name="ewallet_name">
                    </label>
                    <label class="field ewallet">E-wallet Number
                        <input type="tel" name="ewallet_number">
                    </label>
                    <label class="field card wide">Cardholder Name
                        <input type="text" name="card_name">
                    </label>
                    <label class="field card wide">Cardholder Number
                        <input type="text" name="card_number" inputmode="numeric">
                    </label>
                    <label class="field card">CCV
                        <input type="text" name="card_ccv" inputmode="numeric" maxlength="4">
                    </label>
                    <label class="field card">Expiration Date
                        <input type="text" name="card_exp" placeholder="MM/YY" maxlength="5">
                    </label>
                </div>
            </div>
            <div class="container">

                <!-- LEFT COLUMN -->
                <section class="verification">
                    <h2>Verification</h2>
                    <p class="intro">Provide any of the following documents to verify your application.</p>

                    <div class="doc-lists">
                        <div>
                            <h3>Primary</h3>
                            <ul>
                                <li>OR/CR</li>
                                <li>Driver's License</li>
                                <li>Passport</li>
                                <li>Philhealth ID</li>
                            </ul>
                        </div>
                        <div>
                            <h3>Secondary</h3>
                            <ul>
                                <li>TIN ID</li>
                                <li>Company ID</li>
                                <li>Barangay Certification</li>
                                <li>Police Clearance</li>
                            </ul>
                        </div>
                    </div>

                    <div class="upload-box">
                        <img id="img" style="max-width: 150px">
                        <input type="file" name="document" onchange="img.src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <!-- <div class="upload-area" id="upload-area"> UPLOAD SECTION
                        <div class="icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                        <p>Drag & Drop here to Upload File</p>
                        <span>OR</span>
                        <button type="button" id="upload-button">Browse File</button>
                        <input type="file" id="file-input" name="image" accept=".jpg, .jpeg, .png" value="">
                    </div> -->
                </section>

                <!-- RIGHT COLUMN -->
                <section class="perks">
                    <h2>Membership Perks</h2>

                    <div class="perks-card">
                        <div class="perks-list">
                            <span>Services Discounts</span>
                            <span>Services Scheduling</span>
                            <span>Loyalty Points</span>
                            <span>Priority Service</span>
                        </div>
                        <p class="price">₱3,500 / annual</p>
                    </div>

                    <p class="terms-title">Terms &amp; Conditions</p>
                    <div class="terms-check">
                        <input type="checkbox" name="terms" id="terms" required>
                        <label for="terms">I agree to the<span> terms &amp; conditions.</span></label>
                    </div>
                </section>

            </div>

            <div class="submit-wrap">
                <input type="submit" value="SUBMIT">
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>