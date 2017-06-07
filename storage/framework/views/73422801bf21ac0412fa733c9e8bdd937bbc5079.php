<?php $__env->startSection('content'); ?>
    <?php
        $catModel = new \App\Model\Cat();
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Danh sách danh mục tin</h4>
                        <?php if(session('msg')): ?>
                            <p class="alert alert-success"> <?php echo e(session('msg')); ?> </p>
                        <?php endif; ?>
                        <?php if(Auth::user()->role == 1): ?>
                            <a href="<?php echo e(route('cat.create')); ?>" class="btn btn-primary">Tạo mới</a>
                        <?php endif; ?>
                        <br /><br />
                        <div class="table-responsive">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $objSuperCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $superCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $countNewsOfSuperCat = $catModel->countNewsOfSuperCat($superCat->id)[0]->number_news;
                                        $countSubCatOfSuperCat = (isset($objSubCat[$superCat->id]))?sizeof($objSubCat[$superCat->id]):0;
                                    ?>
                                    <tr>
                                        <td><?php echo e($superCat->name); ?></td>
                                        <td class="actions text-center">
                                            <?php if(Auth::user()->role == 1): ?>
                                                <a href="<?php echo e(route('cat.edit', ['id' => $superCat->id])); ?>"
                                                   class="on-default edit-row">
                                                    <i class="fa fa-pencil"></i>
                                                </a> ||
                                                <a href="<?php echo e(route('cat.delete', ['id' => $superCat->id])); ?>"
                                                   onclick="return confirm('Có <?php echo e($countSubCatOfSuperCat); ?> danh mục con và <?php echo e($countNewsOfSuperCat); ?> tin tức thuộc danh mục tin này \n Bạn có muốn xóa không? ')"
                                                   class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            <?php else: ?>
                                                No action
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php if(isset($objSubCat[$superCat->id])): ?>
                                        <?php $__currentLoopData = $objSubCat[$superCat->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $countNewsOfSubCat = $catModel->countNewsOfSubCat($subCat->id)[0]->number_news;
                                            ?>
                                            <tr>
                                                <td> |--- <?php echo e($subCat->name); ?></td>
                                                <td class="actions text-center">
                                                    <?php if(Auth::user()->role == 1): ?>
                                                        <a href="<?php echo e(route('cat.edit', ['id' => $subCat->id])); ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a> ||
                                                        <a href="<?php echo e(route('cat.delete', ['id' => $subCat->id])); ?>"
                                                           onclick="return confirm('Có <?php echo e($countNewsOfSubCat); ?> tin tức thuộc danh mục tin này \n Bạn có muốn xóa không? ')"
                                                           class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                    <?php else: ?>
                                                        No action
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        function changeActive(id) {
            updateActive('cat/active_user', id,
                function (data) {
                    $('#user'+id).attr('src', '<?php echo e($adminUrl); ?>assets/images/'+ data.active +'.gif');
                },
                function (error) {
                    console.log(error);
                }
            );
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>