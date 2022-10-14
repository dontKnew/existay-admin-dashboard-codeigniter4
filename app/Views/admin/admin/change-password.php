<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<!-- START ADD BLOG POST  -->
<div class="container-fluid pt-0 px-0 my-2">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-2 mt-4 text-center text-black"> Change Your Password</h4>
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <form action="<?= url_to("admin/change-password") ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue"> Your Email</label>
                            <input type="email" name="email" value="<?= session("email") ?>" class="form-control form-white " readonly required>
                        </div>
                    </div
                    <div class="col-md-12 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue"> New Password </label>
                            <input type="password" minlength="6" name="password" class="form-control form-white " required>
                        </div>
                    </div
                    <div class="col-md-12 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue"> Confirm Password </label>
                            <input type="password" minlength="6" name="cpassword" class="form-control form-white " required>
                        </div>
                    </div
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 text-center ">
                        <button type="submit" class="btn btn-success">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END ADD BLOG POST -->
<?= $this->endSection(); ?>
