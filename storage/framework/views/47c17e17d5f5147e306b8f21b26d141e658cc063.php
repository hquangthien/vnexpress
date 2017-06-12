
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
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
                            <?php if(!Auth::check()): ?>
                                <li><a href="<?php echo e(route('login')); ?>">Đăng nhập</a></li>
                                <li><a href="<?php echo e(route('register')); ?>">Đăng ký</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('profile', ['id' => Auth::user()->id])); ?>"><span class="fa fa-user"></span> <?php echo e(Auth::user()->fullname); ?></a></li> >
                                <li><a href="<?php echo e(route('logout')); ?>">Đăng xuất</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <form action="<?php echo e(route('search')); ?>" method="POST" class="search_form">
                            <?php echo e(csrf_field()); ?>

                            <input type="text" <?php if(isset($keySearch)): ?> value="<?php echo e($keySearch); ?>"<?php endif; ?> name="key" placeholder="Nhập từ khóa tìm kiếm...">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="header_bottom_left"><a class="logo" href="<?php echo e(route('vnexpress.page.home')); ?>">VN<strong>Express</strong> <span>Thế giới trong tầm tay</span></a></div>
                    <?php if(sizeof($advTop) > 0): ?>
                        <div class="header_bottom_right"><a href="<?php echo e($advTop[0]->link); ?>"><img width="100%" src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($advTop[0]->image); ?>" alt=""></a></div>
                    <?php else: ?>
                        <div class="header_bottom_right"><a href="<?php echo e(route('vnexpress.page.contact')); ?>"><img src="<?php echo e($publicUrl); ?>images/default_topadv.jpg" alt=""></a></div>
                    <?php endif; ?>

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