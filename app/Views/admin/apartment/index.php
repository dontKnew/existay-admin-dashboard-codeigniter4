<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4"> <!--starting card-->
                <?php if($data): ?>
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="d-flex flex-sm-row align-items-center">
                            <span class="mx-1"> Show-Row :</span>
                            <form action="<?= url_to("admin/apartment") ?>" method="post">
                                <select name="per_page" class="form-control" onchange="this.form.submit()" >
                                    <option value="5"   <?php if($perPage==05){echo "selected";} ?>>05</option>
                                    <option value="10"  <?php if($perPage==10){echo "selected";} ?>>10</option>
                                    <option value="15"  <?php if($perPage==15){echo "selected";} ?>>15</option>
                                    <option value="20"  <?php if($perPage==20){echo "selected";} ?>>20</option>
                                    <option value="20"  <?php if($perPage==25){echo "selected";} ?>>25</option>
                                    <option value="20"  <?php if($perPage==30){echo "selected";} ?>>30</option>
                                </select>
                            </form>
                        </h6>
                        <a href="<?= url_to("admin/apartment/add") ?>" class="btn btn-primary"> Add Aparment</a>
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
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Title</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">State</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">State Area</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Apartment Price</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Apartment Image</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Privacy</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $value):;?>
                                    <tr class="text-center">
                                        <td>
                                            <h6 class="mb-0 text-md text-capitalize"><?= word_limiter($value['title'],4) ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-md text-capitalize"><?= $value['state'] ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-md text-capitalize"><?= $value['state_area'] ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-md text-capitalize"><?= $value['apartment_price'] ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">
                                                <img src="<?= base_url("assets/admin/img/apartment/original/". $value["apartment_image"]) ?>" width="150"  class="rounded" height="140" alt="<?= $value["state_area"] ?>">
                                            </h6>
                                        </td>
                                        <td class="align-middle text-center text-sm text-capitalize">
                                            <?php if(ucwords($value['privacy'])=="Public"):?>
                                                <span class="badge badge-sm bg-gradient-info"><?= $value['privacy'] ?></span>
                                            <?php else:?>
                                                <span class="badge badge-sm bg-gradient-warning"><?= $value['privacy'] ?></span>
                                            <?php endif;?>
                                        </td>
                                        <td>
                                            <a href="<?= url_to("admin/apartment/edit", $value['id']) ?>" class="badge badge-sm bg-gradient-success">
                                                Edit
                                            </a>
                                            <?php $state11 = underscore(strtolower($value['state'])); ?>
                                            <a href="<?= url_to("apartment/city",dasherize($state11), $value['url_title']) ?>" class="badge badge-sm bg-gradient-primary">
                                                View
                                            </a>
                                            <a href="<?= url_to("admin/apartment/delete",  $value['id']) ?>" class="badge badge-sm bg-gradient-danger">
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
                    </div>
                <?php else: ?>
                    <div class="alert-info text-white alert p-2 text-center mx-4 mt-4" role="alert"><i class="fas fa-exclamation-triangle"></i> No Aparment Data Found</div>
                    <div class="text-center">
                        <a href="<?= url_to("admin/apartment/add") ?>" class="btn btn-primary mb-2"> Add Aparment</a
                    </div>
                <?php endif;?>
            </div>
        </div> <!--ending card-->
    </div>

</div>

<?= $this->endSection()?>
