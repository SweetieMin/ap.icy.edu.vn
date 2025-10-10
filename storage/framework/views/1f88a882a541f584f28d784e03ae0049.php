<?php $__env->startSection('content'); ?>
<div class="message">
    <p><?php echo e($message); ?></p>
</div>

<?php if($actionUrl && $actionText): ?>
<div style="text-align: center; margin: 30px 0;">
    <a href="<?php echo e($actionUrl); ?>" class="button">
        <?php echo e($actionText); ?>

    </a>
</div>
<?php endif; ?>

<div class="info-box">
    <p><strong>Thông tin thông báo:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li><strong>Người nhận:</strong> <?php echo e($user->name); ?></li>
        <li><strong>Email:</strong> <?php echo e($user->email); ?></li>
        <li><strong>Thời gian:</strong> <?php echo e(now()->format('d/m/Y H:i:s')); ?></li>
        <li><strong>Loại thông báo:</strong> <?php echo e($title); ?></li>
    </ul>
</div>

<div class="message">
    <p>Đây là thông báo tự động từ hệ thống <strong><?php echo e($appName); ?></strong>.</p>
    
    <p>Nếu bạn có bất kỳ câu hỏi nào về thông báo này, vui lòng liên hệ với chúng tôi để được hỗ trợ.</p>
    
    <p>Trân trọng,<br>
    <strong>Đội ngũ <?php echo e($appName); ?></strong></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/emails/notification.blade.php ENDPATH**/ ?>