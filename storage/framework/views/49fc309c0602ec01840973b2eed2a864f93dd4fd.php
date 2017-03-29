<?php $__env->startSection('content'); ?>
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Profile Detail</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right col-lg-4">
                            <?php if($user['user_avatar'] == null): ?>
                                
                                    <img src="<?php echo e(asset('user_profile_pic//user.jpg')); ?>" class="img-responsive" alt="Cinque Terre">
                                
                            <?php else: ?>
                                
                                    <img src="<?php echo e(asset('user_profile_pic/'.$user['user_avatar'])); ?>" class="img-responsive" alt="Cinque Terre">
                                
                            <?php endif; ?>
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong><?php echo e($user['user_nickname']); ?></strong></h4>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="/editMyProfile" class="btn btn-primary btn-sm btn-block" data="<?php echo e(Auth::id()); ?>" style="color: #fff;">
                                            <i class="fa fa-edit"></i>
                                            Edit My Profile
                                        </a>
                                    </div>
                                    
                                        
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>My Reviews</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>biz_name</th>
                                    <th>item_name</th>
                                    <th>item_comment</th>
                                    <th>item_rate</th>
                                    <th>Review Date</th>
                                </tr>
                                </thead>
                                <?php $__currentLoopData = $call; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cal): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo e($cal->biz_name); ?></td>
                                        <td><?php echo e($cal->item_name); ?></td>
                                        <td><?php echo e($cal->item_comment); ?></td>
                                        <td><?php echo e($cal->item_rate); ?></td>
                                        <td><?php echo e($cal->review_createdate); ?></td>
                                    </tr>
                                    </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>My Friends </h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>NickName</th>
                                    <th>Relation</th>
                                </tr>
                                </thead>

                                <?php $__currentLoopData = $allFriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allFriend): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    
                                    <tbody>
                                    <tr>
                                        <td><?php echo e($allFriend->user_firstname); ?></td>
                                        <td><?php echo e($allFriend->user_lastname); ?></td>
                                        <td><?php echo e($allFriend->user_nickname); ?></td>
                                        <?php if($allFriend->relations == 'Friend'): ?>
                                            <td><input type="button" class="btn btn-success"  value="<?php echo e($allFriend->relations); ?>"></td>
                                        <?php elseif($allFriend->relations == 'Confirm'): ?>
                                            <td><input type="button" class="btn btn-info profile_confirm" data-id="<?php echo e($allFriend->user_ID); ?>" value="<?php echo e($allFriend->relations); ?>"></td>
                                        <?php endif; ?>
                                    </tr>
                                    </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>