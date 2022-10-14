<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<!-- START ADD BLOG POST  -->
<div class="container-fluid pt-0 px-0 my-2">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-2 mt-4 text-center text-black"> Fillup the Gallery Photo Information</h4>
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <form action="<?= url_to("admin/gallery/add") ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue"> Name</label>
                            <input type="text" name="name" value="<?= old("name") ?>" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Photo Type </label>
                            <input type="text" name="photo_type" value="<?= old("photo_type") ?>" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Image Load</label>
                            <select name="image_load" class="form-control form-white " required>
                                <option value="Compress">Fast</option>
                                <option value="Original">Slow</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Photo Privacy</label>
                            <select name="privacy" class="form-control form-white " required>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Apartment Title</label>
                            <select name="apartment_title" class="form-control form-white" required>
                                <?php if($title):?>
                                    <?php foreach($title as $value):?>
                                        <option value="<?= $value['title'] ?>"><?= ucwords($value['title']) ?></option>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <option value="">No Apartment Found</option>
                                <?php endif;?>
                            </select>
                            <a href="<?= url_to("admin/apartment/add") ?>" target="_blank" class="badge badge-sm bg-gradient-danger">Add Apartment</a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Gallery Photo</label>
                            <input type="file" name="image" value="" class="form-control form-white " required>
                            <img src="<?= base_url("assets/admin/img/gallery/original/". old("image")) ?>" width="100" height="auto" alt="<?= old("name") ?>" class="rounded">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center ">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END ADD BLOG POST -->
<?= $this->endSection(); ?>
