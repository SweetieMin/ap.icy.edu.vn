<?php $__env->startSection('content'); ?>
<div class="message">
    <p>Chào mừng bạn đến với <strong><?php echo e($appName); ?></strong>!</p>
    
    <p>Tài khoản của bạn đã được tạo thành công và sẵn sàng sử dụng. Dưới đây là thông tin đăng nhập của bạn:</p>
</div>

<div class="info-box">
    <p><strong>Thông tin đăng nhập:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li><strong>Họ và tên:</strong> <?php echo e($user->name); ?></li>
        <li><strong>Email:</strong> <?php echo e($user->email); ?></li>
        <li><strong>Username:</strong> <?php echo e($user->username); ?></li>
        <li><strong>Mã tài khoản:</strong> <?php echo e($user->account_code); ?></li>
        <li><strong>Mật khẩu tạm thời:</strong> <code style="background-color: #f3f4f6; padding: 2px 6px; border-radius: 3px;"><?php echo e($temporaryPassword); ?></code></li>
    </ul>
</div>

<div style="text-align: center; margin: 30px 0;">
    <a href="<?php echo e($loginUrl); ?>" class="button">
        Đăng nhập ngay
    </a>
</div>

<div class="message">
    <p><strong>Hướng dẫn sử dụng:</strong></p>
    <ol style="margin: 10px 0; padding-left: 20px;">
        <li>Sử dụng thông tin đăng nhập ở trên để truy cập hệ thống</li>
        <li>Thay đổi mật khẩu tạm thời trong lần đăng nhập đầu tiên</li>
        <li>Hoàn thiện thông tin cá nhân trong phần "Hồ sơ"</li>
        <li>Khám phá các tính năng của hệ thống</li>
    </ol>
</div>

<div class="message">
    <p><strong>Lưu ý quan trọng:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li>Vui lòng thay đổi mật khẩu tạm thời ngay sau khi đăng nhập</li>
        <li>Không chia sẻ thông tin đăng nhập với người khác</li>
        <li>Liên hệ quản trị viên nếu bạn cần hỗ trợ</li>
    </ul>
</div>

<div class="message">
    <p>Chúng tôi rất vui được chào đón bạn tham gia vào cộng đồng <strong><?php echo e($appName); ?></strong>!</p>
    
    <p>Nếu bạn có bất kỳ câu hỏi nào, đừng ngần ngại liên hệ với chúng tôi.</p>
    
    <p>Trân trọng,<br>
    <strong>Đội ngũ <?php echo e($appName); ?></strong></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/emails/welcome.blade.php ENDPATH**/ ?>