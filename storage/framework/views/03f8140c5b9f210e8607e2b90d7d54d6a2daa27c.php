</div>
<footer id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInLeft">
                        <h2>Liên hệ qua các kênh của tôi</h2>
                        <ul class="flicker_nav">
                            <li><a href="https://www.facebook.com/hquangthien.dtu"><img src="<?php echo e($publicUrl); ?>images/fb.gif" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo e($publicUrl); ?>images/instagram-circle-logo-2_large.png" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo e($publicUrl); ?>images/unnamed.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInDown">
                        <h2>HOT TAGS</h2>
                        <ul class="labels_nav">
                            <?php $__currentLoopData = $hotTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('vnexpress.page.tag', ['slug' => str_slug($tagItem->content), 'id' => $tagItem->tag_id])); ?>"><?php echo e($tagItem->content); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInRight">
                        <h2>giới thiệu</h2>
                        <p> Công ty TNHH Giải pháp Công nghệ VinaENTER (tiền thân là Công ty CP Phú Hải Sơn, thành lập năm 2009)
                            với mục đích cung cấp các sản phẩm công nghệ tốt nhất cho khách hàng. Với đội ngũ nhân viên trẻ trung,
                            năng động, sáng tạo và đầy nhiệt huyết, từ năm 2009 đến nay, VinaENTER đã cung cấp sản phẩm website,
                            các giải pháp phần mềm đến hơn 500 khách hàng trong và ngoài nước. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_left">
                        <p>Copyright &copy; 2017 <a href="">Hoàng Quang Thiên</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_right">
                        <p>Developed BY Hoàng Quang Thiên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo e($publicUrl); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo e($publicUrl); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo e($publicUrl); ?>assets/js/wow.min.js"></script>
<script src="<?php echo e($publicUrl); ?>assets/js/slick.min.js"></script>
<script src="<?php echo e($publicUrl); ?>assets/js/custom.js"></script>
<?php echo $__env->yieldContent('js'); ?>

</body>
</html>