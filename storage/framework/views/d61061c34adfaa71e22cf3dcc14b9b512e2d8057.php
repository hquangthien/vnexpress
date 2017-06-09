<?php $__env->startSection('slider'); ?>
    <?php
        $modelNews = new \App\Model\News();
    ?>
    <div class="content_top">
        <div class="row">
            <div class="row" style="padding-left: 50px">
                <h2 style="font-size: 15px; color: #7a8992">
                    <strong><?php echo e(mb_strtoupper('Hôm nay xem gì?')); ?></strong>
                </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm6">
                <div class="latest_slider">
                    <div class="slick_slider">
                        <?php for($i = 0; $i < sizeof($objPinNews) - 4; $i++): ?>
                            <div class="single_iteam">
                                <img height="425px" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($objPinNews[$i]->picture); ?>"
                                     alt="<?php echo e(str_slug($objPinNews[$i]->title)); ?>">
                                <h2>
                                    <a class="slider_tittle"
                                       href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($objPinNews[$i]->title), 'id' => $objPinNews[$i]->id])); ?>">
                                        <?php echo e($objPinNews[$i]->title); ?>

                                    </a>
                                </h2>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm6">
                <div class="content_top_right">
                    <ul class="featured_nav wow fadeInDown">
                        <?php for($i = sizeof($objPinNews)-1; $i > sizeof($objPinNews) -5; $i--): ?>
                            <li>
                                <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($objPinNews[$i]->picture); ?>"
                                     alt="<?php echo e(str_slug($objPinNews[$i]->title)); ?>">
                                <div class="title_caption">
                                    <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($objPinNews[$i]->title), 'id' => $objPinNews[$i]->id])); ?>">
                                        <?php echo e($objPinNews[$i]->title); ?>

                                    </a>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content_middle">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="content_middle_leftbar">
                <div class="single_category wow fadeInDown">
                    <?php
                        $firstKey = key($objNewsPopular);
                        $tmp = explode('-', $firstKey);
                        $idFirstCat = array_first($tmp);
                        $nameFirstCat = end($tmp);
                        $firstPopularNews = array_shift($objNewsPopular);
                    ?>
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span>
                        <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($nameFirstCat), 'id' => $idFirstCat])); ?>" class="title_text"><?php echo e($nameFirstCat); ?></a>
                    </h2>
                    <?php if(isset($objSubCat[$idFirstCat])): ?>
                            <?php $i = 0 ?>
                            |
                        <?php $__currentLoopData = $objSubCat[$idFirstCat]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <small>
                                <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id])); ?>"><strong><?php echo e($subCat->name); ?></strong></a>
                            </small>
                            |
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <br /><br />
                    <ul class="catg1_nav">
                        <?php $__currentLoopData = $firstPopularNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arFirstNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($arFirstNews->title), 'id' => $arFirstNews->id]);
                            ?>
                            <li>
                                <div class="catgimg_container">
                                    <a href="<?php echo e($url); ?>" class="catg1_img">
                                        <img alt="<?php echo e(str_slug($arFirstNews->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($arFirstNews->picture); ?>">
                                    </a>
                                </div>
                                <h3 class="post_titile">
                                    <a href="<?php echo e($url); ?>">
                                        <?php echo e(str_limit($arFirstNews->title, 100)); ?>

                                    </a>
                                </h3>
                            </li>
                            <?php if($i++ == 4): ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row" style="padding-left: 15px">
                <h2 style="font-size: 15px">
                    <a href="pages/single.html"><strong><?php echo e(mb_strtoupper('có thể bạn thích' )); ?></strong></a>
                </h2>
            </div>
            <div class="content_middle_middle">
                <div class="slick_slider2">
                    <?php if(sizeof($objFavouriteNewsOfUser) > 0): ?>
                        <?php
                            $sliderNews2 = $objFavouriteNewsOfUser;
                        ?>
                    <?php else: ?>
                        <?php
                        $sliderNews2 = $objPopularNews;
                        ?>
                    <?php endif; ?>
                    <?php $__currentLoopData = $sliderNews2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliderNewsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single_featured_slide">
                            <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($sliderNewsItem->title), 'id' => $sliderNewsItem->id])); ?>">
                                <img height="401px" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($sliderNewsItem->picture); ?>" alt="<?php echo e(str_slug($sliderNewsItem->title)); ?>">
                            </a>
                            <h2>
                                <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($sliderNewsItem->title), 'id' => $sliderNewsItem->id])); ?>"><?php echo e($sliderNewsItem->title); ?></a>
                            </h2>
                            <p><?php echo e(str_limit($sliderNewsItem->preview, 100)); ?>...</p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
            <div class="games_fashion_area">
                <div class="games_category">
                    <?php
                        $secondKey = key($objNewsPopular);
                        $tmp = explode('-', $secondKey);
                        $idSecondCat = array_first($tmp);
                        $nameSecondCat = end($tmp);
                        $secondPopularNews = array_shift($objNewsPopular);
                    ?>
                    <div class="single_category">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span>
                            <a class="title_text" href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($nameSecondCat), 'id' => $idSecondCat])); ?>"><?php echo e($nameSecondCat); ?></a>
                        </h2>
                        <?php if(isset($objSubCat[$idSecondCat])): ?>
                            <?php $i = 0 ?>
                                |
                            <?php $__currentLoopData = $objSubCat[$idSecondCat]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <small>
                                    <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id])); ?>"><strong><?php echo e($subCat->name); ?></strong></a>
                                </small>
                                |
                                <?php if($i++ == 4): ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <br /><br />
                        <ul class="fashion_catgnav wow fadeInDown">
                            <?php
                                $largeNews = $secondPopularNews->shift(1);
                                $countComments = $modelNews->countCommentOfNews($largeNews->id)[0]->count_cmt;
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id]);
                            ?>
                            <li>
                                <div class="catgimg2_container">
                                    <a href="<?php echo e($url); ?>">
                                        <img alt="<?php echo e(str_slug($largeNews->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($largeNews->picture); ?>">
                                    </a>
                                </div>
                                <h2 class="catg_titile"><a href="<?php echo e($url); ?>"><?php echo e($largeNews->title); ?></a></h2>
                                <div class="comments_box">
                                    <span class="meta_date"><?php echo e($largeNews->created_at); ?></span>
                                    <span class="meta_comment"><a href="<?php echo e($url); ?>">
                                            <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận</a>
                                    </span>
                                </div>
                                <p><?php echo str_limit($largeNews->preview, 90); ?> <span class="meta_more"><a  href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id])); ?>">Đọc tiếp...</a></span></p>
                            </li>
                        </ul>
                        <ul class="small_catg wow fadeInDown">
                            <?php $__currentLoopData = $secondPopularNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arSecondNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $countComments = $modelNews->countCommentOfNews($arSecondNews->id)[0]->count_cmt;
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($arSecondNews->title), 'id' => $arSecondNews->id]);
                                ?>
                                <li>
                                    <div class="media"> <a class="media-left" href="<?php echo e($url); ?>">
                                            <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($arSecondNews->picture); ?>" alt="<?php echo e(str_slug($arSecondNews->title)); ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="<?php echo e($url); ?>">
                                                    <?php echo e($arSecondNews->title); ?>

                                                </a>
                                            </h4>
                                            <div class="comments_box">
                                                <span class="meta_date"><?php echo e($arSecondNews->created_at); ?></span>
                                                <span class="meta_comment">
                                                    <a href="<?php echo e($url); ?>">
                                                        <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="fashion_category">
                    <?php
                        $thirdKey = key($objNewsPopular);
                        $tmp = explode('-', $thirdKey);
                        $idThirdCat = array_first($tmp);
                        $nameThirdCat = end($tmp);
                        $thirdPopularNews = array_shift($objNewsPopular);
                    ?>
                    <div class="single_category">
                        <div class="single_category wow fadeInDown">
                            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span>
                                <a class="title_text" href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($nameThirdCat), 'id' => $idThirdCat])); ?>"><?php echo e($nameThirdCat); ?></a>
                            </h2>
                            <?php if(isset($objSubCat[$idThirdCat])): ?>
                                <?php $i = 0 ?>
                                |
                                <?php $__currentLoopData = $objSubCat[$idThirdCat]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <small>
                                        <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id])); ?>"><strong><?php echo e($subCat->name); ?></strong></a>
                                    </small>
                                    |
                                    <?php if($i++ == 4): ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <br /><br />
                            <ul class="fashion_catgnav wow fadeInDown">
                                <?php
                                    $largeNews = $thirdPopularNews->shift(1);
                                    $countComments = $modelNews->countCommentOfNews($largeNews->id)[0]->count_cmt;
                                    $url = route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id]);
                                ?>
                                <li>
                                    <div class="catgimg2_container">
                                        <a href="<?php echo e($url); ?>">
                                            <img alt="<?php echo e(str_slug($largeNews->title)); ?>" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($largeNews->picture); ?>">
                                        </a>
                                    </div>
                                    <h2 class="catg_titile"><a href="<?php echo e($url); ?>"><?php echo e($largeNews->title); ?></a></h2>
                                    <div class="comments_box">
                                        <span class="meta_date"><?php echo e($largeNews->created_at); ?></span>
                                        <span class="meta_comment"><a href="<?php echo e($url); ?>">
                                        <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận</a>
                                </span>
                                    </div>
                                    <p><?php echo str_limit($largeNews->preview, 90); ?> <span class="meta_more"><a  href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id])); ?>">Đọc tiếp...</a></span></p>
                                </li>
                            </ul>
                            <ul class="small_catg wow fadeInDown">
                                <?php $__currentLoopData = $thirdPopularNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arThirdNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $countComments = $modelNews->countCommentOfNews($arThirdNews->id)[0]->count_cmt;
                                    $url = route('vnexpress.page.detail', ['slug' => str_slug($arThirdNews->title), 'id' => $arThirdNews->id]);
                                    ?>
                                    <li>
                                        <div class="media"> <a class="media-left" href="<?php echo e($url); ?>">
                                                <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($arThirdNews->picture); ?>" alt="<?php echo e(str_slug($arThirdNews->title)); ?>">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="<?php echo e($url); ?>">
                                                        <?php echo e($arThirdNews->title); ?>

                                                    </a>
                                                </h4>
                                                <div class="comments_box">
                                                    <span class="meta_date"><?php echo e($arThirdNews->created_at); ?></span>
                                                    <span class="meta_comment">
                                                    <a href="<?php echo e($url); ?>">
                                                        <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận
                                                    </a>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $arNewsInRemainCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $newsInRemainCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $tmp = explode('-', $key);
                    $idParrentCat = array_first($tmp);
                    $nameParrentCat = end($tmp);
                ?>
                <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span>
                        <a class="title_text" href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($nameParrentCat), 'id' => $idParrentCat])); ?>"><?php echo e($nameParrentCat); ?></a>
                    </h2>
                    <?php if(isset($objSubCat[$idParrentCat])): ?>
                        <?php $i = 0 ?>
                        |
                        <?php $__currentLoopData = $objSubCat[$idParrentCat]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <small>
                                <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id])); ?>"><strong><?php echo e($subCat->name); ?></strong></a>
                            </small>
                            |
                            <?php if($i++ == 4): ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <br /><br />
                    <?php endif; ?>
                    <?php $__currentLoopData = $newsInRemainCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $itemNewsInRemainCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $url = route('vnexpress.page.detail', ['slug' => str_slug($itemNewsInRemainCat->title), 'id' => $itemNewsInRemainCat->id]);
                        $countComments = $modelNews->countCommentOfNews($itemNewsInRemainCat->id)[0]->count_cmt;
                        ?>
                        <div class="business_category_left wow fadeInDown">
                            <ul class="fashion_catgnav">
                                <li>
                                    <div class="catgimg2_container">
                                        <a href="<?php echo e($url); ?>">
                                            <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($itemNewsInRemainCat->picture); ?>" alt="<?php echo e(str_slug($itemNewsInRemainCat->title)); ?>">
                                        </a>
                                    </div>
                                    <h2 class="catg_titile">
                                        <a href="<?php echo e($url); ?>"><?php echo e($itemNewsInRemainCat->title); ?></a>
                                    </h2>
                                    <div class="comments_box">
                                        <span class="meta_date"><?php echo e($itemNewsInRemainCat->created_at); ?></span>
                                        <span class="meta_comment">
                                            <a href="#">
                                                <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận
                                            </a>
                                        </span>
                                    </div>
                                    <p><?php echo str_limit($itemNewsInRemainCat->preview, 90); ?> <span class="meta_more"><a  href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($itemNewsInRemainCat->title), 'id' => $itemNewsInRemainCat->id])); ?>">Đọc tiếp...</a></span></p>
                                </li>
                            </ul>
                        </div>
                        <?php unset($newsInRemainCat[$key]); ?>
                    <?php break; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="business_category_right wow fadeInDown">
                        <ul class="small_catg">
                            <?php $__currentLoopData = $newsInRemainCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemNewsInRemainCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $url = route('vnexpress.page.detail', ['slug' => str_slug($itemNewsInRemainCat->title), 'id' => $itemNewsInRemainCat->id]);
                                    $countComments = $modelNews->countCommentOfNews($itemNewsInRemainCat->id)[0]->count_cmt;
                                ?>
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a class="media-left" href="<?php echo e($url); ?>">
                                            <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($itemNewsInRemainCat->picture); ?>" alt="<?php echo e(str_slug($itemNewsInRemainCat->title)); ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="<?php echo e($url); ?>"><?php echo $itemNewsInRemainCat->title; ?> </a></h4>
                                            <div class="comments_box">
                                                <span class="meta_date"><?php echo e($itemNewsInRemainCat->created_at); ?></span>
                                                <span class="meta_comment">
                                                    <a href="<?php echo e($url); ?>">
                                                        <?php echo e($countComments = ($countComments==0)?"Chưa có":$countComments); ?> bình luận
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.vnexpress.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>