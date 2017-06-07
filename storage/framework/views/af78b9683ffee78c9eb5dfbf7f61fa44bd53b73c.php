<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Cập nhật thông tin người dùng</h4>

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
                                <form class="form-horizontal" action="<?php echo e(route('user.update', ['id' => $objUser->id])); ?>" role="form" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tên tài khoản (*)</label>
                                        <div class="col-md-10">
                                            <input type="text" disabled readonly name="username" class="form-control" value="<?php echo e($objUser->username); ?>" placeholder="Nhập tài khoản...">
                                        </div>
                                    </div>
                                    <?php if(Auth::user()->role == 1): ?>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Quyền (*)</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="role">
                                                <?php $__currentLoopData = $objRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($roleItem->id == $objUser->role): ?>
                                                        <option value="<?php echo e($roleItem->id); ?>" selected><?php echo e($roleItem->name); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($roleItem->id); ?>"><?php echo e($roleItem->name); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Email (*)</label>
                                        <div class="col-md-10">
                                            <input type="email" name="email" class="form-control" value="<?php echo e($objUser->email); ?>" placeholder="Nhập email...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Nhập lại email (*)</label>
                                        <div class="col-md-10">
                                            <input type="email" name="confirm-email" value="<?php echo e($objUser->email); ?>" class="form-control" placeholder="Nhập lại email...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Nhập họ tên (*)</label>
                                        <div class="col-md-10">
                                            <input type="text" name="fullname" value="<?php echo e($objUser->fullname); ?>" class="form-control" placeholder="Nhập họ tên...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Bạn có muốn thay đổi mật khẩu không?</label>
                                        <div class="col-md-10">
                                            <input type="checkbox" value="off" id="check" name="check">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Mật khẩu (*)</label>
                                        <div class="col-md-10">
                                            <input type="password" disabled="" class="form-control" id="password" name="password" value="" placeholder="Nhập mật khẩu...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nhập lại mật khẩu (*)</label>
                                        <div class="col-md-10">
                                            <input type="password" disabled="false" id="confirm_password" class="form-control" name="confirm-password" value="" placeholder="Nhập lại mật khẩu...">
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
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('change', '#check', function () {
                if(this.checked){
                    $('#confirm_password').prop('disabled', false);
                    $('#password').attr('disabled', false);
                    $('#check').val('on');

                } else{
                    $('#confirm_password').prop('disabled', true);
                    $('#password').attr('disabled', true);
                    $('#check').val('off');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>