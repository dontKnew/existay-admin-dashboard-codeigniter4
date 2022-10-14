<?= $this->extend("include/admin") ?>
<?= $this->section("text-editor-script")?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/super-build/ckeditor.js"></script>
<script>
    CKEDITOR.ClassicEditor.create(document.getElementById("overview_description"), {
        toolbar: {
            items: [
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'insertTable',  'codeBlock', '|',
                'specialCharacters', 'horizontalLine', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        // Changing the language of the interface requires loading the language file using the <script> tag.
        // language: 'es',
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [
                {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'},
                {model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3'},
                {model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4'},
                {model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5'},
                {model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6'}
            ]
        },
        placeholder: 'Design Your Post here... ',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        fontSize: {
            options: [10,11, 12, 13, 14, 'default', 15,16,17,18,19,20,21,22,23,24,25],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }
            ]
        },
        // The "super-build" contains more premium features that require additional configuration, disable them below.
        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
        removePlugins: [
            'CKBox',
            'CKFinder',
            'EasyImage',
            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
            // Storing images as Base64 is usually a very bad idea.
            // Replace it on production website with other solutions:
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
            // 'Base64UploadAdapter',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType
            'MathType'
        ]
    }).catch( error => {
        console.error("CK-Editor-Error", error );
    });

    CKEDITOR.ClassicEditor.create(document.getElementById("house_rules"), {
        toolbar: {
            items: [
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'insertTable',  'codeBlock', '|',
                'specialCharacters', 'horizontalLine', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        // Changing the language of the interface requires loading the language file using the <script> tag.
        // language: 'es',
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [
                {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'},
                {model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3'},
                {model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4'},
                {model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5'},
                {model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6'}
            ]
        },
        placeholder: 'Design Your Post here... ',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        fontSize: {
            options: [10,11, 12, 13, 14, 'default', 15,16,17,18,19,20,21,22,23,24,25],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }
            ]
        },
        // The "super-build" contains more premium features that require additional configuration, disable them below.
        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
        removePlugins: [
            'CKBox',
            'CKFinder',
            'EasyImage',
            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
            // Storing images as Base64 is usually a very bad idea.
            // Replace it on production website with other solutions:
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
            // 'Base64UploadAdapter',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType
            'MathType'
        ]
    }).catch( error => {
        console.error("CK-Editor-Error", error );
    });
</script>
<?= $this->endSection() ?>

<?= $this->section("main-contents")?>
<!-- START ADD BLOG POST  -->
<!--<div class="alert alert-warning text-white text-center" id="loading">Please Wait...</div>-->
<div class="container-fluid pt-0 px-0 my-2">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-2 mt-4 text-center text-black"> Update the State Apartment Information</h4>
            <div class="text-center">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert-success text-white alert p-2" role="alert"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert-danger text-white alert p-2" role="alert"><?= session()->getFlashdata('err') ?></div>
                <?php endif; ?>
            </div>
            <form action="<?= url_to("admin/apartment/update") ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <h6 class="text-bg-light text-primary p-2 mt-2">SEO INFORMATION - </h6>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Apartment Title</label>
                            <input type="text" name="title" value="<?= ucwords($data["title"]) ?>" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Meta Keywords</label>
                            <textarea  name="meta_keywords" rows="2" class="form-control form-white " required><?= $data["meta_keywords"] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Meta Description </label>
                            <textarea  name="meta_description" rows="3" class="form-control form-white " required><?= $data["meta_description"] ?></textarea>
                        </div>
                    </div>
                </div>
                <h6 class="text-bg-light text-primary p-2 mt-2">PAGE INFORMATION </h6>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Apartment Image</label>
                            <input type="file" name="apartment_image" value="" class="form-control form-white " >
                            <img src="<?= base_url("assets/admin/img/apartment/original/". $data["apartment_image"]) ?>" width="100" height="auto" alt="<?= $data["title"] ?>" class="rounded">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Apartment Price </label>
                            <input type="number" name="apartment_price" value="<?= $data["apartment_price"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Short Description </label>
                            <textarea  name="short_description" rows="4" class="form-control form-white " required><?= $data["short_description"] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                    <div class="mb-1">
                        <label for="" class="form-label text-blue">Select State</label>
                        <select name="state" class="form-control form-white" required>
                            <?php if($data1):?>
                                <?php foreach($data1 as $value):?>
                                    <option value="<?= $value['state'] ?>"><?= ucwords($value['state']) ?></option>
                                <?php endforeach;?>
                            <?php else:?>
                                <option value="">No State Found</option>
                            <?php endif;?>
                        </select>
                        <a href="<?= url_to("admin/state/add") ?>" target="_blank" class="badge badge-sm bg-gradient-danger">Add State</a>
                    </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">State Area </label>
                            <input type="text" name="state_area" value="<?= $data["state_area"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Stars</label>
                            <select name="stars" class="form-control form-white " required>
                                <option value="1" <?php if($data["stars"]=="1"){echo "selected";}?>>One Star</option>
                                <option value="2" <?php if($data["stars"]=="2"){echo "selected";}?>>Two Stars</option>
                                <option value="3" <?php if($data["stars"]=="3"){echo "selected";}?>>Three Stars</option>
                                <option value="4" <?php if($data["stars"]=="4"){echo "selected";}?>>Four Stars</option>
                                <option value="5" <?php if($data["stars"]=="5"){echo "selected";}?>>Five Stars</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">State Area Map Code </label>
                            <input type="text" name="state_area_map" value="<?= $data["state_area_map"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <h6 class="text-bg-light text-primary p-2 mt-2">OVERVIEW </h6>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Overview Description </label>
                            <textarea  name="overview_description" id="overview_description" class="form-control form-white " required>
                                <?= $data["overview_description"] ?>
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Overview Title </label>
                            <input type="text" name="overview_title" value="<?= $data["overview_title"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">How many guest can be stay therein ?</label>
                            <input type="text" name="guest_no"  maxlength="2" value="<?= $data["guest_no"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">How many Bed available therein ? </label>
                            <input type="text" name="bed_no" maxlength="2" value="<?= $data["bed_no"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">How many bathroom available therein ?</label>
                            <input type="text" name="bathroom_no" maxlength="2" value="<?= $data["bathroom_no"] ?>" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue"> Hot Deal Rate </label>
                            <input type="number" name="hot_new_price" value="<?= $data["hot_new_price"] ?>" placeholder="new price" class="form-control form-white " required>
                            <input type="number" name="hot_old_price" value="<?= $data["hot_old_price"] ?>" placeholder="old price" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue"> Hot Deal Text </label>
                            <input type="text" name="hot_deal_text1" value="<?= $data["hot_deal_text1"] ?>" placeholder="Non Refundable" class="form-control form-white " required>
                            <input type="text" name="hot_deal_text2" value="<?= $data["hot_deal_text2"] ?>" placeholder="Pay Now" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue"> Best Available Rate </label>
                            <input type="number" name="best_new_price" value="<?= $data["best_new_price"] ?>" placeholder="new price" class="form-control form-white " required>
                            <input type="number" name="best_old_price" value="<?= $data["best_old_price"] ?>" placeholder="old price" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue"> Best Available Text </label>
                            <input type="text" name="best_text1" value="<?= $data["best_text1"] ?>" placeholder="Pay on Arrival" class="form-control form-white " required>
                            <input type="text" name="best_text2" value="<?= $data["best_text2"] ?>" placeholder="Free Cancellation" class="form-control form-white " required>
                        </div>
                    </div>
                </div>
                <h6 class="text-bg-light text-primary p-2 mt-2">HOUSE RULES INFORMATION </h6>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">House Rules </label>
                            <textarea  name="house_rules"  id="house_rules" class="form-control form-white " required>
                                <?= $data["house_rules"] ?>
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label for="" class="form-label text-blue">Aapartment Privacy</label>
                            <select name="privacy" class="form-control form-white " required>
                                <option value="Public"<?php if(ucwords($data['privacy'])=="Public"){echo "selected";}?> >Public</option>
                                <option value="Private" <?php if(ucwords($data['privacy'])=="Private"){echo "selected";}?>  >Private</option>
                            </select>
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
