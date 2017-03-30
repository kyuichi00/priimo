<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>
            <span>Name</span>
            <span>Surname</span>
        </h1>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <img src="<?php echo e(asset('panel/user_avatar/img.jpg')); ?>"  class="avatar img-circle" alt="user_avatar" width="200px">
                </div>
            </div>
            <a href="/EditmyProfile" class="btn btn-primary">
                Edit
                </a>

        </div>
    </div>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>