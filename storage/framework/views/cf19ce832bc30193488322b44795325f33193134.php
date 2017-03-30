<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home Page</div>
                    <div class="panel-heading">Search Restaurant</div>
                    <div class="panel-body">
                        <?php echo e(Form::open(['url' => '', 'method' => 'post'])); ?>

                            
                        <div class="search">
                            <span class="glyphicon glyphicon-search"></span>
                            <input type="text" name="home_city_search" class="search-bar home_search_city" placeholder="Search Location" >
                        </div>
                        <div class="search">
                            <span class="glyphicon glyphicon-search"></span>
                            <input type="text" name="home_dish_search" class="search-bar home_search_dish" placeholder="Search Dish" >
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Exclude Chain Restaurants<span></span></label>
                        </div>
                        <input type="submit" class="btn btn-success">

                       <?php echo e(Form::close()); ?>

                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">result</div>
                    <div class="panel-body" style="height: 300px; overflow-x: hidden; ">
                        <table class="home_seatch_result">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>