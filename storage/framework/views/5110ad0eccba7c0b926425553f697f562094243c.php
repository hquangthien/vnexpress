<?php $__env->startSection('title'); ?>
    <?php echo e($objNews->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
            <div class="single_page_area">
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(route('vnexpress.page.home')); ?>">Trang chủ</a></li>
                    <li>
                        <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($objSuperCatItem->name), 'id' => $objSuperCatItem->id])); ?>">
                            <?php echo e($objSuperCatItem->name); ?>

                        </a>
                    </li>
                    <?php if(sizeof($objSubCatItem) != ''): ?>
                    <li>
                        <a href="<?php echo e(route('vnexpress.page.category', ['slug' => str_slug($objSubCatItem->name), 'id' => $objSubCatItem->id])); ?>">
                            <?php echo e($objSubCatItem->name); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                </ol>
                <h2 class="post_titile"><?php echo e($objNews->title); ?> </h2>
                <div class="single_page_content">
                    <div class="post_commentbox">
                        <a href="javascript:void(0)"><i class="fa fa-user"></i><?php echo e($objNews->fullname); ?></a>
                        <span><i class="fa fa-calendar"></i><?php echo e($objNews->created_at); ?></span>
                        <?php if(sizeof($objTags) > 0): ?>
                            <span><i class="fa fa-tags"></i></span>|
                            <?php $__currentLoopData = $objTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('vnexpress.page.tag', ['slug' => str_slug($tagItem->content), 'id' => $tagItem->tag_id])); ?>"><?php echo e($tagItem->content); ?></a>|
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <?php echo $objNews->detail; ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="share_post col-md-6 col-md-offset-6">
                <a class="facebook" onclick="alert('Comming soon!!!')" href="javascript:void(0)"><i class="fa fa-facebook"></i>Facebook</a>
                <a class="twitter" onclick="alert('Comming soon!!!')" href="javascript:void(0)"><i class="fa fa-twitter"></i>Twitter</a>
                <a class="googleplus" onclick="alert('Comming soon!!!')" href="javascript:void(0)"><i class="fa fa-google-plus"></i>Google+</a>
            </div>
        </div>
        <hr/>
        <div class="similar_post">
            <h2>Có thể bạn thích xem <i class="fa fa-thumbs-o-up"></i></h2>
            <ul class="small_catg similar_nav wow fadeInDown animated">
                <?php $__currentLoopData = $objRelateNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relateNewsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="padding: 5px; box-sizing: border-box;">
                        <div class="media wow fadeInDown animated"
                             style="visibility: visible; animation-name: fadeInDown;">
                            <a class="media-left related-img"
                               href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($relateNewsItem->title), 'id' => $relateNewsItem->id])); ?>">
                                <img src="<?php echo e(Storage::url('app/files/')); ?><?php echo e($relateNewsItem->picture); ?>" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <a href="<?php echo e(route('vnexpress.page.detail', ['slug' => str_slug($relateNewsItem->title), 'id' => $relateNewsItem->id])); ?>">
                                        <?php echo e($relateNewsItem->title); ?>

                                    </a>
                                </h5>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <hr/>

        <div class="row">
            <div class="row">
                <!-- Contenedor Principal -->
                <div class="comments-container">
                    <h3>Bình luận cho bài đăng: </h3>
                    <div class="row" style="padding: 30px; box-sizing: border-box; background-color: #f0f0f0">
                        <?php if(session(('msg'))): ?>
                            <?php echo e(session('msg')); ?>

                        <?php endif; ?>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form class="form-horizontal" action="<?php echo e(route('comment')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php if(Auth::check()): ?>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" name="name_cmt" value="<?php echo e(Auth::user()->fullname); ?>" placeholder="Nhập họ tên...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" value="<?php echo e(Auth::user()->email); ?>" name="email" placeholder="Nhập email...">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                            <?php else: ?>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name_cmt" name="name_cmt" placeholder="Nhập họ tên...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Nhập email...">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <input type="hidden" class="form-control" name="news_id" value="<?php echo e($objNews->id); ?>">
                            <input type="hidden" class="form-control" id="comment_id" name="comment_id" value="<?php echo e(null); ?>">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Bình luận</label>
                                <div class="col-sm-10">
                                    <textarea type="password" rows="5" id="content" class="form-control" name="content" placeholder="Nhập nội dung bình luận"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Bình luận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php if(sizeof($objComments) == 0): ?>
                        <br />
                        <p class="alert alert-info">Hãy là người đầu tiên bình luận cho bài đăng này!!!</p>
                    <?php else: ?>
                    <ul id="comments-list" class="comments-list">
                        <?php $__currentLoopData = $objComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $commentItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($commentItem->comment_id == null): ?>
                                <li>
                                    <div class="comment-main-level">
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="<?php echo e($publicUrl); ?>images/user-avatar.jpg"
                                                                         alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <?php if($commentItem->user_id != ''): ?>
                                                    <h6 class="comment-name by-author"><a href="javascript:void(0)"><?php echo e($commentItem->name_cmt); ?></a></h6>
                                                <?php else: ?>
                                                    <h6 class="comment-name"><a href="javascript:void(0)"><?php echo e($commentItem->name_cmt); ?></a></h6>
                                                <?php endif; ?>
                                                <span><?php echo e($commentItem->created_at); ?></span>
                                                    <a href="#content" onclick="getCmtId(<?php echo e($commentItem->id); ?>)"><i class="fa fa-reply"></i></a>
                                            </div>
                                            <div class="comment-content">
                                                <?php echo e($commentItem->content); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $parrent_id = $commentItem->id;
                                        unset($objComments[$key]);
                                    ?>
                                    <!-- Respuestas de los comentarios -->
                                    <ul class="comments-list reply-list">
                                        <?php $__currentLoopData = $objComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCommentItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($subCommentItem->comment_id == $parrent_id): ?>
                                                <li>
                                                    <!-- Avatar -->
                                                    <div class="comment-avatar"><img
                                                                src="<?php echo e($publicUrl); ?>images/user-avatar.jpg" alt=""></div>
                                                    <!-- Contenedor del Comentario -->
                                                    <div class="comment-box">
                                                        <div class="comment-head">
                                                            <?php if($subCommentItem->user_id != ''): ?>
                                                                <h6 class="comment-name by-author"><a href="javascript:void(0)"><?php echo e($subCommentItem->name_cmt); ?></a></h6>
                                                            <?php else: ?>
                                                                <h6 class="comment-name"><a href="javascript:void(0)"><?php echo e($subCommentItem->name_cmt); ?></a></h6>
                                                            <?php endif; ?>
                                                            <span><?php echo e($subCommentItem->created_at); ?></span>
                                                        </div>
                                                        <div class="comment-content">
                                                            <?php echo e($subCommentItem->content); ?>

                                                        </div>
                                                    </div>
                                                </li>
                                             <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        function getCmtId($id) {
            $('#comment_id').val($id);
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.vnexpress.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>