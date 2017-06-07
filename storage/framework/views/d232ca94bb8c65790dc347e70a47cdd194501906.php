<?php $__env->startSection('slider'); ?>
    <div class="content_top">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm6">
                <div class="latest_slider">
                    <div class="slick_slider">
                        <?php for($i = 0; $i < sizeof($objPinNews) - 4; $i++): ?>
                            <div class="single_iteam">
                                <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($objPinNews[$i]->picture); ?>"
                                     alt="<?php echo e(str_slug($objPinNews[$i]->title)); ?>">
                                <h2>
                                    <a class="slider_tittle"
                                       href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug(str_slug($objPinNews[$i]->title)), 'id' => str_slug($objPinNews[$i]->id)])); ?>">
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
                                    <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug(str_slug($objPinNews[$i]->title)), 'id' => str_slug($objPinNews[$i]->id)])); ?>">
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
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="content_middle_leftbar">
                <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category1</a> </h2>
                    <ul class="catg1_nav">
                        <li>
                            <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo e($publicUrl); ?>images/292x150x1.jpg"></a></div>
                            <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo e($publicUrl); ?>images/292x150x2.jpg"></a></div>
                            <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo e($publicUrl); ?>images/292x150x2.jpg"></a></div>
                            <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="content_middle_rightbar">
                <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category2</a> </h2>
                    <ul class="catg1_nav">
                        <li>
                            <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo e($publicUrl); ?>images/292x150x1.jpg"></a></div>
                            <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="<?php echo e($publicUrl); ?>images/292x150x2.jpg"></a></div>
                            <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row" style="padding-left: 15px; font-size: 12px">
                <h2><a href="pages/single.html"><?php echo e(mb_strtoupper('Thế giới' )); ?></a></h2>
            </div>
            <div class="content_middle_middle">
                <div class="slick_slider2">
                    <div class="single_featured_slide"> <a href="pages/single.html"><img src="<?php echo e($publicUrl); ?>images/567x330x1.jpg" alt=""></a>
                        <h2><a href="pages/single.html">Praesent vitae quam vitae arcu posuer 1</a></h2>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
                    </div>
                    <div class="single_featured_slide"> <a href="pages/single.html"><img src="<?php echo e($publicUrl); ?>images/567x330x2.jpg" alt=""></a>
                        <h2><a href="#">Praesent vitae quam vitae arcu posuer 2</a></h2>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
                    </div>
                    <div class="single_featured_slide"> <a href="pages/single.html"><img src="<?php echo e($publicUrl); ?>images/567x330x3.jpg" alt=""></a>
                        <h2><a href="#">Praesent vitae quam vitae arcu posuer 3</a></h2>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
                    </div>
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
                    <div class="single_category">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Games</a> </h2>
                        <ul class="fashion_catgnav wow fadeInDown">
                            <li>
                                <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="<?php echo e($publicUrl); ?>images/390x240x1.jpg"></a> </div>
                                <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                                <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                            </li>
                        </ul>
                        <ul class="small_catg wow fadeInDown">
                            <li>
                                <div class="media"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="fashion_category">
                    <div class="single_category">
                        <div class="single_category wow fadeInDown">
                            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Fashion</a> </h2>
                            <ul class="fashion_catgnav wow fadeInDown">
                                <li>
                                    <div class="catgimg2_container"> <a href="#"><img alt="" src="<?php echo e($publicUrl); ?>images/390x240x1.jpg"></a> </div>
                                    <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                                </li>
                            </ul>
                            <ul class="small_catg wow fadeInDown">
                                <li>
                                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_category wow fadeInDown">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                <div class="business_category_left wow fadeInDown">
                    <ul class="fashion_catgnav">
                        <li>
                            <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="<?php echo e($publicUrl); ?>images/390x240x1.jpg"></a> </div>
                            <h2 class="catg_titile"><a href="pages/single.html">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                        </li>
                    </ul>
                </div>
                <div class="business_category_right wow fadeInDown">
                    <ul class="small_catg">
                        <li>
                            <div class="media wow fadeInDown"> <a class="media-left" href="pages/single.html"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="pages/single.html">Duis condimentum nunc pretium lobortis </a></h4>
                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="technology_catrarea">
                <div class="single_category">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Technology</a> </h2>
                    <div class="business_category_left">
                        <ul class="fashion_catgnav wow fadeInDown">
                            <li>
                                <div class="catgimg2_container"> <a href="#"><img alt="" src="<?php echo e($publicUrl); ?>images/390x240x1.jpg"></a> </div>
                                <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                                <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="business_category_right">
                        <ul class="small_catg wow fadeInDown">
                            <li>
                                <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo e($publicUrl); ?>images/112x112.jpg" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.vnexpress.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>