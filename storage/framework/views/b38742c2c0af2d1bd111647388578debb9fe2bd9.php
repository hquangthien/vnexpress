<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="<?php echo e($adminUrl); ?>assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status online"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="javascript:void(0)"><?php echo e(Auth::user()->fullname); ?></a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="<?php echo e(route('logout')); ?>" class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Bảng điều khiển</li>

                <li>
                    <a href="<?php echo e(route('index.index')); ?>" class="waves-effect <?php if(Request::segment(2)== ''): ?> active <?php endif; ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Thống kê </span> </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'user'): ?> active <?php endif; ?>"><i class="fa fa-user-circle"></i> <span> Ban quản trị </span> </a>
                </li>

                <li>
                    <a href="<?php echo e(route('guest.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'guest'): ?> active <?php endif; ?>"><i class="fa fa-user-o"></i> <span> Thành viên </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('cat.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'cat'): ?> active <?php endif; ?>"><i class="zmdi zmdi-view-list"></i> <span> Danh mục tin </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('news.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'news'): ?> active <?php endif; ?>"><i class="zmdi zmdi-collection-item"></i><span> Tin tức </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('adv.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'adv'): ?> active <?php endif; ?>"><i class="zmdi zmdi-layers"></i><span>Quảng cáo </span></a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('comment.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'comment'): ?> active <?php endif; ?>"><i class="fa fa-comment"></i><span>Bình luận </span></a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo e(route('contact.index')); ?>" class="waves-effect <?php if(Request::segment(2)== 'contact'): ?> active <?php endif; ?>"><i class="fa fa-envelope"></i><span>Liên hệ </span></a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->