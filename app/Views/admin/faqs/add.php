<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<!-- START ADD BLOG POST  -->
<div class="container-fluid pt-0 px-0 my-2">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-2 mt-4 text-center text-black"> Fillup the  FAQ Information</h4>
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <form action="<?= url_to("admin/faqs/add") ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue"> Question</label>
                            <input type="text" name="question" value="<?= old("question") ?>" placeholder="type your question" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Answer </label>
                            <input type="text" name="answer" value="<?= old("answer") ?>" placeholder="type your question of answer" class="form-control form-white" required>
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
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">FAQ Privacy</label>
                            <select name="privacy" class="form-control form-white " required>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END ADD BLOG POST -->
<?= $this->endSection(); ?>
