<?= $this->extend("include/app") ?>
<?= $this->section("main-content")?>

<section class="hidden-bar">
    <div class="inner-box">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h2>Get Appointment</h2>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            <form method="post" action="#">
                <div class="form-group">
                    <input type="text" name="text" value="" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" value="" placeholder="Phone no." required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn btn-style-three">Submit now</button>
                </div>
            </form>
        </div>

        <!--Contact Info Box-->
        <div class="contact-info-box">
            <ul class="info-list">
                <li>contact@genarate.com</li>
                <li>+(123) 456 7890</li>
            </ul>
            <ul class="social-list clearfix">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google +</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Hidden Bar -->

<!--Page Title-->
<section class="page-title login-page" style="background-image:url(<?= base_url("assets/frontend/images/background/10.jpg")?>); ">
    <div class="auto-container">

    </div>
</section>
<!--End Page Title-->

<!--Login Section-->
<section class="login-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <h2>Login</h2>

                <!-- Login Form -->
                <div class="login-form">
                    <!--Login Form-->
                    <form method="post" action="#">
                        <div class="form-group">
                            <label>Username or Email Address</label>
                            <input type="text" name="username" placeholder="Name or Email " required>
                        </div>

                        <div class="form-group">
                            <label>Enter Your Password</label>
                            <input type="email" name="email" placeholder="Password" required>
                        </div>

                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="form-group check-box">
                                    <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label for="account-option-1">Remember me</label>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="form-group no-margin">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">LOGIN</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="#" class="psw">Lost your password?</a>
                        </div>
                    </form>
                </div>
                <!--End Login Form -->
            </div>

            <div class="column col-lg-6 col-md-12 col-sm-12">
                <h2>Register</h2>

                <!-- Register Form -->
                <div class="login-form register-form">
                    <!--Login Form-->
                    <form method="post" action="#">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="username" placeholder="Your Email" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Your Password</label>
                            <input type="email" name="email" placeholder="Password" required>
                        </div>

                        <div class="form-group text-right">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Register</button>
                        </div>
                    </form>
                </div>
                <!--End Register Form -->
            </div>
        </div>
    </div>
</section>
<!--End Login Section-->

<?= $this->endSection("main-content")?>
