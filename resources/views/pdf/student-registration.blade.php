<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn đăng ký thông tin học viên</title>
    <style>
        @page {
            size: A4;
            margin: 5mm 10mm 5mm 15mm;
        }

        body {
            font-family: 'DejaVu Serif', serif;
            font-size: 14px;
            line-height: 1.3;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 5mm;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 2mm;
        }

        .subtitle {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 1mm;
        }

        .divider {
            border-top: 1px solid #000;
            margin: 2mm 0;
        }

        .section {
            margin-bottom: 2mm;

        }

        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 2mm;
            text-decoration: underline;

        }

        .field {
            margin-bottom: 1mm;
            font-size: 14px;
        }

        .checkbox {
            display: inline-block;
            width: 3mm;
            height: 3mm;
            border: 1px solid #000;
            margin-right: 2mm;
            margin-top: 3mm;
            vertical-align: middle;
        }

        .tick {
            position: relative;
            top: -2mm;
            font-weight: bold;
            font-size: 14px;
        }


        .input-line {
            display: inline-block;
            border-bottom: 1px dotted #000;
            font-weight: bold;
        }

        .date-input {
            display: inline-block;
            border-bottom: 1px dotted #000;
            width: 8mm;
            margin: 0 1mm;
            margin-left: 3mm;
            font-weight: bold;

        }

        .time-input {
            display: inline-block;
            border-bottom: 1px dotted #000;
            width: 10mm;
            margin: 0 1mm;
            font-weight: bold;
            margin-right: 3mm;
        }

        .programs-list {
            display: flex;
            flex-wrap: wrap;
            gap: 2mm;
        }

        .program-item {
            display: inline-flex;
            align-items: center;
            width: 220px;
            font-size: 14px;
            margin-bottom: 2mm;
            white-space: nowrap;
        }

        .commitment-list {
            margin-left: 0;
            padding-left: 0;
        }

        .commitment-item {
            margin-bottom: 0.5mm;
            font-size: 14px;
        }

        .commitment-sub-list {
            margin-top: 0.5mm;
            margin-left: 0;
            padding-left: 0;
        }

        .commitment-sub-item {
            margin-bottom: 0.3mm;
            font-size: 14px;
            margin-left: 2mm;
        }

        .signature-container {
            margin-top: 3mm;
        }

        .signature-section {
            display: inline-block;
            width: 30%;
            vertical-align: top;
            margin-right: 4mm;
            text-align: center;
        }

        .signature-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 1mm;
            text-align: center;
        }

        .signature-note {
            font-size: 10px;
            font-style: italic;
            margin-top: 1mm;
            text-align: center;
        }

        .signature-space {
            height: 10mm;
            border-bottom: 1px solid #000;
            margin: 1mm 0;
        }

        .note {
            font-size: 14px;
            font-style: italic;
        }

        .time {
            margin-right: 4mm;
        }

        .logo {
            position: absolute;
            top: 0mm;
            left: 0mm;
            width: 17mm;
        }
    </style>
</head>

<body>

    <img src="{{ public_path('/favicon.svg') }}" class="logo" alt="Logo ICY">

    <!-- HEADER -->
    <div class="header">
        <div class="title">TRUNG TÂM NGOẠI NGỮ SÁNG TẠO QUỐC TẾ ICY</div>
        <div class="subtitle">ĐƠN ĐĂNG KÝ HỌC VIÊN</div>
        <div class="divider"></div>
    </div>

    <!-- 1) THÔNG TIN HỌC VIÊN -->
    <div class="section">
        <div class="section-title">1) THÔNG TIN HỌC VIÊN - {{ $student->account_code }}</div>
        <div class="field">Họ và tên: <span class="input-line" style="width: 50%;">{{ $student->name }}</span>username:
            <span class="input-line" style="width: 25%;">{{ $student->username }}</span>
        </div>
        <div class="field">
            Ngày sinh:
            <span class="date-input">{{ $student->detail->birthday_day }}</span> /
            <span class="date-input">{{ $student->detail->birthday_month }}</span> /
            <span class="date-input">{{ $student->detail->birthday_year }}</span>

            &nbsp;&nbsp; Giới tính:
            <span class="checkbox">
                @if (!$student->detail->gender)
                    <span class="tick">X</span>
                @endif
            </span> Nam

            <span class="checkbox">
                @if ($student->detail->gender)
                    <span class="tick">X</span>
                @endif
            </span> Nữ
        </div>

        <div class="field">Số điện thoại: <span class="input-line"
                style="width: 30%;">{{ $student->detail->phone }}</span> &nbsp;&nbsp; Email:
            <span class="input-line" style="width: 35%;">{{ $student->email }}</span>
        </div>
        <div class="field">Địa chỉ: <span class="input-line" style="width: 80%;">{{ $student->detail->address }}</span>
        </div>
        <div class="field">Trường học: <span class="input-line" style="width: 50%;"></span> &nbsp;&nbsp; Lớp: <span
                class="input-line" style="width: 15%;"></span></div>
    </div>

    <!-- 2) PHỤ HUYNH / NGƯỜI GIÁM HỘ -->
    <div class="section">
        <div class="section-title">2) PHỤ HUYNH / NGƯỜI GIÁM HỘ</div>
        <div class="field">Họ tên <span class="input-line"
                style="width: 50%;">{{ $student->detail->guardian_name }}</span> SĐT: <span class="input-line"
                style="width: 25%;">{{ $student->detail->guardian_phone }}</span></div>
        <div class="field">Email liên hệ: <span class="input-line" style="width: 65%;"></span></div>
    </div>

    <!-- 3) CHƯƠNG TRÌNH ĐĂNG KÝ -->
    <div class="section">
        <div class="section-title">3) CHƯƠNG TRÌNH ĐĂNG KÝ</div>
        <div class="programs-list">
            <div class="program-item"><span class="checkbox"></span> Anh ngữ Mẫu giáo</div>
            <div class="program-item"><span class="checkbox"></span> Anh ngữ Thiếu nhi</div>
            <div class="program-item"><span class="checkbox"></span> Anh ngữ Thiếu niên</div>
            <div class="program-item"><span class="checkbox"></span> Anh ngữ Giao tiếp</div>
            <div class="program-item"><span class="checkbox"></span> Anh ngữ Doanh nghiệp</div>
            <div class="program-item"><span class="checkbox"></span> Anh ngữ Trường học</div>
            <div class="program-item"><span class="checkbox"></span> Luyện thi vào lớp 10</div>
            <div class="program-item"><span class="checkbox"></span> Luyện thi THPTQG</div>
            <div class="program-item"><span class="checkbox"></span> Luyện thi chứng chỉ IELTS</div>
        </div>
        <div class="field">Ca học mong muốn: <span class="checkbox"></span> <span class="time">Ca 1: 17h45 –
                19h15</span> <span class="checkbox"></span> <span class="time">Ca 2: 19h30 – 21h00</span> <span
                class="checkbox"></span> Khác:......................
        </div>
        <div class="note">Lưu ý: Trung tâm ngoại ngữ ICY sẽ cố gắng sắp xếp theo ca học mong muốn, tuy nhiên lịch học
            sẽ phụ thuộc và ưu tiên xếp theo ca cố định của lớp.</div>
    </div>



    <!-- 4) CAM KẾT -->
    <div class="section">
        <div class="section-title">4) CAM KẾT</div>
        <div style="">Tôi/chúng tôi cam kết:</div>
        <div class="commitment-list">
            <div class="commitment-item">1. Cung cấp thông tin chính xác.</div>
            <div class="commitment-item">2. Tuân thủ nội quy, lịch học, giờ học và quy định học phí của Trung tâm Ngoại
                ngữ ICY.</div>
            <div class="commitment-item">3. Đồng ý nhận thông báo qua điện thoại/Zalo/Email.</div>
            <div class="commitment-item">4. Trung tâm có chính sách hoàn phí:
                <div class="commitment-sub-list">
                    <div class="commitment-sub-item">• Rút học phí dưới 48 giờ: hoàn 80%.</div>
                    <div class="commitment-sub-item">• Rút học phí từ 2–7 ngày: hoàn 50%.</div>
                    <div class="commitment-sub-item">• Sau 7 ngày: không hoàn lại trong bất kỳ trường hợp nào.</div>
                </div>
            </div>
            <div class="commitment-item">5. Cho phép ICY sử dụng hình ảnh và thông tin học viên trong phạm vi truyền
                thông giáo dục và giới thiệu hoạt động.</div>
        </div>
    </div>

    <!-- 5) XÁC NHẬN -->
    <div class="section">
        <div class="section-title">5) XÁC NHẬN</div>
        <div>Tôi đã được tư vấn đầy đủ các thông tin và cam kết với những điều khoản trên.</div>
        <div>Lúc: <span class="time-input">{{ now()->format('H:i') }}</span> Ngày <span
                class="date-input">{{ now()->format('d') }}</span>/<span
                class="date-input">{{ now()->format('m') }}</span>/<span class="date-input"
                style="margin-right: 3mm;">{{ now()->format('Y') }}</span> tại Trung tâm Ngoại ngữ Sáng Tạo Quốc Tế ICY
        </div>

        <div class="signature-container">
            <div class="signature-section">
                <div class="signature-title">Phụ huynh/Giám hộ</div>
                <div class="signature-note">(Ký & ghi rõ họ tên)</div>
            </div>

            <div class="signature-section">
                <div class="signature-title">Học viên (nếu ≥15 tuổi)</div>
                <div class="signature-note">(Ký & ghi rõ họ tên)</div>
            </div>

            <div class="signature-section">
                <div class="signature-title">Nhân viên tư vấn</div>
                <div class="signature-note">(Ký & ghi rõ họ tên)</div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="signature-container" style="margin-top: 10mm; text-align: center;">
            <div class="signature-section">
                <div class="signature-title">{{ $student->detail->guardian_name }}</div>
            </div>

            <div class="signature-section">
                <div class="signature-title">{{ $student->name }}</div>
            </div>

            <div class="signature-section">
                <div class="signature-title">{{ $receptionist }}</div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', () => {
            window.print();
        });
    </script>
</body>

</html>
