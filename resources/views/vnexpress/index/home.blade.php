@extends('templates.vnexpress.master')
@section('title')
    Trang chủ VnExpress || Tin tức cập nhật 24/24 || Tin bóng đá
@endsection
@section('slider')
    <?php
        $modelNews = new \App\Model\News();
    ?>
    <div class="content_top">
        <div class="row">
            <div class="row" style="padding-left: 50px">
                <h2 style="font-size: 15px; color: #7a8992">
                    <strong>{{ mb_strtoupper('Hôm nay xem gì?') }}</strong>
                </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm6">
                <div class="latest_slider">
                    <div class="slick_slider">
                        @for($i = 0; $i < sizeof($objPinNews) - 4; $i++)
                            <div class="single_iteam">
                                <img height="425px" src="{{ Storage::url('app/files/') }}{{ $objPinNews[$i]->picture }}"
                                     alt="{{ str_slug($objPinNews[$i]->title) }}">
                                <h2>
                                    <a class="slider_tittle"
                                       href="{{ route('vnexpress.page.detail', ['slug' => str_slug($objPinNews[$i]->title), 'id' => $objPinNews[$i]->id]) }}">
                                        {{ $objPinNews[$i]->title }}
                                    </a>
                                </h2>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm6">
                <div class="content_top_right">
                    <ul class="featured_nav wow fadeInDown">
                        @for($i = sizeof($objPinNews)-1; $i > sizeof($objPinNews) -5; $i--)
                            <li>
                                <img src="{{ Storage::url('app/files/') }}{{ $objPinNews[$i]->picture }}"
                                     alt="{{ str_slug($objPinNews[$i]->title) }}">
                                <div class="title_caption">
                                    <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($objPinNews[$i]->title), 'id' => $objPinNews[$i]->id]) }}">
                                        {{ $objPinNews[$i]->title }}
                                    </a>
                                </div>
                            </li>
                        @endfor
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
                        <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($nameFirstCat), 'id' => $idFirstCat]) }}" class="title_text">{{ $nameFirstCat }}</a>
                    </h2>
                    @if(isset($objSubCat[$idFirstCat]))
                            <?php $i = 0 ?>
                            |
                        @foreach($objSubCat[$idFirstCat] as $subCat)
                            <small>
                                <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id]) }}"><strong>{{ $subCat->name }}</strong></a>
                            </small>
                            |
                        @endforeach
                    @endif
                    <br /><br />
                    <ul class="catg1_nav">
                        @foreach($firstPopularNews as $arFirstNews)
                            <?php
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($arFirstNews->title), 'id' => $arFirstNews->id]);
                            ?>
                            <li>
                                <div class="catgimg_container">
                                    <a href="{{$url }}" class="catg1_img">
                                        <img alt="{{str_slug($arFirstNews->title)}}" src="{{ Storage::url('app/files/') }}{{ $arFirstNews->picture }}">
                                    </a>
                                </div>
                                <h3 class="post_titile">
                                    <a href="{{ $url }}">
                                        {{ str_limit($arFirstNews->title, 100) }}
                                    </a>
                                </h3>
                            </li>
                            @if($i++ == 4)
                                @break
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row" style="padding-left: 15px">
                <h2 style="font-size: 15px">
                    <a href="pages/single.html"><strong>{{ mb_strtoupper('có thể bạn thích' ) }}</strong></a>
                </h2>
            </div>
            <div class="content_middle_middle">
                <div class="slick_slider2">
                    @if(sizeof($objFavouriteNewsOfUser) > 0)
                        <?php
                            $sliderNews2 = $objFavouriteNewsOfUser;
                        ?>
                    @else
                        <?php
                        $sliderNews2 = $objPopularNews;
                        ?>
                    @endif
                    @foreach($sliderNews2 as $sliderNewsItem)
                        <div class="single_featured_slide">
                            <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($sliderNewsItem->title), 'id' => $sliderNewsItem->id]) }}">
                                <img height="401px" src="{{ Storage::url('app/files/') }}{{ $sliderNewsItem->picture }}" alt="{{ str_slug($sliderNewsItem->title) }}">
                            </a>
                            <h2>
                                <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($sliderNewsItem->title), 'id' => $sliderNewsItem->id]) }}">{{ $sliderNewsItem->title }}</a>
                            </h2>
                            <p>{{ str_limit($sliderNewsItem->preview, 100) }}...</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
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
                            <a class="title_text" href="{{ route('vnexpress.page.category', ['slug' => str_slug($nameSecondCat), 'id' => $idSecondCat]) }}">{{ $nameSecondCat }}</a>
                        </h2>
                        @if(isset($objSubCat[$idSecondCat]))
                            <?php $i = 0 ?>
                                |
                            @foreach($objSubCat[$idSecondCat] as $subCat)
                                <small>
                                    <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id]) }}"><strong>{{ $subCat->name }}</strong></a>
                                </small>
                                |
                                @if($i++ == 4)
                                    @break
                                @endif
                            @endforeach
                        @endif
                        <br /><br />
                        <ul class="fashion_catgnav wow fadeInDown">
                            <?php
                                $largeNews = $secondPopularNews->shift(1);
                                $countComments = $modelNews->countCommentOfNews($largeNews->id)[0]->count_cmt;
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id]);
                            ?>
                            <li>
                                <div class="catgimg2_container">
                                    <a href="{{$url}}">
                                        <img alt="{{ str_slug($largeNews->title) }}" src="{{ Storage::url('app/files/') }}{{ $largeNews->picture }}">
                                    </a>
                                </div>
                                <h2 class="catg_titile"><a href="{{$url}}">{{ $largeNews->title }}</a></h2>
                                <div class="comments_box">
                                    <span class="meta_date">{{  $largeNews->created_at }}</span>
                                    <span class="meta_comment"><a href="{{$url}}">
                                            {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận</a>
                                    </span>
                                </div>
                                <p>{!! str_limit($largeNews->preview, 90) !!} <span class="meta_more"><a  href="{{ route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id]) }}">Đọc tiếp...</a></span></p>
                            </li>
                        </ul>
                        <ul class="small_catg wow fadeInDown">
                            @foreach($secondPopularNews as $arSecondNews)
                                <?php
                                $countComments = $modelNews->countCommentOfNews($arSecondNews->id)[0]->count_cmt;
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($arSecondNews->title), 'id' => $arSecondNews->id]);
                                ?>
                                <li>
                                    <div class="media"> <a class="media-left" href="{{$url}}">
                                            <img src="{{ Storage::url('app/files/') }}{{ $arSecondNews->picture }}" alt="{{ str_slug($arSecondNews->title) }}">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="{{$url}}">
                                                    {{ $arSecondNews->title }}
                                                </a>
                                            </h4>
                                            <div class="comments_box">
                                                <span class="meta_date">{{ $arSecondNews->created_at }}</span>
                                                <span class="meta_comment">
                                                    <a href="{{$url}}">
                                                        {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
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
                                <a class="title_text" href="{{ route('vnexpress.page.category', ['slug' => str_slug($nameThirdCat), 'id' => $idThirdCat]) }}">{{ $nameThirdCat }}</a>
                            </h2>
                            @if(isset($objSubCat[$idThirdCat]))
                                <?php $i = 0 ?>
                                |
                                @foreach($objSubCat[$idThirdCat] as $subCat)
                                    <small>
                                        <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id]) }}"><strong>{{ $subCat->name }}</strong></a>
                                    </small>
                                    |
                                    @if($i++ == 4)
                                        @break
                                    @endif
                                @endforeach
                            @endif
                            <br /><br />
                            <ul class="fashion_catgnav wow fadeInDown">
                                <?php
                                    $largeNews = $thirdPopularNews->shift(1);
                                    $countComments = $modelNews->countCommentOfNews($largeNews->id)[0]->count_cmt;
                                    $url = route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id]);
                                ?>
                                <li>
                                    <div class="catgimg2_container">
                                        <a href="{{$url}}">
                                            <img alt="{{ str_slug($largeNews->title) }}" src="{{ Storage::url('app/files/') }}{{ $largeNews->picture }}">
                                        </a>
                                    </div>
                                    <h2 class="catg_titile"><a href="{{$url}}">{{ $largeNews->title }}</a></h2>
                                    <div class="comments_box">
                                        <span class="meta_date">{{  $largeNews->created_at }}</span>
                                        <span class="meta_comment"><a href="{{$url}}">
                                        {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận</a>
                                </span>
                                    </div>
                                    <p>{!! str_limit($largeNews->preview, 90) !!} <span class="meta_more"><a  href="{{ route('vnexpress.page.detail', ['slug' => str_slug($largeNews->title), 'id' => $largeNews->id]) }}">Đọc tiếp...</a></span></p>
                                </li>
                            </ul>
                            <ul class="small_catg wow fadeInDown">
                                @foreach($thirdPopularNews as $arThirdNews)
                                    <?php
                                    $countComments = $modelNews->countCommentOfNews($arThirdNews->id)[0]->count_cmt;
                                    $url = route('vnexpress.page.detail', ['slug' => str_slug($arThirdNews->title), 'id' => $arThirdNews->id]);
                                    ?>
                                    <li>
                                        <div class="media"> <a class="media-left" href="{{$url}}">
                                                <img src="{{ Storage::url('app/files/') }}{{ $arThirdNews->picture }}" alt="{{ str_slug($arThirdNews->title) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="{{$url}}">
                                                        {{ $arThirdNews->title }}
                                                    </a>
                                                </h4>
                                                <div class="comments_box">
                                                    <span class="meta_date">{{ $arThirdNews->created_at }}</span>
                                                    <span class="meta_comment">
                                                    <a href="{{$url}}">
                                                        {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận
                                                    </a>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($arNewsInRemainCat as $key => $newsInRemainCat)
                <?php
                    $tmp = explode('-', $key);
                    $idParrentCat = array_first($tmp);
                    $nameParrentCat = end($tmp);
                ?>
                <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span>
                        <a class="title_text" href="{{ route('vnexpress.page.category', ['slug' => str_slug($nameParrentCat), 'id' => $idParrentCat]) }}">{{ $nameParrentCat }}</a>
                    </h2>
                    @if(isset($objSubCat[$idParrentCat]))
                        <?php $i = 0 ?>
                        |
                        @foreach($objSubCat[$idParrentCat] as $subCat)
                            <small>
                                <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($subCat->name), 'id' => $subCat->id]) }}"><strong>{{ $subCat->name }}</strong></a>
                            </small>
                            |
                            @if($i++ == 4)
                                @break
                            @endif
                        @endforeach
                        <br /><br />
                    @endif
                    @foreach($newsInRemainCat as $key => $itemNewsInRemainCat)
                        <?php
                        $url = route('vnexpress.page.detail', ['slug' => str_slug($itemNewsInRemainCat->title), 'id' => $itemNewsInRemainCat->id]);
                        $countComments = $modelNews->countCommentOfNews($itemNewsInRemainCat->id)[0]->count_cmt;
                        ?>
                        <div class="business_category_left wow fadeInDown">
                            <ul class="fashion_catgnav">
                                <li>
                                    <div class="catgimg2_container">
                                        <a href="{{ $url }}">
                                            <img src="{{ Storage::url('app/files/') }}{{ $itemNewsInRemainCat->picture }}" alt="{{str_slug($itemNewsInRemainCat->title)}}">
                                        </a>
                                    </div>
                                    <h2 class="catg_titile">
                                        <a href="{{ $url }}">{{ $itemNewsInRemainCat->title }}</a>
                                    </h2>
                                    <div class="comments_box">
                                        <span class="meta_date">{{ $itemNewsInRemainCat->created_at }}</span>
                                        <span class="meta_comment">
                                            <a href="#">
                                                {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận
                                            </a>
                                        </span>
                                    </div>
                                    <p>{!! str_limit($itemNewsInRemainCat->preview, 90) !!} <span class="meta_more"><a  href="{{ route('vnexpress.page.detail', ['slug' => str_slug($itemNewsInRemainCat->title), 'id' => $itemNewsInRemainCat->id]) }}">Đọc tiếp...</a></span></p>
                                </li>
                            </ul>
                        </div>
                        @unset($newsInRemainCat[$key])
                    @break
                    @endforeach
                    <div class="business_category_right wow fadeInDown">
                        <ul class="small_catg">
                            @foreach($newsInRemainCat as $itemNewsInRemainCat)
                                <?php
                                    $url = route('vnexpress.page.detail', ['slug' => str_slug($itemNewsInRemainCat->title), 'id' => $itemNewsInRemainCat->id]);
                                    $countComments = $modelNews->countCommentOfNews($itemNewsInRemainCat->id)[0]->count_cmt;
                                ?>
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a class="media-left" href="{{ $url }}">
                                            <img src="{{ Storage::url('app/files/') }}{{ $itemNewsInRemainCat->picture }}" alt="{{str_slug($itemNewsInRemainCat->title)}}">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{ $url }}">{!! $itemNewsInRemainCat->title !!} </a></h4>
                                            <div class="comments_box">
                                                <span class="meta_date">{{ $itemNewsInRemainCat->created_at }}</span>
                                                <span class="meta_comment">
                                                    <a href="{{ $url }}">
                                                        {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection