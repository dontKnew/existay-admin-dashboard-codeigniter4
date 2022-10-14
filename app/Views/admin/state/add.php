<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<!-- START ADD BLOG POST  -->
<div class="container-fluid pt-0 px-0 my-2">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-2 mt-4 text-center text-black"> Fillup the  State Information</h4>
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <form action="<?= url_to("admin/state/add") ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 p-lg-4">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">State Name</label>
                            <input type="text" name="state" value="<?= old("state") ?>" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 p-lg-4">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Map Embed Code </label>
                            <input type="text" name="google_map_link" value="<?= old("google_map_link") ?>" class="form-control form-white" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-lg-4">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Blog Privacy</label>
                            <select name="privacy" class="form-control form-white " required>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 p-lg-4">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">State Image</label>
                            <input type="file" name="image" value="" class="form-control form-white " required>
                            <img src="<?= base_url("assets/admin/img/state/original/". old("image")) ?>" width="100" height="auto" alt="<?= old("state") ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center p-lg-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END ADD BLOG POST -->
<?= $this->endSection(); ?>
