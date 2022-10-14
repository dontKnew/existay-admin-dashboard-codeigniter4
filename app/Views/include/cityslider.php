<?= $this->extend("include/admin/apartment/add") ?>
<?= $this->section("cityslider")?>
<div class="card mb-4"> <!--starting card-->
    <?php if($data): ?>
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">

            <h6 class="d-flex flex-sm-row align-items-center">
                <span class="mx-1"> Show-Row :</span>
                <form action="<?= url_to("admin/slider") ?>" method="post">
                    <select name="per_page" class="form-control" onchange="this.form.submit()" >
                        <option value="5"  <?php if($perPage==05){echo "selected";} ?>>05</option>
                        <option value="10"  <?php if($perPage==10){echo "selected";} ?>>10</option>
                        <option value="15"  <?php if($perPage==15){echo "selected";} ?>>15</option>
                        <option value="20"  <?php if($perPage==20){echo "selected";} ?>>20</option>
                        <option value="20"  <?php if($perPage==25){echo "selected";} ?>>25</option>
                        <option value="20"  <?php if($perPage==30){echo "selected";} ?>>30</option>
                    </select>
                </form>
            </h6>
            <a href="<?= url_to("admin/slider/add") ?>" class="btn btn-primary"> Add Slider</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2 text-center mx-4" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2 text-center mx-4" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr class="text-center">
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">State</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">State Area</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Image Load</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Privacy</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $value):;?>
                        <tr class="text-center">
                            <td>
                                <h6 class="mb-0 text-md text-capitalize"><?= $value['name'] ?></h6>
                            </td>
                            <td>
                                <h6 class="mb-0">
                                    <img src="<?= base_url("assets/admin/img/city_slider/".$value['image_load']."/". $value["image"]) ?>" width="200"  class="rounded" alt="<?= $value["name"] ?>">
                                </h6>
                            </td>
                            <td>
                                <h6 class="mb-0 text-md text-capitalize"><?= $value['state'] ?></h6>
                            </td>
                            <td>
                                <h6 class="mb-0 text-md text-capitalize"><?= $value['state_area'] ?></h6>
                            </td>
                            <td>
                                <h6 class="mb-0 text-md text-capitalize">
                                    <?php if( strtolower($value['image_load'])=="compress" ){
                                        echo "Fast";
                                    }else {
                                        echo "Slow";
                                    } ?>

                                </h6>
                            </td>
                            <td class="align-middle text-center text-sm text-capitalize">
                                <?php if(ucwords($value['privacy'])=="Public"):?>
                                    <span class="badge badge-sm bg-gradient-info"><?= $value['privacy'] ?></span>
                                <?php else:?>
                                    <span class="badge badge-sm bg-gradient-warning"><?= $value['privacy'] ?></span>
                                <?php endif;?>
                            </td>
                            <td class="align-middle">
                                <a href="<?= url_to("admin/slider/edit", $value['id']) ?>" class="badge badge-sm bg-gradient-success">
                                    Edit
                                </a>
                                <a href="<?= url_to("admin/slider/delete",  $value['id']) ?>" class="badge badge-sm bg-gradient-danger">
                                    Remove
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                <hr>
                <?php if($pager->getPageCount() > 1 ): ?>
                    <?= $pager->simpleLinks() ?>
                <?php endif;?>
            </div>
        </div>s
    <?php else: ?>
        <div class="alert-info text-white alert p-2 text-center mx-4 mt-4" role="alert"><i class="fas fa-exclamation-triangle"></i> No City Slider Data Found</div>
        <div class="text-center">
            <a href="<?= url_to("admin/slider/add") ?>" class="btn btn-primary mb-2"> Add Slider</a
        </div>
    <?php endif;?>
</div>
<!--end city slider-->
<?= $this->endSection()?>
