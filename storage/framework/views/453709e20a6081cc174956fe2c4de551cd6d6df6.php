<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Sửa danh mục tin</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <?php if(session('msg')): ?>
                                    <p class="alert alert-warning"><?php echo e(session('msg')); ?></p>
                                <?php endif; ?>
                                <form class="form-horizontal" action="<?php echo e(route('cat.update', ['id' => $objCat->id ])); ?>" role="form" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tên danh mục tin (*)</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" value="<?php echo e($objCat->name); ?>" placeholder="Nhập danh mục tin...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Danh mục cha</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="parrent_cat">
                                                <option value="<?php echo e(null); ?>">-- Không có --</option>
                                                <?php $__currentLoopData = $objSuperCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $superCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($superCat->id == $objCat->parrent_cat): ?>
                                                        <option value="<?php echo e($superCat->id); ?>" selected><?php echo e($superCat->name); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($superCat->id); ?>"><?php echo e($superCat->name); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" value="Cập nhật" class="btn btn-lg btn-primary">
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