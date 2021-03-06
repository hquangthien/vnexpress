<div class="col-lg-4 col-md-4">
    <div class="content_bottom_right">
        <div class="single_bottom_rightbar">
            <h2>Cập nhật</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
                @foreach( $objRecentNews as $recentNews )
                    <li>
                        <div class="media wow fadeInDown">
                            <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($recentNews->title), 'id' => $recentNews->id]) }}"
                              class="media-left">
                                <img alt="{{ str_slug($recentNews->title) }}" src="{{ Storage::url('app/files/') }}{{ $recentNews->picture }}">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($recentNews->title), 'id' => $recentNews->id]) }}">
                                        {{ $recentNews->title }}
                                    </a>
                                </h4>
                                <p style="font-weight: lighter;">{!! str_limit($recentNews->preview, 100) !!} </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
                <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Xem nhiều nhất</a></li>
                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Bình luận mới nhất</a></li>
            </ul>
            <div class="tab-content">
                <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                    <ul class="small_catg popular_catg wow fadeInDown">
                        @foreach($objPopularNews as $popularNews)
                            <li>
                                <div class="media wow fadeInDown">
                                    <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id]) }}"
                                       class="media-left">
                                        <img alt="{{ str_slug($popularNews->title) }}" src="{{ Storage::url('app/files/') }}{{ $popularNews->picture }}">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id]) }}">
                                                {{ $popularNews->title }}
                                            </a>
                                        </h4>
                                        <p style="font-weight: lighter;">{!! str_limit($popularNews->preview, 100) !!} </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="recentComent" class="tab-pane fade" role="tabpanel">
                    <ul class="small_catg popular_catg">
                        @foreach( $objRecentNewsComment as $popularNews )
                            <li>
                                <div class="media">
                                    <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id]) }}"
                                       class="media-left">
                                        <img alt="{{ str_slug($popularNews->title) }}" src="{{ Storage::url('app/files/') }}{{ $popularNews->picture }}">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($popularNews->title), 'id' => $popularNews->id]) }}">
                                                {{ $popularNews->title }}
                                            </a>
                                        </h4>
                                        <p style="font-weight: lighter;">{!! str_limit($popularNews->preview, 100) !!} </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="single_bottom_rightbar wow fadeInDown">
            @if(sizeof($advRightBar) > 0)
                <img width="100%" src="{{ Storage::url('app/files/') }}{{ $advRightBar[0]->image }}" alt="">
            @else
                <img width="100%" src="{{ $publicUrl }}images/default_advright.jpg" alt="">
            @endif

        </div>
    </div>
</div>