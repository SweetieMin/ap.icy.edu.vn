@extends('emails.layout')

@section('content')
<div class="message">
    <p>Chúng tôi nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn tại <strong>{{ $appName }}</strong>.</p>
    
    <p>Để đặt lại mật khẩu mới, vui lòng nhấp vào nút bên dưới:</p>
</div>

<div style="text-align: center; margin: 30px 0;">
    <a href="{{ $resetUrl }}" class="button" style='color: white;'>
        Đặt lại mật khẩu
    </a>
</div>

<div class="info-box">
    <p><strong>Thông tin yêu cầu:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li><strong>Họ và tên:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Username:</strong> {{ $user->username }}</li>
        <li><strong>Thời gian yêu cầu:</strong> {{ now()->format('d/m/Y H:i:s') }}</li>
    </ul>
</div>

<div class="message">
    <p><strong>Lưu ý bảo mật:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li>Liên kết đặt lại mật khẩu sẽ hết hạn sau <strong>60 phút</strong></li>
        <li>Mật khẩu mới phải có ít nhất 8 ký tự</li>
        <li>Mật khẩu phải chứa chữ hoa, chữ thường, số và ký tự đặc biệt</li>
        <li>Nếu bạn không yêu cầu đặt lại mật khẩu, vui lòng bỏ qua email này</li>
    </ul>
</div>

<div class="message">
    <p>Nếu nút trên không hoạt động, bạn có thể sao chép và dán liên kết sau vào trình duyệt:</p>
    <p style="word-break: break-all; background-color: #f3f4f6; padding: 10px; border-radius: 4px; font-family: monospace; font-size: 12px;">
        {{ $resetUrl }}
    </p>
</div>

<div class="message">
    <p><strong>Cảnh báo bảo mật:</strong></p>
    <p>Nếu bạn không thực hiện yêu cầu này, tài khoản của bạn vẫn an toàn. Tuy nhiên, nếu bạn nhận thấy có hoạt động đáng ngờ, vui lòng liên hệ với chúng tôi ngay lập tức.</p>
    
    <p>Trân trọng,<br>
    <strong>Đội ngũ {{ $appName }}</strong></p>
</div>
@endsection
