@extends('templates.admin.master')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Danh sách email</h4>
                        @if(session('msg'))
                            <p class="alert alert-success"> {{ session('msg') }} </p>
                        @endif
                        <br /><br />
                        <div class="table-responsive">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên người gửi</th>
                                    <th>Tên chủ đề</th>
                                    <th>Email</th>
                                    <th>Tình trạng</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($objContact as $contactItem)
                                    <tr @if($contactItem->readed == 0) style="font-weight: bold; background-color: #ebeff2" @endif>
                                        <td>{{ $contactItem->id }}</td>
                                        <td>{{ $contactItem->name }}</td>
                                        <td>{{ $contactItem->subject }}</td>
                                        <td>{{ $contactItem->mail }}</td>
                                        <td>
                                            @if($contactItem->readed == 0)
                                                Chưa đọc
                                            @else
                                                Đã đọc
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('contact.show', ['id' => $contactItem->id]) }}" class="on-default edit-row"><i class="fa fa-paper-plane"></i></a> ||
                                            <a href="{{ route('contact.delete', ['id' => $contactItem->id]) }}"
                                               onclick="return confirm('Bạn có muốn xóa không? ')"
                                               class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                        </td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
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
            updateActive('cat/active_user', id,
                function (data) {
                    $('#user'+id).attr('src', '{{ $adminUrl }}assets/images/'+ data.active +'.gif');
                },
                function (error) {
                    console.log(error);
                }
            );
        }
    </script>
@endsection
