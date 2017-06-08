@extends('templates.admin.master')
@section('content')
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Danh sách tin</h4>
                        @if(session('msg'))
                            <p class="alert alert-success"> {{ session('msg') }} </p>
                        @endif
                        <a href="{{ route('news.create') }}" class="btn btn-primary">Tạo mới</a>
                        <br /><br />
                        <div class="table-responsive">
                            <table class="table m-0 text-center table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục tin</th>
                                    <th>Ảnh bìa</th>
                                    <th>Lượt xem</th>
                                    <th>Người đăng</th>
                                    <th>Ghim top</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($objNews as $newsItem)
                                <tr>
                                    <th>{{ $newsItem->id }}</th>
                                    <td>
                                        <a href="{{ route('vnexpress.page.detail', ['slug' => str_slug($newsItem->title), 'id' => $newsItem->id]) }}">{{ $newsItem->title }}</a>
                                    </td>
                                    <td>{{ $newsItem->cat_name }}</td>
                                    <td>
                                        <img width="150" src="{{ Storage::url('app/files/') }}{{ $newsItem->picture }}" />
                                    </td>
                                    <td>{{ $newsItem->views }}</td>
                                    <td>{{ $newsItem->username }}</td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="changeActive({{ $newsItem->id }})">
                                            @if($newsItem->pin == 1)
                                                <img id="user{{ $newsItem->id }}" src="{{ $adminUrl }}assets/images/1.gif">
                                            @else
                                                <img id="user{{ $newsItem->id }}" src="{{ $adminUrl }}assets/images/0.gif">
                                            @endif
                                        </a>
                                    </td>

                                    <td class="actions">
                                        @if(Auth::user()->role == 1 OR Auth::user()->id == $newsItem->created_by)
                                            <a href="{{ route('news.edit', ['id' => $newsItem->id]) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a> ||
                                            <a href="{{ route('news.delete', ['id' => $newsItem->id]) }}" onclick="return confirm('Bạn có muốn xóa tin tức này không?')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                        @else
                                            <a href="{{ route('news.edit', ['id' => $newsItem->id]) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            {{ $objNews->links() }}
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
@section('js')
    <script type="text/javascript">
        function changeActive(id) {
            updateActive('news/active_adv', id,
                function (data) {
                    $('#news'+id).attr('src', '{{ $adminUrl }}assets/images/'+ data.active +'.gif');
                },
                function (error) {
                    console.log(error);
                }
            );
        }
    </script>
@endsection
