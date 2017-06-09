<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Chi tiết email</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label class="col-md-2 control-label">Người gửi: </label>
                                    <div class="col-md-10">
                                        <?php echo e($objContact->name); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 control-label">Email: </label>
                                    <div class="col-md-10">
                                        <?php echo e($objContact->mail); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 control-label">Chủ đề: </label>
                                    <div class="col-md-10">
                                        <?php echo e($objContact->subject); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 control-label">Nội dung: </label>
                                    <div class="col-md-10">
                                        <?php echo e($objContact->content); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <form class="form-horizontal" action="<?php echo e(route('contact.reply')); ?>" role="form" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="name" class="form-control" value="<?php echo e(Auth::user()->fullname); ?>">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Email: </label>
                                        <div class="col-md-10">
                                            <input type="text" name="mail" class="form-control" value="<?php echo e($objContact->mail); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Chủ đề: </label>
                                        <div class="col-md-10">
                                            <input type="text" name="subject" class="form-control" value="Reply: <?php echo e($objContact->subject); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nội dung: </label>
                                        <div class="col-md-10">
                                            <textarea type="text" rows="5" name="detail" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" value="Gửi" class="btn btn-lg btn-primary">
                                        <input type="reset" name="reset" value="Nhập lại" class="btn btn-lg btn-default">
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

<?php echo $__env->make('templates.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>