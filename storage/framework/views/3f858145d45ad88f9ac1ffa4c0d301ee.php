<?php foreach ((['axis' => 'x']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<!--[if BLOCK]><![endif]--><?php if($axis === 'x'): ?>
    <template name="axis-line">
        <line <?php echo e($attributes->merge([
            'class' => '[:where(&)]:text-zinc-300 dark:[:where(&)]:text-white/40',
            'orientation' => 'bottom',
            'stroke-width' => '1',
            'stroke' => 'currentColor',
            'fill' => 'none',
        ])); ?>></line>
    </template>
<?php else: ?>
    <template name="axis-line">
        <line <?php echo e($attributes->merge([
            'class' => '[:where(&)]:text-zinc-300 dark:[:where(&)]:text-white/40',
            'orientation' => 'left',
            'stroke-width' => '1',
            'stroke' => 'currentColor',
            'fill' => 'none',
        ])); ?>></line>
    </template>
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/vendor/livewire/flux-pro/src/../stubs/resources/views/flux/chart/axis/line.blade.php ENDPATH**/ ?>