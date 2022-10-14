<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url("assets/favicon1.png") ?>")?>
    <link rel="icon" type="image/png" href="<?= base_url("assets/favicon.png") ?>")?>
    <title> </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="<?= base_url("/assets/admin/css/nucleo-icons.css")?>"  rel="stylesheet" />
    <link href="<?= base_url("/assets/admin/css/nucleo-svg.css")?>"  rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url("/assets/admin/css/nucleo-svg.css")?>"  rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url("/assets/admin/css/soft-ui-dashboard.css")?>" rel="stylesheet" />
</head>

<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient text-center">
                                    <u>Admin Login</u>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="text-center" style="margin-top:5px; margin-bottom:5px;">
                                    <?php if (session()->getFlashdata('msg')) : ?>
                                        <span class="alert-success alert text-white p-2" ><?= session()->getFlashdata('msg') ?></span>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('err')) : ?>
                                        <span class="alert-danger alert text-white p-2"><?= session()->getFlashdata('err') ?></span>
                                    <?php endif; ?>
                                </div>
                                <form role="form" method="post" action="<?= url_to("admin/login") ?>">
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="enter your registered email" aria-label="Email" aria-describedby="email-addon" required>
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" minlength="6" name="password" class="form-control" placeholder="enter your password" aria-label="Password" aria-describedby="password-addon" required>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Having any trouble to login ?
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold">contact us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url(<?= base_url('/assets/admin/img/fixed/curved-images/curved6.jpg')?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © <script>
                        document.write(new Date().getFullYear()+"-")
                        document.write(new Date().getFullYear()+1)
                    </script>  by https://wwww.existay.com
                </p>
            </div>
        </div>
    </div>
</footer>

<!--   Core JS Files   -->
<script src="<?= base_url("/assets/admin/js/core/popper.min.js")?>"> </script>
<script src="<?= base_url("/assets/admin/js/core/bootstrap.min.js")?>"></script>
<script src="<?= base_url("/assets/admin/js/plugins/perfect-scrollbar.min.js")?>" ></script>
<script src="<?= base_url("/assets/admin/js/plugins/smooth-scrollbar.min.js")?>"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url("/assets/admin/js/soft-ui-dashboard.min.js")?>"></script>
</body>
</html>
