<?php echo $__env->make('templates.vnexpress.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="mainContent">
    <?php echo $__env->yieldContent('slider'); ?>
    <div class="content_bottom">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('templates.vnexpress.right_bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>
<?php echo $__env->make('templates.vnexpress.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>