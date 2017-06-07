<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Input Types</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Text</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="Some text value...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" value="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Placeholder</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="placeholder">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Text area</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="editor" rows="5"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end col -->

                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div>

        </div> <!-- container -->

    </div> <!-- content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="/public/plugins/ckeditor/ckeditor.js" language="javascript" type="text/javascript"></script>
    <script src="/public/plugins/ckfinder/ckfinder.js" language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor', {
            filebrowserBrowseUrl : '/public/plugins/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/public/plugins/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : '/public/plugins/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : '/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            height  : '500px',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>