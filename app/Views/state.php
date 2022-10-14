<?= $this->extend("include/app") ?>
<?= $this->section("main-content")?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?= base_url("assets/admin/img/state/original/".$state1['image'])?>);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1><?=  ucwords($state1['state']) ?></h1>
                <!--<span class="title">The Interior speak for themselves</span>-->
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="<?=  url_to("home")?>" >Home</a></li>
                <li><?= ucwords($state1['state']) ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<section>
    <!--Card-->
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
<div class="sidebar-page-container city-page">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <?php if($apartment): ?>
                <div class="blog-detail">
                    <!-- News Block -->
                    <?php foreach($apartment as $state):?>
                        <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?= base_url("assets/frontend/images/resource/blog-post-1.jpg")?>" alt=""></figure>
                            </div>
                            <div class="caption-box">
                                <div class="inner">
                                    <h3><?= $state['title'] ?></h3>
                                    <ul class="info">
                                        <li class="text-capitalize"> <?= $state['state_area'] ?> ,  <?= $state1['state'] ?></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <p>  <?= $state['short_description'] ?> </p>
                                    <div class="city-btn mb-5">
                                        <h4> Rs. <?= $state['apartment_price'] ?>/-</h4>
                                        <?php
                                            $state11 = underscore(strtolower($state1['state']));
                                        ?>

                                        <a href=" <?= url_to("apartment/city",dasherize($state11), $state['url_title']) ?>" >
                                            <button class="theme-btn btn-style-one" name="submit-form">Select Apartment</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="alert alert-danger text-center text-capitalize p-4">
                    <h5>
                        <i class="fa fa-warning"></i> No Apartment Found in <strong><?= $state1['state'] ?></strong>
                    </h5>
                </div>
                <?php endif; ?>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">
                    <div class="sidebar-widget">
                        <iframe src="https://www.google.com/maps/embed?pb=<?= $state1['google_map_link'] ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!--search box-->
                    <div class="sidebar-widget side-box">
                        <i class="fa fa-inr" aria-hidden="true"></i>
                        <h3>BIGGER SPACE, BIGGER SAVING</h3>
                        <p>Book a 2 or 3 Bedroom Apartment & Get 15% Weekly & 30% Monthly discount.</p>
                    </div>

                    <div class="sidebar-widget side-box">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <h3>STAY MORE, SAVE MORE!</h3>
                        <p>Book a studio or 1 Bedroom Apartment & Get 10% Weekly & 20% Monthly discount.</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Container -->
<?= $this->endSection("main-content")?>
