<?php $__env->startSection('content'); ?>
    <?php echo Html::script(asset('js/jquery-3.1.1.min.js')); ?>


    <p><button onclick="geoFindMe()">Show my location</button></p>
    <div id="out"></div>




    <script type="text/javascript">

    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script(asset('js/htmlGeo.js')); ?>

    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>