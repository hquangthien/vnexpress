@section('title')
    Trang thông tin cá nhân
@endsection
@include('templates.vnexpress.header')
<section id="mainContent">
    @yield('slider')
    <div class="content_bottom">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Thông tin cá nhân</h4>
                            <hr />
                            <div class="row">
                                <div class="col-lg-11">
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
                                        <p class="alert alert-success"> {{ session('msg') }} </p>
                                    @endif
                                    <form class="form-horizontal" action="{{ route('profile', ['id' => $objUser->id]) }}" role="form" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tên tài khoản (*)</label>
                                            <div class="col-md-10">
                                                <input type="text" disabled readonly name="username" class="form-control" value="{{ $objUser->username }}" placeholder="Nhập tài khoản...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Email (*)</label>
                                            <div class="col-md-10">
                                                <input type="email" name="email" class="form-control" value="{{ $objUser->email }}" placeholder="Nhập email...">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Danh mục tin ưa thích (*)</label>
                                            <div class="col-md-10">
                                                <select name="cat_id" id="cat_id" class="form-control">
                                                    <option value="{{ null }}">-- Chọn danh mục tin yêu thích --</option>
                                                    @if(isset($objFavouriteCat))
                                                        @foreach($objSuperCat as $superCat)
                                                            @if($superCat->id == $objFavouriteCat->cat_id)
                                                                <option  selected value="{{ $superCat->id }}">{{ $superCat->name }}</option>
                                                            @else
                                                                <option value="{{ $superCat->id }}">{{ $superCat->name }}</option>
                                                            @endif
                                                            @if(isset($objSubCat[$superCat->id]))
                                                                @foreach($objSubCat[$superCat->id] as $subCat)
                                                                        @if($subCat->id == $objFavouriteCat->cat_id)
                                                                            <option  selected value="{{ $subCat->id }}">|--- {{ $subCat->name }}</option>
                                                                        @else
                                                                            <option value="{{ $subCat->id }}">|--- {{ $subCat->name }}</option>
                                                                        @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @foreach($objSuperCat as $superCat)
                                                                <option value="{{ $superCat->id }}">{{ $superCat->name }}</option>
                                                            @if(isset($objSubCat[$superCat->id]))
                                                                @foreach($objSubCat[$superCat->id] as $subCat)
                                                                    <option value="{{ $subCat->id }}">|--- {{ $subCat->name }}</option>
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Nhập lại email (*)</label>
                                            <div class="col-md-10">
                                                <input type="email" name="confirm-email" value="{{ $objUser->email }}" class="form-control" placeholder="Nhập lại email...">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Nhập họ tên (*)</label>
                                            <div class="col-md-10">
                                                <input type="text" name="fullname" value="{{ $objUser->fullname }}" class="form-control" placeholder="Nhập họ tên...">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Bạn có muốn thay đổi mật khẩu không?</label>
                                            <div class="col-md-10">
                                                <input type="checkbox" value="off" id="check" name="check">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Mật khẩu (*)</label>
                                            <div class="col-md-10">
                                                <input type="password" disabled="false" class="form-control" id="password" name="password" value="" placeholder="Nhập mật khẩu...">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nhập lại mật khẩu (*)</label>
                                            <div class="col-md-10">
                                                <input type="password" disabled="false" id="confirm_password" class="form-control" name="confirm-password" value="" placeholder="Nhập lại mật khẩu...">
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
    </div>
</section>
@include('templates.vnexpress.footer')
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('change', '#check', function () {
            if(this.checked){
                $('#confirm_password').prop('disabled', false);
                $('#password').attr('disabled', false);
                $('#check').val('on');

            } else{
                $('#confirm_password').prop('disabled', true);
                $('#password').attr('disabled', true);
                $('#check').val('off');
            }
        });
    });
</script>



