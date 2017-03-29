<?php $__env->startSection('css'); ?>
    <?php echo Html::style(asset('css/star_rate/starRate.css')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Submit Review</div>
                    <div class="panel-body">
                        <?php echo e(Form::open(['url' => 'submitReview/insertFeedback', 'method' => 'post'])); ?>

                        <div class=" form-group col-lg-12">
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>
                                 <?php if(isset($registr)): ?>
                                    <div class="alert alert-danger">
                                        <strong>Please Login or register </strong>
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
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>