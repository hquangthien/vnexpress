<?php echo $__env->make('templates.vnexpress.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="mainContent">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="error_page_content">
                <h1>404</h1>
                <h2>Xin lỗi :(</h2>
                <h3>Thư mục bạn tìm kiếm không tồn tại.</h3>
                <p class="wow fadeInLeftBig">Vui lòng di chuyển đến <a href="<?php echo e(route('vnexpress.page.home')); ?>">Trang chủ</a></p>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('templates.vnexpress.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>