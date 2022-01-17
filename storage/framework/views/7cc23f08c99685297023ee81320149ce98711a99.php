<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/team.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/team.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/competition.blade.php ENDPATH**/ ?>