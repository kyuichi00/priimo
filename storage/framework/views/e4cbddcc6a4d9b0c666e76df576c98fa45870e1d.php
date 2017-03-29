<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Edit My Profile</h2>
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group<?php echo e($errors->has('user_firstname') ? ' has-error' : ''); ?>">
                <label for="user_firstname" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input id="user_firstname" type="text" class="form-control" name="user_firstname" value="" required autofocus>
                    <?php if($errors->has('user_firstname')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('user_firstname')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('user_lastname') ? ' has-error' : ''); ?>">
                <label for="user_lastname" class="col-md-4 control-label">Surname</label>
                <div class="col-md-6">
                    <input id="user_lastname" type="text" class="form-control" name="user_lastname" value="" required autofocus>
                    <?php if($errors->has('user_lastname')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('user_lastname')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('user_nickname') ? ' has-error' : ''); ?>">
                <label for="user_nickname" class="col-md-4 control-label">Username</label>
                <div class="col-md-6">
                    <input id="user_nickname" type="text" class="form-control" name="user_nickname" value="" required autofocus>
                    <?php if($errors->has('user_nickname')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('user_nickname')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('user_firstname') ? ' has-error' : ''); ?>">
                <label for="user_firstname" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input id="user_firstname" type="text" class="form-control" name="user_firstname" value="<?php echo e(old('user_firstname')); ?>" required autofocus>
                    <?php if($errors->has('user_firstname')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('user_firstname')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('user_firstname') ? ' has-error' : ''); ?>">
                <label for="user_firstname" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input id="user_firstname" type="text" class="form-control" name="user_firstname" value="<?php echo e(old('user_firstname')); ?>" required autofocus>
                    <?php if($errors->has('user_firstname')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('user_firstname')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

        </form>
    </div>
    
        
            
                
                    
                        
                            

                            
                                

                                
                                    

                                    
                                        
                                        
                                    
                                    
                                
                            
                            
                                

                                
                                    

                                    
                                        
                                        
                                    
                                    
                                
                            

                            
                                

                                
                                    

                                    
                                        
                                        
                                    
                                    
                                
                            

                            
                                

                                
                                    

                                    
                                        
                                        
                                    

                                    
                                
                            

                            
                                

                                
                                    
                                
                            

                            
                                
                                    
                                        
                                    
                                
                            
                        
                    





                
            
        
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>