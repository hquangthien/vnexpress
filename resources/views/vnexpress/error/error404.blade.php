@include('templates.vnexpress.header')
<section id="mainContent">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="error_page_content">
                <h1>404</h1>
                <h2>Xin lỗi :(</h2>
                <h3>Thư mục bạn tìm kiếm không tồn tại.</h3>
                <p class="wow fadeInLeftBig">Vui lòng di chuyển đến <a href="{{ route('vnexpress.page.home') }}">Trang chủ</a></p>
            </div>
        </div>
    </div>
</section>
@include('templates.vnexpress.footer')