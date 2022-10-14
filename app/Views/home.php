<?= $this->extend("include/app") ?>
<?= $this->section("main-content")?>

<!--Form Back Drop-->
<div class="form-back-drop"></div>
<!-- Hidden Bar -->
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

<!-- Bnner Section -->
<section class="banner-section-three">
    <div class="banner-carousel-two owl-carousel owl-theme">
        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url(<?= base_url("assets/admin/img/home/".$home['image_load']."/".$home['header_image'])?>);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="inner-box">
                        <h4 class="title"><?= $home['image_title'] ?></h4>
                        <div class="text">
                            <?= $home['image_short_description'] ?>
                        </div>
<!--                        <div class="link-box"><a href="#">View Details</a></div>-->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bottom-box">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <form>
                    <ul class="social-links clearfix form-group">
                        <li>
                            <label>LOCATION</label>
                            <select class="form-control" name="state" id="select" required>
                            <option value="" disabled="" selected="">Top Picks</option>
                            <?php foreach($state as $value):?>
                                <option value="<?= strtolower($value['state'])?>"><?= ucwords($value['state'])?></option>
                            <?php endforeach; ?>
                            </select>
                        </li>
                        <li>
                            <label>CHECK IN</label>
                            <input type="date" placeholder="Add Date" class="form-control">
                        </li>
                        <li>
                            <label>CHECK OUT</label>
                            <input type="date" placeholder="Add Date" class="form-control">
                        </li>
                        <li class="search-ico"><a href="#"><span class="fa fa-search"></span> </a></li>
                    </ul>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- Specialize Section -->
<section class="specialize-section-two">
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">About</span>
                        <h2>Our Specialization</h2>
                    </div>

                    <div class="text-box">
                        <h4>Serviced Apartments, Short Term Rentals, AirBnB Vacation Homes & More</h4>
                        <p>Located in hand-picked neighborhoods, BluO offers non-sharing rental Homes with modern design & contact-free service. BluO Stays combine comfort & privacy of a Vacations Rental with facilities of a Boutique Hotel.</p>
                    </div>
                    <div class="link-box">
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Carousel Column -->
            <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" alt="special-4"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" alt="special-2"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" alt="special-3"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" alt="special-1"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" alt="special-4"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" alt="special-2"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" alt="special-3"></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" alt="special-1"></a>
                            </li>

                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-3.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-1.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-2.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-4.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-search"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-3.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-1.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-2.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                            <li class="thumb-box">
                                <figure><img src="<?= base_url("/assets/frontend/images/resource/special-thumb-4.jpg")?>" alt=""></figure>
                                <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Specialize Section -->
<!-- Specialize Section -->
<section class="specialize-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text"> Location</span>
            <h2>Browse By Location</h2>
        </div>

        <div class="services-carousel-two owl-carousel owl-theme">

            <!-- Service Block -->
            <?php foreach($state as $value):
            $state1 = underscore(strtolower($value['state']));
            ?>
                <div class="service-block-two">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="#"><img src="<?= base_url("/assets/admin/img/state/original/".$value['image'])?>" alt=""></a>
                        </figure>
                    </div>
                    <div class="caption-box">
                        <h3><a href="<?= url_to("apartment",dasherize($state1)) ?>"><?= ucwords($value['state']) ?></a></h3>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!-- End Specialize Section -->
<!-- Fun Fact Section -->
<section class="fun-fact-section">
    <div class="outer-box" style="background-image: url(<?= base_url("assets/frontend/images/background/3.jpg")?>);">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="500">0</span>+</div>
                            <h4 class="counter-title">Apartment in <br>selected locations</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text"></span>Best</div>
                            <h4 class="counter-title">Rates guaranteed with <br>special long stay offers</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text"></span>24x7</div>
                            <h4 class="counter-title">Excellent support for <br> professional hospitality</h4>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- News Section -->
<section class="news-section alternate">
    <div class="auto-container">
        <div class="sec-title">
            <!-- <span class="float-text">Blogs</span> -->
            <h2>Let Us Delight You</h2>
        </div>
        <div class="row">
            <!-- News Block -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?= base_url("/assets/frontend/images/resource/news-4.jpg")?> alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <div class="inner">
                            <h3><a href="#">SANITIZED STAYS</a></h3>
                            <ul class="info">
                                <li>Sanitized, Hygienic & Disinfected Homes</li>
                                <li>Contactless Check-In & Digital Payments</li>
                                <li>Vaccinated Staff across all properties</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?= base_url("/assets/frontend/images/resource/news-5.jpg")?> alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <div class="inner">
                            <h3><a href="#">BOOK DIRECT</a></h3>
                            <ul class="info">
                                <li>Guaranteed LOWEST PRICES!</li>
                                <li> Special Offers for repeat Guests</li>
                                <li>Complimentary Upgrades</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?= base_url("/assets/frontend/images/resource/news-6.jpg")?> alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <div class="inner">
                            <h3><a href="#">SECURE PAYMENTS</a></h3>
                            <ul class="info">
                                <li>100% Secure Booking Process - your information protected by 128/256 bit SSL encryption
                                </li>
                                <li> 100% Confirmed Bookings with contactless Digital Payments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?= base_url("/assets/frontend/images/resource/news-7.jpg")?> alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <div class="inner">
                            <h3><a href="#">SPECIAL REQUESTS</a></h3>
                            <ul class="info">
                                <li>Our Team can manage most Special Requests of Guests
                                </li>
                                <li> Special requests of guests are handled better when booked directly with us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End News Section -->
<!-- Process Section -->
<section class="process-section" style="background-image: url(<?= base_url("assets/frontend/images/background/8.jpg")?>);">
    <div class="auto-container">
        <div class="sec-title light">
            <span class="float-text">WHY CHOOSE US</span>
            <h2>Why Bluo?</h2>
        </div>
        <div class="row" style="display:flex; justify-content:center;">
            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">01</span>
                    <img src="images/img/private.jpg" alt="">
                    <h6>Private non-sharing homes</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">02</span>
                    <img src="images/img/fully-serviced.jpg" alt="">
                    <h6>Fully serviced apartments</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">03</span>
                    <img src="images/img/stay-longer.jpg" alt="">
                    <h6>Stay longer save more</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">04</span>
                    <img src="images/img/reviewed.jpg" alt="">
                    <h6>Reviewed by real travellers</h6>

                </div>
            </div>
            <!-- Process Block -->
            <!-- <div class="process-block col-lg-2 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">05</span>
                    <img src="images/img/value-for-money.jpg" alt="">
                    <h6>Value for <br>money</h6>

                </div>
            </div> -->
        </div>
        <div class="row" style="display:flex; justify-content:center;">
            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">06</span>
                    <img src="images/img/we-secure.jpg" alt="">
                    <h6>We're secure</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">07</span>
                    <img src="images/img/enjoy-more-space.jpg" alt="">
                    <h6>Enjoy more space</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">08</span>
                    <img src="images/img/live-like-local.jpg" alt="">
                    <h6>Live like a local</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">09</span>
                    <img src="images/img/feel-a-home.jpg" alt="">
                    <h6>Feel at home</h6>

                </div>
            </div>
            <!-- Process Block -->
            <!-- <div class="process-block col-lg-2 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">10</span>
                    <img src="images/img/more-choice.jpg" alt="">
                    <h6>More choices</h6>

                </div>
            </div> -->
        </div>
    </div>
</section>
<!--End Process Section -->
<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Blogs</span>
            <h2>News & Articals</h2>
        </div>
        <div class="row">
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/img/Blog_1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="#">Serviced Apartment Vs. Hotel In Delhi</a></h3>

                        <p><a href="#">Read More</a></p>

                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/img/Blog_2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="#">The Perfect Travel Accommodation</a></h3>
                        <p><a href="#">Read More</a></p>

                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/img/Blog_3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="#">Delhi Travel Tips: Things To Keep In Mind</a></h3>
                        <p><a href="#">Read More</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End News Section -->
<!--End News Section -->


<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="outer-container clearfix">
        <!-- Title Column -->
        <div class="title-column clearfix">
            <div class="inner-column">
                <div class="sec-title"
                    <span class="float-text">Testimonial</span>
                    <h2>What Client Says</h2>
                </div>
                <div class="text">Know what our Customers think about us!</div>
            </div>
        </div>

    <div class="testimonial-column clearfix" style="background-image: url(<?= base_url("assets/frontend/images/background/4.jpg")?>);">
        <div class="inner-column">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <?php foreach($testimonial as $value): ?>
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="<?= base_url("/assets/admin/img/testimonial/original/".$value['profile'])?>" alt="<?= ucwords($value['name'])?>"></div>
                            <div class="text text-justify"><?= ucwords($value['text']) ?></div>
                            <div class="info-box">
                                <h4 class="name"><?= ucwords($value['name']) ?></h4>
                                <span class="designation"><?= ucwords($value['state']) ?> </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- Testimonial Column -->
    </div>
</section>

<!--End Testimonial Section -->

<!-- Main Footer -->
<?= $this->endSection("main-content")?>
