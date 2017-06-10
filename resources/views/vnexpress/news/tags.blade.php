@extends('templates.vnexpress.master')

@section('title')
    Từ khóa {{ $objTags->content }}
@endsection

@section('content')
    <?php
    $modelNews = new \App\Model\News();
    ?>
    <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
            <div class="single_category wow fadeInDown">
                <div class="archive_style_1">
                    <div style="margin-top:15px;">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('vnexpress.page.home') }}">Trang chủ</a></li>
                            <li><a href="javascript:void(0)">Tags</a></li>
                        </ol>
                    </div>
                    @if(sizeof($objNews) == 0)
                        <p class="alert alert-danger"> Không có kết quả nào cho từ khóa mà bạn tìm kiếm </p>
                    @else
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">
                                Có {{ sizeof($objNews) }} tin tức có thẻ "{{ $objTags->content }}"
                            </span></h2>
                        @foreach($objNews as $newsItem)
                            <?php
                                $url = route('vnexpress.page.detail', ['slug' => str_slug($newsItem->title), 'id' => $newsItem->id]);
                                $countComments = $modelNews->countCommentOfNews($newsItem->id)[0]->count_cmt;
                            ?>
                            <div class="business_category_left wow fadeInDown height-category">
                                <ul class="fashion_catgnav">
                                    <li>
                                        <div class="catgimg2_container">
                                            <a href="{{ $url }}">
                                                <img alt="{{ str_slug($newsItem->title) }}" src="{{ Storage::url('app/files/') }}{{ $newsItem->picture }}">
                                            </a>
                                        </div>
                                        <h2 class="catg_titile">
                                            <a href="{{ $url }}">{{ $newsItem->title }}</a>
                                        </h2>
                                        <div class="comments_box">
                                            <span class="meta_date">{{ $newsItem->created_at }}</span>
                                            <span class="meta_comment">
                                                <a href="{{$url}}">
                                                    {{ $countComments = ($countComments==0)?"Chưa có":$countComments }} bình luận
                                                </a>
                                            </span>
                                            <p>{!! str_limit($newsItem->preview, 90) !!} <span class="meta_more"><a  href="{{ route('vnexpress.page.detail', ['slug' => str_slug($newsItem->title), 'id' => $newsItem->id]) }}">Đọc tiếp...</a></span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="pagination_area">
            <nav>
                {{ $objNews->links() }}
            </nav>
        </div>
    </div>
@endsection