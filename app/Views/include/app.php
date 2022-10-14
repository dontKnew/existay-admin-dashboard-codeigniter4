<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        <?php if(isset($apartment['title'])): ?>
            <?= $apartment['title'] ?>
        <?php else:?>
            Existay Apartments
        <?php endif;?>
    </title>
    <!-- Stylesheets -->
    <link href="<?= base_url("/assets/frontend/css/bootstrap.css")?>"  rel="stylesheet">
    <link href="<?= base_url("/assets/frontend/css/style.css")?>"  rel="stylesheet">
    <link href="<?= base_url("/assets/frontend/css/responsive.css")?>" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="<?= base_url("/assets/frontend/css/color-switcher-design.css")?>" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="<?= base_url("/assets/frontend/css/color-themes/default-theme.css")?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url("/assets/frontend/images/favicon.png")?>" type="image/x-icon">
    <link rel="icon" href="<?= base_url("/assets/frontend/images/favicon.png")?>" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <script src="https:/cdnjs.cloudflare.com/ajax/libs/html5shiv7.3/html5shiv.js"></script>
<!--     <script src="--><?//= base_url("/assets/frontend/js/respond.js")?><!--"></script>-->
</head>
<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-three">
        <div class="auto-container">
            <div class="main-box clearfix">
                <div class="logo-box">
                    <div class="logo">
                        <a href="<?= url_to("home") ?>"><img src="<?= base_url("/assets/frontend/images/logo.png")?>" alt=""></a>
                    </div>
                </div>

                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current "><a href="<?= url_to("home") ?>">Home</a>

                                </li>
                                <li class=""><a href="<?= url_to("about") ?>">About</a>

                                </li>
                                <li class="dropdown"><a href="#">Cities</a>
                                    <ul>
                                        <?php foreach($state as $value):
                                            $state1 = underscore(strtolower($value['state']));
                                            ?>
                                            <li>
                                                <a href="<?= url_to("apartment", dasherize($state1)) ?>">
                                                    <?= ucwords($value['state']) ?>
                                                </a>
                                            </li>
                                            <?php endforeach;?>
                                    </ul>
                                </li>
                                <li class=""><a href="tel:9582222295">Call Us</a>

                                </li>
                                <li class=""><a href="<?= url_to("login") ?>">Login</a>

                                </li>
                                <li class=""><a href="<?= url_to("offers") ?>">Offers</a>

                                </li>

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <!-- <div class="outer-box clearfix">
                        <button class="nav-toggler"><span class="fa fa-bars"></span></button>
                    </div> -->

                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="<?= url_to("home") ?>" title=/""><img src="<?= base_url("/assets/frontend/images/logo.png")?>" alt="" title="" ></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current "><a href="<?= url_to("home") ?>">Home</a>


                                </li>
                                <li class=""><a href="about.html">About</a>

                                </li>
                                <li class="dropdown"><a href="#">Cities</a>
                                   <ul>
                                       <?php foreach($state as $value):
                                           $state1 = underscore(strtolower($value['state']));
                                           ?>
                                           <li>
                                               <a href="<?= url_to("apartment",dasherize($state1)) ?>">
                                                   <?= ucwords($value['state']) ?>
                                               </a>
                                           </li>
                                       <?php endforeach;?>
                                   </ul>
                                </li>
                                <li class=""><a href="tel:9582222295">Call Us</a></li>
                                <li class=""><a href="<?= url_to("login") ?>">Login</a>
                                </li>
                                <li class=""><a href="<?= url_to("offers") ?>">Offers</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--START MAIN CONTENTS-->
    <?= $this->renderSection("main-content") ?>
    <!--END MAIN CONTENTS-->

    <!-- Main Footer -->
    <footer class="main-footer alternate mt-5" style="background-image: url(<?= base_url("/assets/frontend/images/background/5.jpg")?>;">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="<?= url_to("home") ?>" ><img src="<?= base_url("/assets/frontend/images/footer-logo.png")?>" alt="" style="width:150px;"></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Contra and layouts, in content of dummy text is nonsensical.typefaces of dummy text is appearance of different general the content of dummy text is nonsensical. typefaces of dummy text is nonsensical.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                    <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb">
                                                <a href="#"><img src="<?= base_url("/assets/frontend/images/resource/post-thumb-1.jpg")?>"  alt=""></a>
                                            </div>
                                            <h4><a href="#">Serviced Apartment Vs. Hotel In Delhi
                                                </a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                                <li>3 Comments</li>
                                            </ul>
                                        </div>

                                        <div class="post">
                                            <div class="thumb">
                                                <a href="#"><img src="<?= base_url("/assets/frontend/images/resource/post-thumb-2.jpg")?>"  alt=""></a>
                                            </div>
                                            <h4><a href="#">Delhi Travel Tips: Things To Keep In Mind</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                                <li>3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="<?= url_to("about") ?>">About</a></li>
                                            <li><a href="#">Cities</a></li>
                                            <li><a href="<?= url_to("login") ?>">Login</a></li>
                                            <li><a href="<?= url_to("offers") ?>">Offers</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="<?= base_url("/assets/frontend/images/resource/work-thumb-1.jpg")?>"  alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="<?= base_url("/assets/frontend/images/resource/work-thumb-2.jpg")?>"  alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="<?= base_url("/assets/frontend/images/resource/work-thumb-3.jpg")?>"  alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="<?= base_url("/assets/frontend/images/resource/work-thumb-4.jpg")?>"  alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="<?= base_url("/assets/frontend/images/resource/work-thumb-5.jpg")?>"  alt=""></a>
                                            </figure>
                                            <figure class="image">
                                                <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="<?= base_url("/assets/frontend/images/resource/work-thumb-1.jpg")?>"  alt=""></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>

                    <div class="copyright-text">
                        <a href="<?= url_to("home") ?>" target="_blank">Copyright &copy; 2022, All Right Reserved, by <a href="#">https://www.existay.com</a></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Main Footer -->
</div>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"> <span class="fa fa-arrow-circle-o-up"></span></div>
<script src="<?= base_url("/assets/frontend/js/jquery.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/popper.min.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/bootstrap.min.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/jquery.fancybox.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/owl.js")?>" > </script>
<script src="<?= base_url("/assets/frontend/js/jquery.mCustomScrollbar.concat.min.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/wow.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/appear.js")?>"> </script>
<script src="<?= base_url("/assets/frontend/js/mixitup.js")?>"> ></script>
<script src="<?= base_url("/assets/frontend/js/script.js")?>"> </script>
<!-- Color Setting -->
<script src="<?= base_url("/assets/frontend/js/color-settings.js")?>" ></script>
</body>

<!-- index-327:04-->
</html>
