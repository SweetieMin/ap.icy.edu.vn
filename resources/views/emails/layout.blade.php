<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Thông báo từ ' . $appName }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #ec4899, #be185d);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        .content {
            padding: 30px 20px;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #1f2937;
        }
        .message {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
            color: #374151;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #ec4899, #be185d);
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            text-align: center;
            margin: 20px 0;
            transition: all 0.3s ease;
        }
        .button:hover {
            background: linear-gradient(135deg, #be185d, #9d174d);
            transform: translateY(-1px);
        }
        .info-box {
            background-color: #f3f4f6;
            border-left: 4px solid #ec4899;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }
        .info-box strong {
            color: #1f2937;
        }
        .footer {
            background-color: #f9fafb;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 5px 0;
            font-size: 14px;
            color: #6b7280;
        }
        .footer a {
            color: #ec4899;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 20px 0;
        }
        @media (max-width: 600px) {
            .container {
                margin: 0;
                border-radius: 0;
            }
            .header, .content, .footer {
                padding: 20px 15px;
            }
            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>{{ $appName }}</h1>
            <p>Hệ thống quản lý giáo dục</p>
        </div>

        <!-- Content -->
        <div class="content">
            @if(isset($user))
                <div class="greeting">
                    Xin chào <strong>{{ $user->name }}</strong>,
                </div>
            @endif

            @yield('content')
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>{{ $appName }}</strong></p>
            <p>Hệ thống quản lý giáo dục chuyên nghiệp</p>
            <div class="divider"></div>
            <p>
                <a href="{{ $appUrl }}">Truy cập hệ thống</a> | 
                <a href="{{ $appUrl }}/contact">Liên hệ hỗ trợ</a>
            </p>
            <p style="font-size: 12px; color: #9ca3af;">
                Email này được gửi tự động từ hệ thống. Vui lòng không trả lời email này.
            </p>
        </div>
    </div>
</body>
</html>
