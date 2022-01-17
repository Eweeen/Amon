<?php $attributes = $attributes->exceptProps(['errors']); ?>
<?php foreach (array_filter((['errors']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="alert alert-danger">
            <i class="bx bx-x"></i>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/components/auth-validation-errors.blade.php ENDPATH**/ ?>