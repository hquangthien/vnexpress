@extends('templates.admin.master')
@section('title')
    Trang thống kê
@endsection
@section('h1')
    Trang thống kê
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Tổng số tin tức</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <span class="badge badge-primary pull-left m-t-20"><i
                                            class="fa  fa-newspaper-o fa-2x"></i> </span>
                            </div>

                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"><span id="sum-news">{{ $objSumNews[0]->sum_news }}</span></h2>
                                <p class="text-muted">Tổng số tin tức</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Tổng lượt truy cập</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2">
                                <span class="badge badge-success pull-left m-t-20"><i
                                            class="fa  fa-eye fa-2x"></i> </span>
                                <h2 class="m-b-0"><span id="sum-views">{{ $objSumViews[0]->sum_views }}</span></h2>
                                <p class="text-muted m-b-25">Tổng lượt truy cập</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Tổng tin nhắn góp ý</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <span class="badge badge-danger pull-left m-t-20"><i class="fa  fa-envelope fa-2x"></i> </span>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"><span id="sum-messages">{{ $objSumMessages[0]->sum_messages }}</span></h2>
                                <p class="text-muted">Tổng tin nhắn góp ý</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Tổng số bình luận</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2">
                                <span class="badge badge-warining pull-left m-t-20"><i class="fa  fa-comment fa-2x"></i> </span>
                                <h2 class="m-b-0"><span id="sum-comments">{{ $objSumComments[0]->sum_comments }}</span></h2>
                                <p class="text-muted m-b-25">Tổng số bình luận</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Số lượt xem theo danh mục tin</h4>
                        <div class="table-responsive">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <th>Lượt xem</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($objCountNumber as $item)
                                    <tr>
                                        <td>{{ $item->parrent_cat }}</td>
                                        <td>{{ $item->sum_count_number }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col-->
                <div class="col-lg-6">
                    <div class="row list-users">
                        @foreach($objUsers as $user)
                            <div class="col-lg-6 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{ $adminUrl }}assets/images/users/default-avatar.png"
                                             class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">{{ $user->fullname }}</h4>
                                            <p class="text-muted m-b-5 font-13">{{ $user->email }}</p>
                                            <small class="text-warning"><b>{{ $user->username }}</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- end col-->
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Số bài đăng của mỗi user</h4>
                        <div class="table-responsive">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên user</th>
                                    <th>Số bài đăng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($objSumNewsPerUser as $item)
                                    <tr>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->sum_news_per_user }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col-->
            </div>
            <div class="row">

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
@section('js')
    <script src="{{ $adminUrl }}assets/plugins/raphael/raphael-min.js"></script>
@endsection