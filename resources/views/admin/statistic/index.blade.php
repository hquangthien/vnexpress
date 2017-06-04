@extends('templates.admin.master')
@section('content')
    <div class="content">
        <div class="container">


            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-fgcolor="#f05050 " data-bgcolor="#F9B9B9" value="58" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(240, 80, 80); padding: 0px; -webkit-appearance: none;"></div>
                            </div>

                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"> 256 </h2>
                                <p class="text-muted">Revenue today</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Sales Analytics</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2">
                                <span class="badge badge-success pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                <h2 class="m-b-0"> 8451 </h2>
                                <p class="text-muted m-b-25">Revenue today</p>
                            </div>
                            <div class="progress progress-bar-success-alt progress-sm m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Statistics</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-fgcolor="#ffbd4a" data-bgcolor="#FFE6BA" value="80" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(255, 189, 74); padding: 0px; -webkit-appearance: none;"></div>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"> 4569 </h2>
                                <p class="text-muted">Revenue today</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Daily Sales</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2">
                                <span class="badge badge-pink pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                <h2 class="m-b-0"> 158 </h2>
                                <p class="text-muted m-b-25">Revenue today</p>
                            </div>
                            <div class="progress progress-bar-pink-alt progress-sm m-b-0">
                                <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0">Daily Sales</h4>

                        <div class="widget-chart text-center">
                            <div id="morris-donut-example" style="height: 245px;"><svg height="245" version="1.1" width="484" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.15625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#ff8acc" d="M242,197.5A75,75,0,0,0,313.03058844420985,146.57603591269296" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ff8acc" stroke="#ffffff" d="M242,200.5A78,78,0,0,0,315.8718119819782,147.53907734920068L343.81051010336745,157.00898480819325A107.5,107.5,0,0,1,242,230Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#5b69bc" d="M313.03058844420985,146.57603591269296A75,75,0,0,0,174.7429080941063,89.31139369659871" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#5b69bc" stroke="#ffffff" d="M315.8718119819782,147.53907734920068A78,78,0,0,0,172.05262441787056,87.98384944446265L145.59816826821904,74.92966429845814A107.5,107.5,0,0,1,343.81051010336745,157.00898480819325Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#35b8e0" d="M174.7429080941063,89.31139369659871A75,75,0,0,0,241.9764380554856,197.4999962988984" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#35b8e0" stroke="#ffffff" d="M172.05262441787056,87.98384944446265A78,78,0,0,0,241.97549557770503,200.49999615085432L241.9646570832284,234.9999944483476A112.5,112.5,0,0,1,141.11436214115946,72.71709054489806Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="242" y="112.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1,0,0,1,0,0)" stroke-width="0.8592592592592593"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mail-Order Sales</tspan></text><text x="242" y="132.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.5625,0,0,1.5625,-136.125,-70.0313)" stroke-width="0.64"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text></svg></div>
                            <ul class="list-inline chart-detail-list m-b-0">
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="header-title m-t-0">Statistics</h4>
                        <div id="morris-bar-example" style="height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="484" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.328125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="241" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#eeeeee" d="M46,241H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="187" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#eeeeee" d="M46,187H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="133" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#eeeeee" d="M46,133H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="79" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#eeeeee" d="M46,79H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#eeeeee" d="M46,25H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="424.5833333333333" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="286.91666666666663" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="149.25" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><rect x="73.53333333333333" y="79" width="13.766666666666666" height="162" rx="0" ry="0" fill="#188ae2" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="142.36666666666667" y="150.28" width="13.766666666666666" height="90.72" rx="0" ry="0" fill="#188ae2" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="211.2" y="79" width="13.766666666666666" height="162" rx="0" ry="0" fill="#188ae2" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="280.0333333333333" y="158.92" width="13.766666666666666" height="82.08000000000001" rx="0" ry="0" fill="#188ae2" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="348.8666666666667" y="199.95999999999998" width="13.766666666666666" height="41.04000000000002" rx="0" ry="0" fill="#188ae2" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="417.69999999999993" y="40.119999999999976" width="13.766666666666666" height="200.88000000000002" rx="0" ry="0" fill="#188ae2" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="header-title m-t-0">Total Revenue</h4>
                        <div id="morris-line-example" style="height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="484" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="241" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#eef0f2" d="M46,241H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="187" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#eef0f2" d="M46,187H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="133" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#eef0f2" d="M46,133H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="79" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#eef0f2" d="M46,79H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#eef0f2" d="M46,25H459" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="459.00000000000006" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="400.0461478294877" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="341.0922956589754" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="281.9769260852562" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="223.02307391474386" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="164.06922174423153" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="105.1153695737192" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="46" y="253.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><path fill="none" stroke="#188ae2" d="M46,241C60.7788423934298,214,90.33652718028941,154.62954856361148,105.1153695737192,133C119.85383261634729,111.42954856361149,149.33075870160346,68.19999999999999,164.06922174423153,68.19999999999999C178.80768478685962,68.19999999999999,208.28461087211576,114.1,223.02307391474386,133C237.76153695737196,151.9,267.2384630426281,216.70369357045143,281.9769260852562,219.4C296.755768478686,222.10369357045144,326.3134532655456,165.41477428180573,341.0922956589754,154.6C355.8307587016035,143.81477428180574,385.3076847868596,141.1,400.0461478294877,133C414.7846108721158,124.9,444.26153695737196,100.6,459.00000000000006,89.79999999999998" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#10c469" d="M46,133C60.7788423934298,119.5,90.33652718028941,73.59261285909713,105.1153695737192,79C119.85383261634729,84.39261285909713,149.33075870160346,169.45,164.06922174423153,176.2C178.80768478685962,182.95,208.28461087211576,145.15,223.02307391474386,133C237.76153695737196,120.85,267.2384630426281,79,281.9769260852562,79C296.755768478686,79,326.3134532655456,133,341.0922956589754,133C355.8307587016035,133,385.3076847868596,92.5,400.0461478294877,79C414.7846108721158,65.5,444.26153695737196,38.5,459.00000000000006,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="241" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="105.1153695737192" cy="133" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="164.06922174423153" cy="68.19999999999999" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="223.02307391474386" cy="133" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="281.9769260852562" cy="219.4" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="341.0922956589754" cy="154.6" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="400.0461478294877" cy="133" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="459.00000000000006" cy="89.79999999999998" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="46" cy="133" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="105.1153695737192" cy="79" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="164.06922174423153" cy="176.2" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="223.02307391474386" cy="133" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="281.9769260852562" cy="79" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="341.0922956589754" cy="133" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="400.0461478294877" cy="79" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="459.00000000000006" cy="25" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ $adminUrl }}assets/images/users/avatar-3.jpg" class="img-responsive img-circle" alt="user">
                            <div class="wid-u-info">
                                <h4 class="m-t-0 m-b-5 font-600">Chadengle</h4>
                                <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                <small class="text-warning"><b>Admin</b></small>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ $adminUrl }}assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
                            <div class="wid-u-info">
                                <h4 class="m-t-0 m-b-5 font-600"> Michael Zenaty</h4>
                                <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                <small class="text-custom"><b>Support Lead</b></small>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ $adminUrl }}assets/images/users/avatar-1.jpg" class="img-responsive img-circle" alt="user">
                            <div class="wid-u-info">
                                <h4 class="m-t-0 m-b-5 font-600">Stillnotdavid</h4>
                                <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                <small class="text-success"><b>Designer</b></small>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ $adminUrl }}assets/images/users/avatar-10.jpg" class="img-responsive img-circle" alt="user">
                            <div class="wid-u-info">
                                <h4 class="m-t-0 m-b-5 font-600">Tomaslau</h4>
                                <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                <small class="text-info"><b>Developer</b></small>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Inbox</h4>

                        <div class="inbox-widget nicescroll" style="height: 315px; overflow: hidden; outline: none;" tabindex="5000">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{ $adminUrl }}assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Chadengle</p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{ $adminUrl }}assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{ $adminUrl }}assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">13:17 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{ $adminUrl }}assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{ $adminUrl }}assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-8">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Latest Projects</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Adminto Admin v1</td>
                                    <td>01/01/2016</td>
                                    <td>26/04/2016</td>
                                    <td><span class="label label-danger">Released</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Adminto Frontend v1</td>
                                    <td>01/01/2016</td>
                                    <td>26/04/2016</td>
                                    <td><span class="label label-success">Released</span></td>
                                    <td>Adminto admin</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Adminto Admin v1.1</td>
                                    <td>01/05/2016</td>
                                    <td>10/05/2016</td>
                                    <td><span class="label label-pink">Pending</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Adminto Frontend v1.1</td>
                                    <td>01/01/2016</td>
                                    <td>31/05/2016</td>
                                    <td><span class="label label-purple">Work in Progress</span>
                                    </td>
                                    <td>Adminto admin</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Adminto Admin v1.3</td>
                                    <td>01/01/2016</td>
                                    <td>31/05/2016</td>
                                    <td><span class="label label-warning">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Adminto Admin v1.3</td>
                                    <td>01/01/2016</td>
                                    <td>31/05/2016</td>
                                    <td><span class="label label-primary">Coming soon</span></td>
                                    <td>Adminto admin</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Adminto Admin v1.3</td>
                                    <td>01/01/2016</td>
                                    <td>31/05/2016</td>
                                    <td><span class="label label-primary">Coming soon</span></td>
                                    <td>Adminto admin</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
@endsection