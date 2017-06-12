<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <p class="alert alert-danger">Bạn không có quyền truy cập chức năng này</p>
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>