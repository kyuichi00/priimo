<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/editMyProfile')); ?>"  enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <?php if($user['user_avatar'] == null): ?>
                            <img src="<?php echo e(asset('panel/user_avatar/user.png')); ?>" class="img-rounded" alt="Cinque Terre" width="250">
                        <?php else: ?>
                            <img src="<?php echo e(asset('panel/user_avatar/'.$user['user_avatar'])); ?>" class="img-rounded" alt="Cinque Terre" width="250">
                        <?php endif; ?>
                        <div class="form-group <?php echo e($errors->has('user_avatar') ? ' has-error' : ''); ?>">
                            <label for="user_avatar" class="col-md-4 control-label">Upload Image</label>
                            <div class="col-md-8">
                                <input id="user_avatar" type="file" class="form-control col-md-4 "  name="user_avatar" >
                                <?php if($errors->has('user_avatar')): ?>
                                    <span class="help-block">
                                    <strong><?php echo e($errors->first('user_avatar')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 personal-info">
                    <div class="form-group<?php echo e($errors->has('user_nickname') ? ' has-error' : ''); ?>">
                        <input type="hidden" id="user_id" name="user_ID" value="<?php echo e(Auth::id()); ?>"/>
                        <label for="user_nickname" class="col-md-4 control-label">Username</label>
                        <div class="col-md-6">
                            <input id="user_nickname" type="text" class="form-control" name="user_nickname" value="<?php echo e($user['user_nickname']); ?>" required >
                            <?php if($errors->has('user_nickname')): ?>
                                <span class="help-block">
                            <strong><?php echo e($errors->first('user_nickname')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success edit" value="Update my profile" data="<?php echo e(Auth::id()); ?>" style=" float:right;">
                </div>
            </div>
        </form>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>