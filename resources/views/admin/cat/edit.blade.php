@extends('templates.admin.master')
@section('title')
    Quản lý danh mục tin
@endsection
@section('h1')
    Quản lý danh mục tin
@endsection
@section('content')
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Sửa danh mục tin</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('msg'))
                                    <p class="alert alert-warning">{{ session('msg') }}</p>
                                @endif
                                <form class="form-horizontal" action="{{ route('cat.update', ['id' => $objCat->id ]) }}" role="form" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tên danh mục tin (*)</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" value="{{ $objCat->name }}" placeholder="Nhập danh mục tin...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Danh mục cha</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="parrent_cat">
                                                <option value="{{ null }}">-- Không có --</option>
                                                @foreach($objSuperCat as $superCat)
                                                    @if($superCat->id == $objCat->parrent_cat)
                                                        <option value="{{ $superCat->id }}" selected>{{ $superCat->name }}</option>
                                                    @else
                                                        <option value="{{ $superCat->id }}">{{ $superCat->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" value="Cập nhật" class="btn btn-lg btn-primary">
                                        <input type="reset" name="reset" value="Nhập lại" class="btn btn-lg btn-default">
                                    </div>
                                </form>
                            </div><!-- end col -->

                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div>

        </div> <!-- container -->

    </div> <!-- content -->
@endsection