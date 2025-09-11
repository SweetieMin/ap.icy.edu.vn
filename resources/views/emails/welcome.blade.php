@extends('emails.layout')

@section('content')
<div class="message">
    <p>Chào mừng bạn đến với <strong>{{ $appName }}</strong>!</p>
    
    <p>Tài khoản của bạn đã được tạo thành công và sẵn sàng sử dụng. Dưới đây là thông tin đăng nhập của bạn:</p>
</div>

<div class="info-box">
    <p><strong>Thông tin đăng nhập:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li><strong>Họ và tên:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Username:</strong> {{ $user->username }}</li>
        <li><strong>Mã tài khoản:</strong> {{ $user->account_code }}</li>
        <li><strong>Mật khẩu tạm thời:</strong> <code style="background-color: #f3f4f6; padding: 2px 6px; border-radius: 3px;">{{ $temporaryPassword }}</code></li>
    </ul>
</div>

<div style="text-align: center; margin: 30px 0;">
    <a href="{{ $loginUrl }}" class="button">
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
    <p>Chúng tôi rất vui được chào đón bạn tham gia vào cộng đồng <strong>{{ $appName }}</strong>!</p>
    
    <p>Nếu bạn có bất kỳ câu hỏi nào, đừng ngần ngại liên hệ với chúng tôi.</p>
    
    <p>Trân trọng,<br>
    <strong>Đội ngũ {{ $appName }}</strong></p>
</div>
@endsection
