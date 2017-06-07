@extends('templates.admin.master')
@section('content')
    <?php
        $catModel = new \App\Model\Cat();
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Danh sách danh mục tin</h4>
                        @if(session('msg'))
                            <p class="alert alert-success"> {{ session('msg') }} </p>
                        @endif
                        @if(Auth::user()->role == 1)
                            <a href="{{ route('cat.create') }}" class="btn btn-primary">Tạo mới</a>
                        @endif
                        <br /><br />
                        <div class="table-responsive">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($objSuperCat as $superCat)
                                    <?php
                                        $countNewsOfSuperCat = $catModel->countNewsOfSuperCat($superCat->id)[0]->number_news;
                                        $countSubCatOfSuperCat = (isset($objSubCat[$superCat->id]))?sizeof($objSubCat[$superCat->id]):0;
                                    ?>
                                    <tr>
                                        <td>{{ $superCat->name }}</td>
                                        <td class="actions text-center">
                                            @if(Auth::user()->role == 1)
                                                <a href="{{ route('cat.edit', ['id' => $superCat->id]) }}"
                                                   class="on-default edit-row">
                                                    <i class="fa fa-pencil"></i>
                                                </a> ||
                                                <a href="{{ route('cat.delete', ['id' => $superCat->id]) }}"
                                                   onclick="return confirm('Có {{ $countSubCatOfSuperCat }} danh mục con và {{ $countNewsOfSuperCat }} tin tức thuộc danh mục tin này \n Bạn có muốn xóa không? ')"
                                                   class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            @else
                                                No action
                                            @endif
                                        </td>
                                    </tr>
                                    @if(isset($objSubCat[$superCat->id]))
                                        @foreach($objSubCat[$superCat->id] as $subCat)
                                            <?php
                                            $countNewsOfSubCat = $catModel->countNewsOfSubCat($subCat->id)[0]->number_news;
                                            ?>
                                            <tr>
                                                <td> |--- {{ $subCat->name }}</td>
                                                <td class="actions text-center">
                                                    @if(Auth::user()->role == 1)
                                                        <a href="{{ route('cat.edit', ['id' => $subCat->id]) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a> ||
                                                        <a href="{{ route('cat.delete', ['id' => $subCat->id]) }}"
                                                           onclick="return confirm('Có {{ $countNewsOfSubCat }} tin tức thuộc danh mục tin này \n Bạn có muốn xóa không? ')"
                                                           class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                    @else
                                                        No action
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
