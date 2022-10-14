<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<!-- START ADD BLOG POST  -->
<div class="container-fluid pt-0 px-0 my-2">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-2 mt-4 text-center text-black"> Update the Testimonial Information</h4>
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <form action="<?= url_to("admin/testimonial/update") ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Message </label>
                            <textarea  name="text" class="form-control form-white" rows="4" required><?= $data["text"] ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue"> Name</label>
                            <input type="text" name="name" value="<?= $data["name"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Apartment Title</label>
                            <select name="apartment_title" class="form-control form-white" required>
                                <?php if($title):?>
                                    <?php foreach($title as $value):?>
                                        <option value="<?= $value['title'] ?>"
                                            <?php if(strtolower($value['title'])==strtolower($data['apartment_title'])){echo "selected";} ?> >
                                            <?= ucwords($value['title']) ?>
                                        </option>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <option value="">No Apartment Found</option>
                                <?php endif;?>
                            </select>
                            <a href="<?= url_to("admin/apartment/add") ?>" target="_blank" class="badge badge-sm bg-gradient-danger">Add Apartment</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Select State</label>
                            <select name="state" class="form-control form-white" required>
                                <?php if($state1):?>
                                    <?php foreach($state1 as $value):?>
                                        <option value="<?= $value['state'] ?>"><?= ucwords($value['state']) ?></option>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <option value="">No State Found</option>
                                <?php endif;?>
                            </select>
                            <a href="<?= url_to("admin/state/add") ?>" target="_blank" class="badge badge-sm bg-gradient-danger">Add State</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Testimonial Privacy</label>
                            <select name="privacy" class="form-control form-white " required>
                                <option value="Public"<?php if(ucwords($data['privacy'])=="Public"){echo "selected";}?> >Public</option>
                                <option value="Private" <?php if(ucwords($data['privacy'])=="Private"){echo "selected";}?>  >Private</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Testimonial Profile</label>
                            <input type="file" name="image" value="" class="form-control form-white ">
                            <img src="<?= base_url("assets/admin/img/testimonial/original/". $data["profile"]) ?>" width="150" height="auto" class="mt-1 rounded" alt="<?= $data["name"] ?>">
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
