<?= $this->extend("include/app") ?>
<?= $this->section("main-content")?>

<!--Page Title-->
<section class="page-title" style="background-image:url(<?= base_url("assets/frontend/images/background/10.jpg")?>);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>About Us</h1>
                <span class="title">The Interior speak for themselves</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= url_to("home") ?>">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
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
                                <a href="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-4.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-2.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-3.jpg")?>" alt=""></a>
                            </li>

                            <li>
                                <a href="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" class="lightbox-image" title="Image Caption Here"><img src="<?= base_url("/assets/frontend/images/resource/special-1.jpg")?>" alt=""></a>
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
<!-- Fun Fact Section -->
<section class="fun-fact-section">
    <div class="outer-box" style="background-image: url(images/background/3.jpg);">
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
<!-- Process Section -->
<section class="about-process" style="">
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
                    <img src="<?= base_url("/assets/frontend/images/img/private.jpg")?>" alt="">
                    <h6>Private non-sharing homes</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">02</span>
                    <img src="<?= base_url("/assets/frontend/images/img/fully-serviced.jpg")?>" alt="">
                    <h6>Fully serviced apartments</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">03</span>
                    <img src="<?= base_url("/assets/frontend/images/img/stay-longer.jpg")?>" alt="">
                    <h6>Stay longer save more</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">04</span>
                    <img src="<?= base_url("/assets/frontend/images/img/reviewed.jpg")?>" alt="">
                    <h6>Reviewed by real travellers</h6>

                </div>
            </div>
            <!-- Process Block -->
            <!-- <div class="process-block col-lg-2 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">05</span>
                    <img src="<?= base_url("/assets/frontend/images/img/value-for-money.jpg")?>" alt="">
                    <h6>Value for <br>money</h6>

                </div>
            </div> -->
        </div>
        <div class="row" style="display:flex; justify-content:center;">
            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">06</span>
                    <img src="<?= base_url("/assets/frontend/images/img/we-secure.jpg")?>" alt="">
                    <h6>We're secure</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">07</span>
                    <img src="<?= base_url("/assets/frontend/images/img/enjoy-more-space.jpg")?>" alt="">
                    <h6>Enjoy more space</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">08</span>
                    <img src="<?= base_url("/assets/frontend/images/img/live-like-local.jpg")?>" alt="">
                    <h6>Live like a local</h6>

                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <span class="count">09</span>
                    <img src="<?= base_url("/assets/frontend/images/img/feel-a-home.jpg")?>" alt="">
                    <h6>Feel at home</h6>

                </div>
            </div>
        </div>
    </div>
</section>

<!--End Process Section -->
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

<!-- Offer Section -->
<section class="offer-section mt-5" style="background-image: url(images/background/6.jpg);">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <span class="title">Special Offer</span>
                    <h2><span>How to save </span> <br>of money on repairs</h2>
                    <span class="discount">50%</span>
                    <div class="text">Fill out the form to download a book with 10 tips<br> on how to save your money</div>
                </div>
            </div>

            <div class="form-column order-last col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="discount-form">
                        <!--Comment Form-->
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Massage"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Offer Section -->

<?= $this->endSection("main-content")?>
