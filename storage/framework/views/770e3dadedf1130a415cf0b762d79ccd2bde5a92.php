<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- TITLE -->
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <!-- FAVICON -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">

    </head>
    <body>

        <?php echo e($slot); ?>


        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script type="text/javascript" src="<?php echo e(asset('libs/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </body>
</html>
<?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/layouts/guest.blade.php ENDPATH**/ ?>