<?php $__env->startSection('css'); ?>
    <?php echo Html::style(asset('css/star_rate/starRate.css')); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Submit Review</div>
                    <div class="panel-body">
                        <?php echo e(Form::open(['url' => 'submitReview/insertFeedback', 'method' => 'post'])); ?>

                        <div class=" form-group col-lg-12">
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <strong><?php echo e(session('success')); ?></strong>
                                    </div>
                                <?php elseif(session('log_error')): ?>
                                    <div class="alert alert-danger">
                                        <strong><?php echo e(session('log_error')); ?></strong>
                                    </div>
                                <?php elseif(session('error')): ?>
                                    <div class="alert alert-danger">
                                        <strong><?php echo e(session('error')); ?></strong>
                                    </div>
                                <?php endif; ?>
                            <div class="col-lg-12">
                                <div class="input-group submit_review_info restaurant_name">
                                    <?php echo e(Form::text('restaurant',null,array('placeholder'=>'Restaurant','class'=>'form-control '))); ?>

                                    <?php echo e(Form::hidden('review_biz_ID',null,array('class'=>'form-control '))); ?>

                                    <?php echo e(Form::hidden('review_user_ID',Auth::id(),array('class'=>'form-control '))); ?>

                                </div>
                            </div>
                        </div>
                        <div class=" form-group col-lg-12">
                            <div class="col-lg-12">
                            <div class="input-group submit_review_info dish_name">
                                <?php echo e(Form::text('dish',null,array('placeholder'=>'Dish','class'=>'form-control'))); ?>

                                <?php echo e(Form::hidden('review_item_ID',null,array('class'=>'form-control'))); ?>

                            </div>
                            </div>
                        </div>
                        <div class="form-group  col-lg-12">
                            <div class="col-lg-12">
                                <div class="input-group submit_review_info">
                                    <?php echo e(Form::textarea('item_comment',null,array('placeholder'=>'Leave your comment','class'=>'form-control','size' => '22x3'))); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 star-rate">
                            <div class="col-lg-12">
                                <div class="acidjs-rating-stars <?php echo e($errors->has('review_rate') ? ' has-error' : ''); ?>">
                                    <input type="radio" name="review_rate" id="group-2-0" value="5" /><label for="group-2-0"></label>
                                    <input type="radio" name="review_rate" id="group-2-1" value="4" /><label for="group-2-1"></label>
                                    <input type="radio" name="review_rate" id="group-2-2" value="3" /><label for="group-2-2"></label>
                                    <input type="radio" name="review_rate" id="group-2-3" value="2" /><label for="group-2-3"></label>
                                    <input type="radio" name="review_rate" id="group-2-4" value="1" /><label for="group-2-4"></label>
                                </div>
                                <?php if($errors->has('review_rate')): ?>
                                    <span class="help-block">
                                     <strong class="alert-danger" style="background-color: transparent;" >You must rate the dish</strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <button class="btn btn-info col-xs-4">Push</button>
                        <?php echo e(Form::close()); ?>

                    </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">result</div>
                <div class="panel-body" style="height: 300px; overflow-x: hidden; ">
                   <table class="rest_result">
                   </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">result1</div>
                <div class="panel-body" style="overflow-x: hidden; ">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User</th>
                                                    <th>Restaurant</th>
                                                    <th>Dish</th>
                                                    <th>Comment</th>
                                                    <th>Rate</th>
                                                    <th>Like/Dislike</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $item_reviewss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_reviews): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <tr>
                                                        <td><?php echo $num++; ?></td>
                                                        <td><?php echo e($item_reviews->user_nickname); ?></td>
                                                        <td><?php echo e($item_reviews->biz_name); ?></td>
                                                        <td><?php echo e($item_reviews->item_name); ?></td>
                                                        <td><?php echo e($item_reviews->item_comment); ?></td>
                                                        <td><?php echo e($item_reviews->review_rate); ?></td>
                                                        <td>
                                                            <?php if(isset($item_reviews->review_like_dislike)): ?>
                                                                <?php if($item_reviews->review_like_dislike == '1' && $item_reviews->like_user_id == Auth::id()): ?>
                                                                    <span class="glyphicon glyphicon-thumbs-up finger already_liked" data="already_liked" data-comm="<?php echo e($item_reviews->review_ID); ?>" data-rev-user="<?php echo e($item_reviews->review_user_ID); ?>" data-like-id="<?php echo e($item_reviews->item_review_likes_id); ?>"></span>
                                                                <?php elseif($item_reviews->review_like_dislike == '0' && $item_reviews->like_user_id == Auth::id()): ?>
                                                                    <span class="glyphicon glyphicon-thumbs-up finger" data="up" data-comm="<?php echo e($item_reviews->review_ID); ?>" data-rev-user="<?php echo e($item_reviews->review_user_ID); ?>" data-like-id="<?php echo e($item_reviews->item_review_likes_id); ?>"></span>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <span class="glyphicon glyphicon-thumbs-up finger" data="up" data-comm="<?php echo e($item_reviews->review_ID); ?>" data-rev-user="<?php echo e($item_reviews->review_user_ID); ?>"></span>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User</th>
                                                    <th>Restaurant</th>
                                                    <th>Dish</th>
                                                    <th>Comment</th>
                                                    <th>Rate</th>
                                                    <th>Like/Dislike</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>