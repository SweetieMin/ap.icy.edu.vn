@extends('emails.layout')

@section('content')
<div class="message">
    <p>{{ $message }}</p>
</div>

@if($actionUrl && $actionText)
<div style="text-align: center; margin: 30px 0;">
    <a href="{{ $actionUrl }}" class="button">
        {{ $actionText }}
    </a>
</div>
@endif

<div class="info-box">
    <p><strong>Thông tin thông báo:</strong></p>
    <ul style="margin: 10px 0; padding-left: 20px;">
        <li><strong>Người nhận:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Thời gian:</strong> {{ now()->format('d/m/Y H:i:s') }}</li>
        <li><strong>Loại thông báo:</strong> {{ $title }}</li>
    </ul>
</div>

<div class="message">
    <p>Đây là thông báo tự động từ hệ thống <strong>{{ $appName }}</strong>.</p>
    
    <p>Nếu bạn có bất kỳ câu hỏi nào về thông báo này, vui lòng liên hệ với chúng tôi để được hỗ trợ.</p>
    
    <p>Trân trọng,<br>
    <strong>Đội ngũ {{ $appName }}</strong></p>
</div>
@endsection
