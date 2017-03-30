<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>
            <span><?php echo e($user['user_nickname']); ?></span>

        </h1>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <?php if($user['user_avatar'] == null): ?>
                        <img src="<?php echo e(asset('panel/user_avatar/user.png')); ?>" class="img-rounded" alt="Cinque Terre" width="250">
                    <?php else: ?>
                        <img src="<?php echo e(asset('panel/user_avatar/'.$user['user_avatar'])); ?>" class="img-rounded" alt="Cinque Terre" width="250">
                    <?php endif; ?>
                </div>
            </div>
            <a href="/editMyProfile" class="btn btn-primary" data="<?php echo e(Auth::id()); ?>">
               Edit My Profile
            </a>

        </div>
    </div>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>