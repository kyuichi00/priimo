
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(config('app.name', 'Priima')); ?></title>
        <link href="/css/app.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.png">
        <?php echo Html::style(asset('css/app.css')); ?>

        <?php echo Html::style(asset('css/bootstrap.css')); ?>

        <?php echo Html::style(asset('css/bootstrap.min.css')); ?>

        <?php echo Html::style(asset('css/bootstrap-theme.min.css')); ?>

        <?php echo Html::style(asset('css/bootstrap-theme.css')); ?>

        <?php echo Html::style(asset('css/font-awesome.min.css')); ?>

        <?php echo $__env->yieldContent('css'); ?>
        <?php echo Html::style(asset('css/mainCss.css')); ?>

    </head>

    <body>
        <header id="container" class="" style="height: 60px;">
            <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>
        <section class="main-section">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <footer id="container" class="" style="background-color: red;">
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>

        <?php echo Html::script(asset('js/app.js')); ?>

        <?php echo Html::script(asset('js/bootstrap.js')); ?>

        <?php echo Html::script(asset('js/bootstrap.min.js')); ?>

        <?php echo Html::script(asset('js/jquery-3.1.1.min.js')); ?>

        <?php echo Html::script(asset('js/main.js')); ?>

    </body>
</html>