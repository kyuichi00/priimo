<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Choose Restaurant & Upload Impressions</div>
            <div class="panel-body">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo e(Form::open(['url' => '/gallery/uploadImg', 'method' => 'post', 'files' => true])); ?>

                            <div class=" form-group col-lg-12">
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <strong><?php echo e(session('success')); ?></strong>
                                    </div>
                                <?php elseif(session('error')): ?>
                                    <div class="alert alert-danger">
                                        <strong><?php echo e(session('error')); ?></strong>
                                    </div>
                                <?php endif; ?>
                                <div class="col-lg-12">
                                    <div class="input-group gallery gallery_restaurant_name">
                                        <?php echo e(Form::text('rest',null,array('placeholder'=>'Restaurant','class'=>'form-control '))); ?>

                                        <?php echo e(Form::hidden('biz_ID',null,array('class'=>'form-control '))); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group <?php echo e($errors->has('files') ? ' has-error' : ''); ?>">
                                
                                <div class=" form-group     col-lg-12">
                                    <input id="" type="file" class="form-control col-md-4 "  name="files[]" multiple/>
                                    
                                        
                                    
                                
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info col-xs-4">Push</button>
                            <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">result</div>
                        <div class="panel-body" style="height: 300px; overflow-x: hidden; ">
                            <table class="gall_result">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">Gallery</div>
            <div class="panel-body"style="overflow-x: hidden;height: 400px;">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">

                                    <div class="ibox-content">
                                        <div class="lightBoxGallery">

                                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <div class="col-md-2" >
                                                 <img src="<?php echo e($image->rest_img); ?>" width="100%" height="150px" style=" border:1px solid black;"></a>
                                                 <span><a href="restaurantPage/<?php echo e($image->biz_id); ?>"><?php echo e($image->business_name); ?></a></span>
                                            </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
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


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>