<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <div class="contact_area">
            <h1>Contacts</h1>
            <p>Vestibulum id nisl a neque malesuada hendrerit. Mauris ut porttitor nunc, ut volutpat nisl. Nam ullamcorper ultricies metus vel ornare. Vivamus tincidunt erat in mi accumsan, a sollicitudin risus vestibulum. Nam dignissim purus vitae nisl adipiscing ultricies. Pellentesque in porttitor tellus. Integer fermentum in sem eu tempus. In eu metus vitae nibh laoreet sollicitudin et ac lectus. Curabitur blandit velit elementum augue elementum scelerisque.</p>
            <div class="contact_bottom">
                <div class="contact_us wow fadeInRightBig">
                    <h2>Contact Us</h2>
                    <form action="<?php echo e(route('vnexpress.page.contact')); ?>" method="POST" class="contact_form">
                        <?php echo e(csrf_field()); ?>

                        <input class="form-control" type="text" name="name" placeholder="Name(required)">
                        <input class="form-control" type="email" name="email" placeholder="E-mail(required)">
                        <input class="form-control" type="text" name="subject" placeholder="Subject">
                        <textarea class="form-control" cols="30" name="detail" rows="10" placeholder="Message(required)"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.vnexpress.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>