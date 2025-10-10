<?php $__env->startSection('content'); ?>
<div class="message">
    <p>Cảm ơn bạn đã đăng ký tài khoản tại <strong><?php echo e($appName); ?></strong>!</p>
    
    <p>Để hoàn tất quá trình đăng ký và bắt đầu sử dụng hệ thống, vui lòng xác thực địa chỉ email của bạn bằng cách nhấp vào nút bên dưới:</p>
</div>

<div style="text-align: center; margin: 30px 0;">
    <a href="<?php echo e($verificationUrl); ?>" class="button">
        Xác thực địa chỉ email
    </a>
</div>

<div class="info-box">
    <p><strong>Thông tin tài khoản:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li><strong>Họ và tên:</strong> <?php echo e($user->name); ?></li>
        <li><strong>Email:</strong> <?php echo e($user->email); ?></li>
        <li><strong>Username:</strong> <?php echo e($user->username); ?></li>
        <li><strong>Mã tài khoản:</strong> <?php echo e($user->account_code); ?></li>
    </ul>
</div>

<div class="message">
    <p><strong>Lưu ý quan trọng:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li>Liên kết xác thực sẽ hết hạn sau <strong>60 phút</strong></li>
        <li>Nếu bạn không thực hiện xác thực, tài khoản sẽ bị hạn chế quyền truy cập</li>
        <li>Nếu bạn không tạo tài khoản này, vui lòng bỏ qua email này</li>
    </ul>
</div>

<div class="message">
    <p>Nếu nút trên không hoạt động, bạn có thể sao chép và dán liên kết sau vào trình duyệt:</p>
    <p style="word-break: break-all; background-color: #f3f4f6; padding: 10px; border-radius: 4px; font-family: monospace; font-size: 12px;">
        <?php echo e($verificationUrl); ?>

    </p>
</div>

<div class="message">
    <p>Nếu bạn gặp bất kỳ vấn đề nào, vui lòng liên hệ với chúng tôi để được hỗ trợ.</p>
    
    <p>Trân trọng,<br>
    <strong>Đội ngũ <?php echo e($appName); ?></strong></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/emails/verify-email.blade.php ENDPATH**/ ?>