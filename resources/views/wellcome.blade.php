<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - ICY</title>

    {{-- Favicon --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    {{-- Styles & Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- SEO Meta Tags --}}
    <meta name="description"
        content="Nền tảng quản lý học viên, khóa học và lịch học trực tuyến dành riêng cho các trung tâm tiếng Anh ICY">
    <meta name="keywords"
        content="đăng nhập, ICY, giáo dục, quản lý học viên, hệ thống giáo dục, trung tâm tiếng Anh, ap.icy.edu.vn">
    <meta name="author" content="ICY English">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Theme Color (mobile address bar) --}}
    <meta name="theme-color" content="#ec4899">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - {{ config('app.name') }}">
    <meta property="og:description"
        content="Nền tảng quản lý học viên, khóa học và lịch học trực tuyến dành riêng cho các trung tâm tiếng Anh ICY">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - {{ config('app.name') }}">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image" content="{{ asset('OG-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Logo ICY English">

    {{-- Facebook App ID --}}
    <meta property="fb:app_id" content="802740835544615">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - {{ config('app.name') }}">
    <meta name="twitter:description"
        content="Nền tảng quản lý học viên, khóa học và lịch học trực tuyến dành riêng cho các trung tâm tiếng Anh ICY">
    <meta name="twitter:image" content="{{ asset('OG-image.png') }}">
    <meta name="twitter:image:alt" content="Logo ICY English">
    @verbatim
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - ICY",
      "description": "Nền tảng quản lý học viên, khóa học và lịch học trực tuyến dành riêng cho các trung tâm tiếng Anh ICY",
      "url": "https://ap.icy.edu.vn",
      "isPartOf": {
        "@type": "WebSite",
        "name": "NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - ICY",
        "url": "https://ap.icy.edu.vn"
      },
      "publisher": {
        "@type": "Organization",
        "name": "NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - ICY",
        "url": "https://ap.icy.edu.vn"
      }
    }
    </script>

        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://ap.icy.edu.vn",
      "name": "NGOẠI NGỮ SÁNG TẠO QUỐC TẾ - ICY",
      "logo": "https://ap.icy.edu.vn/logo.png",
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61574962657249",
        "https://www.youtube.com/@ICY-English",
        "https://www.tiktok.com/@icy.english.ng.na"
      ]
    }
    </script>
    @endverbatim
</head>

<body class="bg-white text-slate-800">
    <div class="bg-gradient-to-tr from-pink-50 via-pink-100 to-pink-50 border-b border-pink-100">
        <div class="max-w-6xl mx-auto px-4 md:px-6 py-6 md:py-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                <div class="flex items-center gap-3 md:gap-4">
                    <img src="/favicon.svg" alt="ICY Logo" class="h-12 w-12 md:h-16 md:w-16 select-none" />
                    <div>
                        <h1 class="text-xl md:text-3xl font-extrabold tracking-tight text-pink-700">NGOẠI NGỮ SÁNG TẠO
                            QUỐC
                            TẾ - ICY</h1>
                        <p class="mt-1 text-sm md:text-base text-pink-700/80"><em>Hệ thống quản lý giáo dục thông
                                minh</em></p>
                    </div>
                </div>
                <div class="flex md:justify-end">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-pink-600 text-white shadow hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-50 text-sm md:text-base">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M3 6a3 3 0 013-3h4v6H3V6zM3 11h7v10H6a3 3 0 01-3-3v-7zm9-8h6a3 3 0 013 3v4h-9V3zm9 8v7a3 3 0 01-3 3h-6v-10h9z" />
                            </svg>
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-pink-600 text-white shadow hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-50 text-sm md:text-base">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M11.78 2.97a.75.75 0 01.53-.22h5.94a.75.75 0 01.75.75v16.5a.75.75 0 01-.75.75h-5.94a.75.75 0 110-1.5h5.19V4.5h-5.19a.75.75 0 01-.53-1.28zM3.22 12.53a.75.75 0 010-1.06l3.97-3.97a.75.75 0 111.06 1.06L5.81 11H15a.75.75 0 010 1.5H5.81l2.44 2.44a.75.75 0 11-1.06 1.06l-3.97-3.97z"
                                    clip-rule="evenodd" />
                            </svg>
                            Đăng nhập
                        </a>
                    @endauth
                </div>

            </div>
            <p class="mt-4 text-slate-700 leading-7 text-sm md:text-base">
                Chào mừng bạn đến với <strong>Ngoại ngữ Sáng Tạo Quốc Tế - ICY</strong> –
                nền tảng <strong>quản lý học viên, khóa học và lịch học trực tuyến</strong>
                dành riêng cho các trung tâm tiếng Anh. Tại đây, học viên có thể dễ dàng tra cứu
                thông tin lớp học, theo dõi lịch học, điểm danh, kết quả kiểm tra cũng như truy cập
                tài liệu học tập mọi lúc mọi nơi.
            </p>

            <p class="mt-3 md:mt-4 text-slate-700 leading-7 text-sm md:text-base">
                Hệ thống ICY được thiết kế để hỗ trợ <strong>giáo viên, quản lý trung tâm và phụ huynh</strong>
                theo dõi tiến độ học tập của học viên, đồng thời mang đến trải nghiệm học tập
                linh hoạt, minh bạch và hiện đại.
            </p>

            <p class="mt-3 md:mt-4 text-slate-700 leading-7 text-sm md:text-base">
                Nếu bạn đang tìm kiếm một <strong>nền tảng quản lý giáo dục hiệu quả</strong> cho trung tâm tiếng Anh,
                ICY chính là lựa chọn hàng đầu.
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 md:px-6 py-6 md:py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <div
                class="bg-white border border-pink-200 rounded-lg md:rounded-xl p-4 md:p-5 shadow-sm transition-transform  duration-200 active:scale-95 md:hover:-translate-y-2 md:hover:shadow-md md:hover:border-pink-300 md:hover:bg-pink-50/50">
                <h2 class="flex items-center gap-2 font-bold text-slate-900 mb-2 hover:text-pink-700">Tầm nhìn <span
                        class="inline-block px-2 py-0.5 rounded-full text-xs bg-slate-100 text-slate-600">Vision</span>
                </h2>
                <p class="text-slate-700 leading-7 text-sm md:text-base">ICY hướng tới trở thành trung tâm Anh ngữ hàng
                    đầu, nơi khai mở tư
                    duy và phát huy sáng tạo, giúp học viên làm chủ tiếng Anh để hội nhập toàn cầu. ICY mong muốn đưa
                    học viên và nhân tài đất nước được đặt chân đến những khung trời kiến thức mới và mở mang tầm nhìn
                    trong môi trường làm việc quốc tế.</p>
            </div>

            <div
                class="bg-white border border-pink-200 rounded-lg md:rounded-xl p-4 md:p-5 shadow-sm transition-transform  duration-200 active:scale-95 md:hover:-translate-y-2 md:hover:shadow-md md:hover:border-pink-300 md:hover:bg-pink-50/50">
                <h2 class="flex items-center gap-2 font-bold text-slate-900 mb-2 hover:text-pink-700">Sứ mệnh <span
                        class="inline-block px-2 py-0.5 rounded-full text-xs bg-slate-100 text-slate-600">Mission</span>
                </h2>
                <p class="text-slate-700 leading-7 text-sm md:text-base">ICY cam kết mang đến chương trình đào tạo tiếng
                    Anh chất lượng cao,
                    lấy người học làm trung tâm, kết hợp phương pháp giảng dạy sáng tạo và thực tiễn. Chúng tôi xây dựng
                    môi trường học tập truyền cảm hứng, giúp học viên phát triển tư duy, kỹ năng giao tiếp và năng lực
                    hội nhập quốc tế, mở ra cơ hội học tập và sự nghiệp vững chắc.</p>
            </div>

            <div
                class="bg-white border border-pink-200 rounded-lg md:rounded-xl p-4 md:p-5 shadow-sm transition-transform  duration-200 active:scale-95 md:hover:-translate-y-2 md:hover:shadow-md md:hover:border-pink-300 md:hover:bg-pink-50/50">
                <h2 class="font-bold text-slate-900 mb-2 hover:text-pink-700">Lớp học tư duy thông minh</h2>
                <p class="text-slate-700 leading-7 text-sm md:text-base">Lớp học Tư Duy Thông Minh tại ICY giúp học
                    viên
                    không chỉ giỏi tiếng
                    Anh mà còn rèn luyện khả năng tư duy phản biện, sáng tạo và giải quyết vấn đề. Thông qua phương pháp
                    giảng dạy tương tác, tình huống thực tế và các hoạt động nhóm, học viên phát triển tư duy logic, khả
                    năng diễn đạt mạch lạc và sự tự tin trong giao tiếp.</p>
            </div>

            <div
                class="bg-white border border-pink-200 rounded-lg md:rounded-xl p-4 md:p-5 shadow-sm transition-transform  duration-200 active:scale-95 md:hover:-translate-y-2 md:hover:shadow-md md:hover:border-pink-300 md:hover:bg-pink-50/50">
                <h2 class="font-bold text-slate-900 mb-2 hover:text-pink-700">Xây dựng văn hoá đọc và động lực học tập
                </h2>
                <p class="text-slate-700 leading-7 text-sm md:text-base">ICY khuyến khích thói quen đọc chủ động để
                    nâng
                    cao tư duy, mở rộng
                    kiến thức và rèn luyện tiếng Anh hiệu quả. Chúng tôi tạo môi trường học tập truyền cảm hứng, kết hợp
                    phương pháp giảng dạy sáng tạo và thực tiễn, giúp học viên duy trì động lực, phát triển tư duy phản
                    biện và tự tin hội nhập.</p>
            </div>

            <div
                class="bg-white border border-pink-200 rounded-lg md:rounded-xl p-4 md:p-5 shadow-sm md:col-span-2 transition-transform  duration-200 active:scale-95 md:hover:-translate-y-2 md:hover:shadow-md md:hover:border-pink-300 md:hover:bg-pink-50/50">
                <h2 class="font-bold text-slate-900 mb-2 hover:text-pink-700">Trải nghiệm thực tế</h2>
                <p class="text-slate-700 leading-7 text-sm md:text-base">ICY kết hợp lớp học mở và hoạt động ngoại khóa
                    để mang đến trải
                    nghiệm học tập sống động. Học viên không chỉ học trong lớp mà còn tham gia các buổi giao tiếp thực
                    tế, dự án nhóm và chuyến đi ngoại khóa, giúp rèn luyện kỹ năng ngôn ngữ, tư duy phản biện và sự tự
                    tin trong môi trường thực tế.</p>
            </div>
        </div>

        <div class="mt-6 md:mt-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-2">
            <span class="text-slate-500 text-xs md:text-sm">© {{ date('Y') }} ICY English. All rights
                reserved.</span>
            <span class="text-pink-600 text-xs md:text-sm font-medium">ICY English • Hệ thống quản lý giáo dục</span>
        </div>
    </div>
</body>

</html>
