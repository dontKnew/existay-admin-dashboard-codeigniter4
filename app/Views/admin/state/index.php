<?= $this->extend("include/admin") ?>
<?= $this->section("main-contents")?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 " > <!--starting card-->
                <?php if($data): ?>
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">

                    <h6 class="d-flex flex-sm-row align-items-center">
                        <span class="mx-1"> Show-Row :</span>
                        <form action="<?= url_to("admin/state") ?>" method="post">
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
                    <a href="<?= url_to("admin/state/add") ?>" class="btn btn-primary"> Add State</a>
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
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">State</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Snapshot</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Map Embed Code</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $value): ?>
                            <tr class="text-center">
                                <td>
                                    <h6 class="mb-0 text-md text-capitalize"><?= $value['state'] ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <img src="<?= base_url("assets/admin/img/state/compress/". $value["image"]) ?>" width="100" height="auto" alt="<?= old("state") ?>">
                                    </h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-md text-lowercase"><?= str_split($value['google_map_link'],15)[0] ?>...</h6>
                                </td>
                                <td class="align-middle text-center text-sm text-capitalize">
                                    <?php if(ucwords($value['privacy'])=="Public"):?>
                                        <span class="badge badge-sm bg-gradient-info"><?= $value['privacy'] ?></span>
                                    <?php else:?>
                                        <span class="badge badge-sm bg-gradient-warning"><?= $value['privacy'] ?></span>
                                    <?php endif;?>
                                </td>
                                <td class="align-middle">
                                    <a href="<?= url_to("admin/state/edit", $value['id']) ?>" class="badge badge-sm bg-gradient-success">
                                        Edit
                                    </a>
                                    <a href="<?= url_to("admin/state/delete",  $value['id']) ?>" class="badge badge-sm bg-gradient-danger">
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
                    <div class="alert-info text-white alert p-2 text-center mx-4 mt-4" role="alert"><i class="fas fa-exclamation-triangle"></i> No State Data Found</div>
                    <div class="text-center">
                        <a href="<?= url_to("admin/state/add") ?>" class="btn btn-primary mb-2"> Add State</a
                    </div>
                <?php endif;?>
            </div>
        </div> <!--ending card-->
    </div>

</div>

<?= $this->endSection()?>
