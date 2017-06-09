@extends('templates.vnexpress.master')
@section('content')
    <div class="col-md-8">
        <div class="contact_area">
            <h1>Liên hệ</h1>
            <p>Nếu có bất cứ thắc mắc gì về trang web của chúng tôi, vui lòng điền đầy đủ thông tin vào form bên dưới. Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất có thể.</p>
            <div class="contact_bottom">
                <div class="contact_us wow fadeInRightBig">
                    <h2>Liên hệ</h2>
                    @if(session('msg'))
                        <p class="alert alert-success">{{ session('msg') }}</p>
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
                    <form action="{{ route('vnexpress.page.contact') }}" method="POST" class="contact_form">
                        {{ csrf_field() }}
                        <input class="form-control" type="text" name="name" placeholder="Nhập tên ...">
                        <input class="form-control" type="email" name="mail" placeholder="Nhập email ...">
                        <input class="form-control" type="text" name="subject" placeholder="Nhập chủ đề">
                        <textarea class="form-control" cols="30" name="detail" rows="10" placeholder="Nhập nội dung..."></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection