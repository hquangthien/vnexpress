<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Danh sách tin</h4>
                        <?php if(session('msg')): ?>
                            <p class="alert alert-success"> <?php echo e(session('msg')); ?> </p>
                        <?php endif; ?>
                        <a href="<?php echo e(route('news.create')); ?>" class="btn btn-primary">Tạo mới</a>
                        <br /><br />
                        <div class="table-responsive">
                            <table class="table m-0 text-center table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục tin</th>
                                    <th>Ảnh bìa</th>
                                    <th>Lượt xem</th>
                                    <th>Người đăng</th>
                                    <th>Ghim top</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $objNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($newsItem->id); ?></th>
                                    <td>
                                        <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($newsItem->title), 'id' => $newsItem->id])); ?>"><?php echo e($newsItem->title); ?></a>
                                    </td>
                                    <td><?php echo e($newsItem->cat_name); ?></td>
                                    <td>
                                        <img width="150" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($newsItem->picture); ?>" />
                                    </td>
                                    <td><?php echo e($newsItem->views); ?></td>
                                    <td><?php echo e($newsItem->username); ?></td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="changeActive(<?php echo e($newsItem->id); ?>)">
                                            <?php if($newsItem->pin == 1): ?>
                                                <img id="news<?php echo e($newsItem->id); ?>" src="<?php echo e($adminUrl); ?>assets/images/1.gif">
                                            <?php else: ?>
                                                <img id="news<?php echo e($newsItem->id); ?>" src="<?php echo e($adminUrl); ?>assets/images/0.gif">
                                            <?php endif; ?>
                                        </a>
                                    </td>

                                    <td class="actions">
                                        <?php if(Auth::user()->role == 1 OR Auth::user()->id == $newsItem->created_by): ?>
                                            <a href="<?php echo e(route('news.edit', ['id' => $newsItem->id])); ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a> ||
                                            <a href="<?php echo e(route('news.delete', ['id' => $newsItem->id])); ?>" onclick="return confirm('Bạn có muốn xóa tin tức này không?')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('news.edit', ['id' => $newsItem->id])); ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <?php echo e($objNews->links()); ?>

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
            updateActive('news/active_news', id,
                function (data) {
                    $('#news'+id).attr('src', '<?php echo e($adminUrl); ?>assets/images/'+ data.active +'.gif');
                },
                function (error) {
                    console.log(error);
                }
            );
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>