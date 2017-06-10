@extends('templates.vnexpress.master')
@section('title')
    {{ $objNews->title }}
@endsection
@section('content')
    <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
            <div class="single_page_area">
                <ol class="breadcrumb">
                    <li><a href="{{ route('vnexpress.page.home') }}">Trang chủ</a></li>
                    <li>
                        <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($objSuperCatItem->name), 'id' => $objSuperCatItem->id]) }}">
                            {{ $objSuperCatItem->name }}
                        </a>
                    </li>
                    @if(sizeof($objSubCatItem) != '')
                    <li>
                        <a href="{{ route('vnexpress.page.category', ['slug' => str_slug($objSubCatItem->name), 'id' => $objSubCatItem->id]) }}">
                            {{ $objSubCatItem->name }}
                        </a>
                    </li>
                    @endif
                </ol>
                <h2 class="post_titile">{{ $objNews->title }} </h2>
                <div class="single_page_content">
                    <div class="post_commentbox">
                        <a href="javascript:void(0)"><i class="fa fa-user"></i>{{ $objNews->fullname }}</a>
                        <span><i class="fa fa-calendar"></i>{{ $objNews->created_at }}</span>
                        @if(sizeof($objTags) > 0)
                            <span><i class="fa fa-tags"></i></span>|
                            @foreach($objTags as $tagItem)
                                <a href="{{ route('vnexpress.page.tag', ['slug' => str_slug($tagItem->content), 'id' => $tagItem->tag_id]) }}">{{ $tagItem->content }}</a>|
                            @endforeach
                        @endif
                    </div>
                    {!! $objNews->detail !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="share_post col-md-6 col-md-offset-6">
                <a class="facebook" onclick="alert('Comming soon!!!')" href="javascript:void(0)"><i class="fa fa-facebook"></i>Facebook</a>
                <a class="twitter" onclick="alert('Comming soon!!!')" href="javascript:void(0)"><i class="fa fa-twitter"></i>Twitter</a>
                <a class="googleplus" onclick="alert('Comming soon!!!')" href="javascript:void(0)"><i class="fa fa-google-plus"></i>Google+</a>
            </div>
        </div>
        <hr/>
        <div class="similar_post">
            <h2>Có thể bạn thích xem <i class="fa fa-thumbs-o-up"></i></h2>
            <ul class="small_catg similar_nav wow fadeInDown animated">
                @foreach($objRelateNews as $relateNewsItem)
                    <li style="padding: 5px; box-sizing: border-box;">
                        <div class="media wow fadeInDown animated"
                             style="visibility: visible; animation-name: fadeInDown;">
                            <a class="media-left related-img"
                               href="{{ route('vnexpress.page.detail', ['slug' => str_slug($relateNewsItem->title), 'id' => $relateNewsItem->id]) }}">
                                <img src="{{ Storage::url('app/files/') }}{{ $relateNewsItem->picture }}" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($relateNewsItem->title), 'id' => $relateNewsItem->id]) }}">
                                        {{ $relateNewsItem->title }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <hr/>

        <div class="row">
            <div class="row">
                <!-- Contenedor Principal -->
                <div class="comments-container">
                    <h3>Bình luận cho bài đăng: </h3>
                    <div class="row" style="padding: 30px; box-sizing: border-box; background-color: #f0f0f0">
                        @if(session(('msg')))
                            {{ session('msg') }}
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" action="{{ route('comment') }}" method="POST">
                            {{ csrf_field() }}
                            @if(Auth::check())
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" name="name_cmt" value="{{ Auth::user()->fullname }}" placeholder="Nhập họ tên...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Nhập email...">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                            @else
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name_cmt" name="name_cmt" placeholder="Nhập họ tên...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Nhập email...">
                                    </div>
                                </div>
                            @endif
                            <input type="hidden" class="form-control" name="news_id" value="{{ $objNews->id }}">
                            <input type="hidden" class="form-control" id="comment_id" name="comment_id" value="{{ null }}">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Bình luận</label>
                                <div class="col-sm-10">
                                    <textarea type="password" rows="5" id="content" class="form-control" name="content" placeholder="Nhập nội dung bình luận"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Bình luận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if(sizeof($objComments) == 0)
                        <br />
                        <p class="alert alert-info">Hãy là người đầu tiên bình luận cho bài đăng này!!!</p>
                    @else
                    <ul id="comments-list" class="comments-list">
                        @foreach($objComments as $key => $commentItem)
                            @if($commentItem->comment_id == null)
                                <li>
                                    <div class="comment-main-level">
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="{{ $publicUrl }}images/user-avatar.jpg"
                                                                         alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                @if($commentItem->user_id != '')
                                                    <h6 class="comment-name by-author"><a href="javascript:void(0)">{{ $commentItem->name_cmt }}</a></h6>
                                                @else
                                                    <h6 class="comment-name"><a href="javascript:void(0)">{{ $commentItem->name_cmt }}</a></h6>
                                                @endif
                                                <span>{{ $commentItem->created_at }}</span>
                                                    <a href="#content" onclick="getCmtId({{ $commentItem->id }})"><i class="fa fa-reply"></i></a>
                                            </div>
                                            <div class="comment-content">
                                                {{ $commentItem->content }}
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $parrent_id = $commentItem->id;
                                        unset($objComments[$key]);
                                    ?>
                                    <!-- Respuestas de los comentarios -->
                                    <ul class="comments-list reply-list">
                                        @foreach($objComments as $subCommentItem)
                                            @if($subCommentItem->comment_id == $parrent_id)
                                                <li>
                                                    <!-- Avatar -->
                                                    <div class="comment-avatar"><img
                                                                src="{{ $publicUrl }}images/user-avatar.jpg" alt=""></div>
                                                    <!-- Contenedor del Comentario -->
                                                    <div class="comment-box">
                                                        <div class="comment-head">
                                                            @if($subCommentItem->user_id != '')
                                                                <h6 class="comment-name by-author"><a href="javascript:void(0)">{{ $subCommentItem->name_cmt }}</a></h6>
                                                            @else
                                                                <h6 class="comment-name"><a href="javascript:void(0)">{{ $subCommentItem->name_cmt }}</a></h6>
                                                            @endif
                                                            <span>{{ $subCommentItem->created_at }}</span>
                                                        </div>
                                                        <div class="comment-content">
                                                            {{ $subCommentItem->content }}
                                                        </div>
                                                    </div>
                                                </li>
                                             @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        function getCmtId($id) {
            $('#comment_id').val($id);
        }
    </script>
@endsection