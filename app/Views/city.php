<?= $this->extend("include/app") ?>
<?= $this->section("main-content")?>
<section>
    <div class="content-side col-lg-12 col-md-12 col-sm-12 c-detail-slide">
        <div class="service-detail">
            <div class="inner-box">
                <div class="image-box">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        <?php foreach($slider as $t): ?>
                            <figure class="image"><img alt="<?= $t['name'] ?>" src="<?= base_url("assets/admin/img/city_slider/".$t['image_load']."/".$t['image']) ?>"/></figure>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5 bg-white rounded container">
        <!--Card-Body-->
        <form action="#" method="GET">
            <div class="card-body">

                <!--Second Row-->
                <div class="row">
                    <div class="col-sm-2">
                        <select class="browser-default custom-select mb-4" name="state" id="select" required>
                            <option value="" disabled="" selected="">Top Picks</option>
                            <?php foreach($state as $value):?>
                                <option value="<?= strtolower($value['state'])?>"><?= ucwords($value['state'])?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <input placeholder="&#xf073; Checkin" type="text" name="checkin_date" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" onfocus="(this.type='date')"
                               onblur="(this.type='text')" required >
                    </div>

                    <div class="col-sm-3">
                        <input placeholder="&#xf073; Checkout" name="checkout_date" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome" onfocus="(this.type='date')"
                               onblur="(this.type='text')" required>
                    </div>

                    <div class="col-sm-2">
                        <select class="browser-default custom-select mb-4" name="guest_no" id="select"required>
                            <option value="" disabled="" selected="">Guest</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Sidebar Page Container -->

<div class="container city-detail-page">
    <div class="row clearfix">
        <!--Content Side-->
        <div class="content-side col-lg-12 col-md-12 col-sm-12">
            <div class="blog-detail">
                <!-- News Block -->

                <div class="inner">
                    <h3><?= $apartment['title'] ?></h3>
                    <ul class="info">
                        <li class="text-capitalize"><?= $apartment['state_area'] ?>, <?= $apartment['state'] ?> </li>
                        <li><i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                        </li>
                    </ul>

                    <!--Product Info Tabs-->
                    <div class="product-info-tabs city-info">
                        <!--Product Tabs-->
                        <div class="prod-tabs tabs-box">
                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#prod-details">OVERVIEW</li>
                                <li class="tab-btn" data-tab="#prod-spec">MAP</li>
                                <li class="tab-btn" data-tab="#prod-reviews">TESTIMONIAL</li>
                                <li class="tab-btn" data-tab="#house-rules">HOUSE RULES</li>
                                <li class="tab-btn" data-tab="#faq">FAQ</li>
                                <li class="tab-btn" data-tab="#photo">PHOTO GALLERY</li>

                            </ul>

                            <!--Tabs Container-->
                            <hr>
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content row">
                                        <div class="col-md-8">
                                            <h3 class="text-capitalize"><?= $apartment['overview_title'] ?></h3>
                                            <div class="tab-facility">
                                                <p><i aria-hidden="true" class="fa fa-user"></i> <?= $apartment['guest_no'] ?> Guest</p>
                                                <p><i aria-hidden="true" class="fa fa-building"></i> Apartment
                                                </p>
                                                <p><i aria-hidden="true" class="fa fa-bed"></i> <?= $apartment['bed_no'] ?> Bed </p>
                                                <p><i aria-hidden="true" class="fa fa-bath"></i> <?= $apartment['bathroom_no'] ?> Bathroom</p>
                                            </div>
                                            <?= $apartment['overview_description'] ?>
                                        </div>
                                        <div class="sidebar-side col-md-4">
                                            <aside class="sidebar default-sidebar">

                                                <!--search box-->
                                                <div class="sidebar-widget side-box row">
                                                    <div class="col-5">
                                                        <h6>HOT DEALS</h6>
                                                        <h2>
                                                            <i aria-hidden="true" class="fa fa-inr"></i><?= $apartment['hot_new_price'] ?>
                                                        </h2>
                                                        <p><i aria-hidden="true" class="fa fa-inr"></i><?= $apartment['hot_old_price'] ?>
                                                        </p>
                                                    </div>
                                                    <div class="col-7">
                                                        <h6><?= $apartment['hot_deal_text2'] ?></h6>
                                                        <button>
                                                            <a href="#">BOOK</a>

                                                        </button>
                                                        <h5><i aria-hidden="true" class="fa fa-times"></i> <?= $apartment['hot_deal_text1'] ?> </h5>
                                                    </div>
                                                </div>

                                                <div class="sidebar-widget side-box row">
                                                    <div class="col-5">
                                                        <h6>BEST RATE</h6>
                                                        <h2><i aria-hidden="true" class="fa fa-inr"></i><?= $apartment['best_new_price'] ?>
                                                        </h2>
                                                        <p><i aria-hidden="true" class="fa fa-inr"></i><?= $apartment['best_old_price'] ?>
                                                        </p>
                                                    </div>
                                                    <div class="col-7">
                                                        <h6><?= $apartment['best_text1'] ?></h6>
                                                        <button>
                                                            <a href="#">BOOK</a>

                                                        </button>
                                                        <h5><i aria-hidden="true" class="fa fa-times"></i> <?= $apartment['best_text2'] ?></h5>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>


                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <iframe allowfullscreen=""
                                                height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=<?= $apartment['state_area_map'] ?>"
                                                style="border:0;"
                                                width="100%"></iframe>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <!-- Testimonial Section -->
                                        <section class="testimonial-section">
                                            <div class="outer-container clearfix">
                                                <!-- Title Column -->
                                                <div class="title-column clearfix">
                                                    <div class="inner-column">
                                                        <div class="sec-title">
                                                            <span class="float-text">testimonial</span>
                                                            <h2>What Client Says</h2>
                                                        </div>
                                                        <div class="text">Know what our Customers think about
                                                            us!
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Testimonial Column -->
                                                <div class="testimonial-column clearfix"
                                                     style="background-image: url(images/background/4.jpg);">
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
                                            </div>
                                        </section>
                                        <!--End Testimonial Section -->

                                    </div>
                                </div>

                                <div class="tab" id="house-rules">
                                    <div class="content">
<!--                                        <h3 class="text-capitalize">House Rules</h3>-->
                                        <?= $apartment['house_rules'] ?>
                                    </div>
                                </div>

                                <div class="tab" id="faq">
                                    <div class="content">
                                        <!-- FAQ Section -->
                                        <section class="faq-section">
                                            <div class="auto-container">
                                                <div class="row">
                                                    <!-- Image Column -->
                                                    <div class="accordion-column col-lg-12 col-md-12 col-sm-12">
                                                        <div class="inner-column">
                                                            <div class="sec-title">
                                                                <span class="float-text">some FAQ’s</span>
                                                                <h2>Frequality Asked Questions</h2>
                                                            </div>
                                                            <ul class="accordion-box">
                                                                <?php $i=0;  foreach($faqs as $f): ?>
                                                                <!--Block-->
                                                                    <li class="accordion block <?php if($i==0){echo "active-block";}?>">
                                                                        <div class="acc-btn <?php if($i==0){echo "active";}?>">
                                                                            <?= $f['question']; ?>
                                                                            <div class="icon fa fa-plus-square"></div>
                                                                        </div>
                                                                        <div class="acc-content <?php if($i==0){echo "current";}?>">
                                                                            <div class="content ">
                                                                                <div class="text"><?= $f['answer'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                <?php $i+=$i++; endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!--End FAQ Section -->
                                    </div>
                                </div>


                                <div class="tab" id="photo">
                                    <section class="projects-section alternate">
                                        <div class="auto-container">
                                            <!--MixitUp Galery-->
                                            <div class="mixitup-gallery">

                                                <div class="filter-list row">

                                                    <?php foreach($photo_gallery as $gallery): ?>
                                                    <!-- Project Block -->
                                                    <div class="project-block all mix landescape   col-md-6 col-sm-12">
                                                        <div class="image-box">
                                                            <figure class="image"><img
                                                                        alt="<?= $gallery["name"] ?>" src="<?= base_url("assets/admin/img/gallery/".$gallery['image_load']."/".$gallery['image']) ?>">
                                                            </figure>
                                                            <div class="overlay-box">
                                                                <h4><a href="#"><?= $gallery["name"] ?></a></h4>
                                                                <div class="btn-box">
                                                                    <a class="lightbox-image"
                                                                       data-fancybox="gallery"
                                                                       href="<?= base_url("assets/admin/img/gallery/".$gallery['image_load']."/".$gallery['image']) ?>">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </div>
                                                                <span class="tag"><?= $gallery["photo_type"] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>

                                            <!--Post Share Options-->

                                        </div>
                                    </section>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Product Info Tabs-->
                </div>


            </div>
        </div>

    </div>
</div>
</div>
<!-- End Sidebar Container -->

<?= $this->endSection("main-content")?>
