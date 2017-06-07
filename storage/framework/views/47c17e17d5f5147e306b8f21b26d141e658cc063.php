
<!DOCTYPE html>
<html>
<head>
    <title>VN Express</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo e($publicUrl); ?>images/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo e($publicUrl); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e($publicUrl); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e($publicUrl); ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e($publicUrl); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e($publicUrl); ?>assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e($publicUrl); ?>assets/css/style.css">
    <?php echo $__env->yieldContent('css'); ?>
    <!--[if lt IE 9]>
    <script src="<?php echo e($publicUrl); ?>assets/js/html5shiv.min.js"></script>
    <script src="<?php echo e($publicUrl); ?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav">
                            <li><a href="<?php echo e(route('vnexpress.page.home')); ?>">Trang chủ</a></li>
                            <li><a href="<?php echo e(route('vnexpress.page.about')); ?>">Giới thiệu</a></li>
                            <li><a href="<?php echo e(route('vnexpress.page.contact')); ?>">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <form action="#" class="search_form">
                            <input type="text" placeholder="Nhập từ khóa tìm kiếm...">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="header_bottom_left"><a class="logo" href="<?php echo e(route('vnexpress.page.home')); ?>">VN<strong>Express</strong> <span>Thế giới trong tầm tay</span></a></div>
                    <div class="header_bottom_right"><a href="#"><img src="<?php echo e($publicUrl); ?>images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </header>
    <div id="navarea">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom_nav">
                        <?php $__currentLoopData = $objSuperCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $superCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($objSubCat[$superCat->id])): ?>
                                <li class="dropdown">
                                    <ul class="dropdown-menu" role="menu">
                                        <?php $__currentLoopData = $objSubCat[$superCat->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id])); ?>">
                                                    <?php echo e($subCat->name); ?>

                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($superCat->name), 'id' => $superCat->id])); ?>">
                                        <?php echo e($superCat->name); ?>

                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="dropdown">
                                    <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($superCat->name), 'id' => $superCat->id])); ?>">
                                        <?php echo e($superCat->name); ?>

                                    </a>
                                </li>
                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>