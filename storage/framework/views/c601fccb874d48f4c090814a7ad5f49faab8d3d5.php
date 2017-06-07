<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo e($adminUrl); ?>assets/images/favicon.ico">

    <!-- App title -->
    <title>Adminto - Responsive Admin Dashboard Template</title>

    <!-- App CSS -->
    <link href="<?php echo e($adminUrl); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e($adminUrl); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e($adminUrl); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e($adminUrl); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e($adminUrl); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e($adminUrl); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e($adminUrl); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <?php echo $__env->yieldContent('css'); ?>
    <![endif]-->

    <script src="<?php echo e($adminUrl); ?>assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span>VN EXPRESS<span>admin</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">Basic Tables</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->