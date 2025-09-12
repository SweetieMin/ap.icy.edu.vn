<div class="flex-1 h-12 border -mt-px -ml-px flex items-center justify-center bg-pink-50 text-pink-700 font-medium"
     style="min-width: 10rem;">

    <p class="text-md">
        @switch($day->dayOfWeek)
            @case(0)
                Chủ Nhật
                @break
            @case(1)
                Thứ Hai
                @break
            @case(2)
                Thứ Ba
                @break
            @case(3)
                Thứ Tư
                @break
            @case(4)
                Thứ Năm
                @break
            @case(5)
                Thứ Sáu
                @break
            @case(6)
                Thứ Bảy
                @break
        @endswitch
    </p>

</div>
