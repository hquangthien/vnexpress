<?php $__env->startSection('content'); ?>
    <?php
    $modelNews = new \App\Model\News();
    ?>
    <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
            <div class="single_category wow fadeInDown">
                <div class="archive_style_1">
                    <div style="margin-top:15px;">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(route('vnexpress.page.home')); ?>">Trang chủ</a></li>
                            <li><a href="javascript:void(0)">Tìm kiếm</a></li>
                        </ol>
                    </div>
                    <?php if(sizeof($objNews) == 0): ?>
                        <p class="alert alert-danger"> Không có kết quả nào cho từ khóa mà bạn tìm kiếm </p>
                    <?php else: ?>
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">
                                Có <?php echo e(sizeof($objNews)); ?> kết quả tìm kiếm cho từ khóa "<?php echo e($key); ?>"
                            </span></h2>
                        <?php $__currentLoopData = $objNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($newsItem->title), 'id' => $newsItem->id]);
                                $countComments = $modelNews->countCommentOfNews($newsItem->id)[0]->count_cmt;
                            ?>
                            <div class="business_category_left wow fadeInDown height-category">
                                <ul class="fashion_catgnav">
                                    <li>
                                        <div class="catgimg2_container">
                                            <a href="<?php echo e($url); ?>">
                                                <img alt="<?php echo e(str_slug($newsItem->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($newsItem->picture); ?>">
                                            </a>
                                        </div>
                                        <h2 class="catg_titile">
                                            <a href="<?php echo e($url); ?>"><?php echo e($newsItem->title); ?></a>
                                        </h2>
                                        <div class="comments_box">
                                            <span class="meta_date"><?php echo e($newsItem->created_at); ?></span>
                                            <span class="meta_comment">
                                                <a href="<?php echo e($url); ?>">
                                                    <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận
                                                </a>
                                            </span>
                                            <p><?php echo str_limit($newsItem->preview, 90); ?> <span class="meta_more"><a  href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($newsItem->title), 'id' => $newsItem->id])); ?>">Đọc tiếp...</a></span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="pagination_area">
            <nav>
                <?php echo e($objNews->links()); ?>

            </nav>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.vnexpress.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>