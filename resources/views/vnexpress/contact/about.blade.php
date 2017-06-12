@extends('templates.vnexpress.master')
@section('title')
    Giới thiệu trang tin tức VN EXPRESS
@endsection
@section('content')
    <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
            <div class="single_page_area">
                <ol class="breadcrumb">
                    <li><a href="{{ route('vnexpress.page.home') }}">Trang chủ</a></li>
                    <li><a href="{{ route('vnexpress.page.about') }}">Giới thiệu</a></li>
                </ol>
                <h2 class="post_titile">Giới thiệu </h2>
                <div class="single_page_content">
                    Giới thiệu Trung tâm đào tạo VinaEnter Edu
                    Công ty TNHH Giải pháp Công nghệ VinaENTER (tiền thân là Công ty CP Phú Hải Sơn, thành lập năm 2009) với mục đích cung cấp các sản phẩm công nghệ tốt nhất cho khách hàng. Với đội ngũ nhân viên trẻ trung, năng động, sáng tạo và đầy nhiệt huyết, từ năm 2009 đến nay, VinaENTER đã cung cấp sản phẩm website, các giải pháp phần mềm đến hơn 500 khách hàng trong và ngoài nước.

                    Với mong muốn đào tạo các lập trình viên giỏi về chuyên môn, có kỹ năng và tác phong chuyên nghiệp để phục vụ cho công ty và các doanh nghiệp tại Đà Nẵng-Miền trung, tháng 12/2014 VinaENTER triển khai thành lập phòng Đào tạo(VinaTAB EDU) với đội ngũ giảng viên giàu tâm huyết, có khả năng sư phạm và kinh nghiệm triển khai các dự án JAVA, PHP lớn cho khách hàng. VinaENTER tự hào đã đào tạo nhiều học viên giỏi, học được làm được và được các công ty lớn tại Đà Nẵng và trên cả nước đánh giá cao về khả năng chuyên môn.



                    VinaENTER quan niệm mỗi học viên là một nhân viên của công ty, giảng viên như người anh, người chị chỉ bảo tận tình cho học viên. Tại VinaENTER, chữ TÂM luôn được đặt lên hàng đầu!

                    VinaENTER - Đã Học Là Làm Được
                </div>
            </div>
        </div>
    </div>
@endsection