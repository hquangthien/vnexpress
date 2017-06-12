
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ $publicUrl }}images/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ $publicUrl }}assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ $publicUrl }}assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ $publicUrl }}assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ $publicUrl }}assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ $publicUrl }}assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="{{ $publicUrl }}assets/css/style.css">
    @yield('css')
    <!--[if lt IE 9]>
    <script src="{{ $publicUrl }}assets/js/html5shiv.min.js"></script>
    <script src="{{ $publicUrl }}assets/js/respond.min.js"></script>
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
                            <li><a href="{{ route('vnexpress.page.home') }}">Trang chủ</a></li>
                            <li><a href="{{ route('vnexpress.page.about') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('vnexpress.page.contact') }}">Liên hệ</a></li>
                            @if(!Auth::check())
                                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                <li><a href="{{ route('register') }}">Đăng ký</a></li>
                            @else
                                <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}"><span class="fa fa-user"></span> {{ Auth::user()->fullname }}</a></li> >
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <form action="{{ route('search') }}" method="POST" class="search_form">
                            {{ csrf_field() }}
                            <input type="text" @if(isset($keySearch)) value="{{ $keySearch }}"@endif name="key" placeholder="Nhập từ khóa tìm kiếm...">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="header_bottom_left"><a class="logo" href="{{ route('vnexpress.page.home') }}">VN<strong>Express</strong> <span>Thế giới trong tầm tay</span></a></div>
                    @if(sizeof($advTop) > 0)
                        <div class="header_bottom_right"><a href="{{ $advTop[0]->link }}"><img width="100%" src="{{ Storage::url('app/files/') }}{{ $advTop[0]->image }}" alt=""></a></div>
                    @else
                        <div class="header_bottom_right"><a href="{{ route('vnexpress.page.contact') }}"><img src="{{ $publicUrl }}images/default_topadv.jpg" alt=""></a></div>
                    @endif

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
                        @foreach($objSuperCat as $superCat)
                            @if(isset($objSubCat[$superCat->id]))
                                <li class="dropdown">
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach($objSubCat[$superCat->id] as $subCat)
                                            <li>
                                                <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id]) }}">
                                                    {{ $subCat->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($superCat->name), 'id' => $superCat->id]) }}">
                                        {{ $superCat->name }}
                                    </a>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($superCat->name), 'id' => $superCat->id]) }}">
                                        {{ $superCat->name }}
                                    </a>
                                </li>
                            @endif

                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>