    <?php $__env->startSection('css'); ?>
    <?php echo Html::style(asset('css/home_page_tabs/home_page_tab.css')); ?>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="page-header">


        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="panel with-nav-tabs panel-primary">

                    <?php $__currentLoopData = $business; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busines): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="panel-heading">
                        <h3><?php echo e($busines->biz_name); ?></h3>
                    </div>
                    <div class="panel-body">
                        <h4><?php echo e($busines->biz_addr); ?></h4>
                        <h4><?php echo e($busines->biz_cityname); ?></h4>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>