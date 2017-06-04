<div class="col-lg-4 col-md-4">
    <div class="content_bottom_right">
        <div class="single_bottom_rightbar">
            <h2>Cập nhật</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
                <?php $__currentLoopData = $objRecentNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <div class="media wow fadeInDown">
                            <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($recentNews->title), 'id' => $recentNews->id])); ?>"
                              class="media-left">
                                <img alt="<?php echo e(str_slug($recentNews->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($recentNews->picture); ?>">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($recentNews->title), 'id' => $recentNews->id])); ?>">
                                        <?php echo e($recentNews->title); ?>

                                    </a>
                                </h4>
                                <p><?php echo str_limit($recentNews->preview, 100); ?> </p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
                <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Xem nhiều nhất</a></li>
                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Bình luận mới nhất</a></li>
            </ul>
            <div class="tab-content">
                <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                    <ul class="small_catg popular_catg wow fadeInDown">
                        <?php $__currentLoopData = $objPopularNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popularNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="media wow fadeInDown">
                                    <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id])); ?>"
                                       class="media-left">
                                        <img alt="<?php echo e(str_slug($popularNews->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($popularNews->picture); ?>">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id])); ?>">
                                                <?php echo e($popularNews->title); ?>

                                            </a>
                                        </h4>
                                        <p><?php echo str_limit($popularNews->preview, 100); ?> </p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div id="recentComent" class="tab-pane fade" role="tabpanel">
                    <ul class="small_catg popular_catg">
                        <?php $__currentLoopData = $objRecentNewsComment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popularNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="media">
                                    <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id])); ?>"
                                       class="media-left">
                                        <img alt="<?php echo e(str_slug($popularNews->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($popularNews->picture); ?>">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id])); ?>">
                                                <?php echo e($popularNews->title); ?>

                                            </a>
                                        </h4>
                                        <p><?php echo str_limit($popularNews->preview, 100); ?> </p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="single_bottom_rightbar">
            <h2>Blog Archive</h2>
            <div class="blog_archive wow fadeInDown">
                <form action="#">
                    <select>
                        <option value="">Blog Archive</option>
                        <option value="">October(20)</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Popular Lnks</h2>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Blog Home</a></li>
                <li><a href="#">Error Page</a></li>
                <li><a href="#">Social link</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</div>