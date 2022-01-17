<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- TITLE -->
    <title>AMON</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <!-- CSS -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/form.css')); ?>" rel="stylesheet">
    <?php echo e($style); ?>

    <link href="<?php echo e(asset('libs/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <!-- AJOUT DE FICHIERS css -->
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

    <?php echo e($slot); ?>


    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript" src="<?php echo e(asset('libs/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/form.js')); ?>"></script>
    <!-- AJOUT DE FICHIERS JS -->
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/layouts/form.blade.php ENDPATH**/ ?>