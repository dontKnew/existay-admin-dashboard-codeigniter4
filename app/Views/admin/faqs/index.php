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
                        <form action="<?= url_to("admin/faqs") ?>" method="post">
                            <select name="per_page" class="form-control" onchange="this.form.submit()" >
                                <option value="5"  <?php if($perPage==05){echo "selected";} ?>>05</option>
                                <option value="10"  <?php if($perPage==10){echo "selected";} ?>>10</option>
                                <option value="15"  <?php if($perPage==15){echo "selected";} ?>>15</option>
                                <option value="20"  <?php if($perPage==20){echo "selected";} ?>>20</option>
                                <option value="20"  <?php if($perPage==25){echo "selected";} ?>>25</option>
                                <option value="20"  <?php if($perPage==30){echo "selected";} ?>>30</option>
                            </select>
                            <input type="hidden" name="apartment_title" value="<?php if(isset($_GET['apartment_title'])){echo trim($_GET['apartment_title']);}else{ echo $title;} ?>">
                        </form>
                    </h6>
                    <a href="<?= url_to("admin/faqs/add") ?>" class="btn btn-primary"> Add State</a>
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
                    <form action="<?= url_to("admin/faqs") ?>" method="get" class="px-sm-4 text-center">
                        <div class="d-flex align-items-center px-4">
                            <select class="form-control-sm form-control" name="apartment_title" onchange="this.form.submit()" >
                                <option value="">Filter by Apartment</option>
                                <?php foreach($apartmentTitle as $value):?>
                                    <?php if($value['title'] !== $title): ?>
                                        <option value="<?= $value['title'] ?>"><?= $value['title'] ?> </option>
                                    <?php else:?>
                                        <option value="<?= $value['title'] ?>" selected><?= $value['title'] ?> </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" name="per_page" value="<?php echo $perPage; ?>">
                            <a href="<?= route_to("admin/faqs") ?>" class="btn btn-sm btn-danger mt-3 mx-1">Reset</a>
                        </div>
                    </form>
                    <div class="table-responsive px-2">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr class="">
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Apartment Title</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Question</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Answer</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $value): ?>
                            <tr class="">
                                <td>
                                    <h6 class="mb-0 text-md text-capitalize"><?= word_limiter($value['apartment_title'],7) ?></h6>
                                </td>
                                <td colspan="1">
                                    <h6 class="mb-0 text-md text-capitalize"><?= word_limiter($value['question'],5) ?></h6>
                                </td>
                                <td colspan="1">
                                    <h6 class="mb-0 text-md text-lowercase"><?= word_limiter($value['answer'],5) ?></h6>
                                </td>
                                <td class="align-middle text-center text-sm text-capitalize">
                                    <?php if($value['privacy']=="Public"):?>
                                        <span class="badge badge-sm bg-gradient-info"><?= $value['privacy'] ?></span>
                                    <?php else:?>
                                        <span class="badge badge-sm bg-gradient-warning"><?= $value['privacy'] ?></span>
                                    <?php endif;?>
                                </td>
                                <td class="align-middle">
                                    <a href="<?= url_to("admin/faqs/edit", $value['id']) ?>" class="badge badge-sm bg-gradient-success">
                                        Edit
                                    </a>
                                    <a href="<?= url_to("admin/faqs/delete",  $value['id']) ?>" class="badge badge-sm bg-gradient-danger">
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
                    <div class="alert-info text-white alert p-2 text-center mx-4 mt-4" role="alert"><i class="fas fa-exclamation-triangle"></i> No FAQs Record Found</div>
                    <div class="text-center">
                        <a href="<?= url_to("admin/faqs/add") ?>" class="btn btn-primary mb-2"> Add FAQ</a
                    </div>
                <?php endif;?>
            </div>
        </div> <!--ending card-->
    </div>

</div>

<?= $this->endSection()?>
