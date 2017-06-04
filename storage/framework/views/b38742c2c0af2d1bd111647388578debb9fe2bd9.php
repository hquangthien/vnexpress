<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="<?php echo e($adminUrl); ?>assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">Mat Helme</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="<?php echo e(route('statistic.index')); ?>" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Thống kê </span> </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.index')); ?>" class="waves-effect"><i class="fa fa-user-circle"></i> <span> Người dùng </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('cat.index')); ?>" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Danh mục tin </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('news.index')); ?>" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> Tin tức </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('adv.index')); ?>" class="waves-effect"><i class="zmdi zmdi-layers"></i><span>Quảng cáo </span></a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->