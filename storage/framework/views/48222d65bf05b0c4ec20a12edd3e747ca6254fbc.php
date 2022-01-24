<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- TITLE -->
    <title>AMON</title>
    <!-- FAVICON -->
    <link rel="icon" href="<?php echo e(asset('img/logo.png')); ?>" type="image/x-icon">
    <!-- CSS -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
    <link href="<?php echo e(asset('libs/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
</head>
<body>
    <?php echo $__env->yieldContent('nav'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript" src="<?php echo e(asset('libs/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/layouts/app.blade.php ENDPATH**/ ?>