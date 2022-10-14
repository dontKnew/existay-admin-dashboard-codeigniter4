<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
    <div class="container-fluid py-4">
        <h3 class="text-center text-dark">- Website Information - </h3>
    <div class="row px-5">
        <div class="p-1 bg-gradient-faded-light w-100 my-4"></div>
        <form action="<?= url_to("admin/dashboard") ?>" method="post" class="text-center">
            <div class="d-flex align-items-center w-md-50">
                <select class="form-control-lg form-control" name="apartment_title" onchange="this.form.submit()" >
                    <option value="">Filter by Apartment</option>
                    <?php foreach($apartmentTitle as $value):?>
                        <?php if($value['title'] !== $title): ?>
                            <option value="<?= $value['title'] ?>"><?= $value['title'] ?> </option>
                        <?php else:?>
                            <option value="<?= $value['title'] ?>" selected><?= $value['title'] ?> </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <a href="<?= route_to("admin/dashboard") ?>" class="btn btn-md btn-success mt-3 mx-1">Reset</a>
            </div>
        </form>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Apartments</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $apartment ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total FAQs</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $faqs ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Testimonials</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $testimonial ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Gallery Photos</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $photo_gallery ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total City Sliders</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $slider ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-1 bg-gradient-faded-light w-100 my-4"></div>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total States</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $state ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0  my-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Admins</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $admin ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-1 bg-gradient-faded-light w-100 my-4"></div>
    </div>
    <footer class="footer pt-3" style="position: relative; top:100px;">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear()+"-");
                            document.write(new Date().getFullYear()+1);
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.globalheight.com" class="font-weight-bold" target="_blank">Global Height Teams</a>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </footer>
</div>
<?= $this->endSection()?>
