<div class="flex-1 h-10 sm:h-12 border -mt-px -ml-px flex items-center justify-center bg-pink-50 text-pink-700 font-medium"
     style="flex: 1 1 0%; min-width:5.5rem;">

    <p class="text-xs sm:text-md">
        @switch($day->dayOfWeek)
            @case(0)
                <span class="hidden sm:inline">Chủ Nhật</span>
                <span class="sm:hidden">CN</span>
                @break
            @case(1)
                <span class="hidden sm:inline">Thứ Hai</span>
                <span class="sm:hidden">T2</span>
                @break
            @case(2)
                <span class="hidden sm:inline">Thứ Ba</span>
                <span class="sm:hidden">T3</span>
                @break
            @case(3)
                <span class="hidden sm:inline">Thứ Tư</span>
                <span class="sm:hidden">T4</span>
                @break
            @case(4)
                <span class="hidden sm:inline">Thứ Năm</span>
                <span class="sm:hidden">T5</span>
                @break
            @case(5)
                <span class="hidden sm:inline">Thứ Sáu</span>
                <span class="sm:hidden">T6</span>
                @break
            @case(6)
                <span class="hidden sm:inline">Thứ Bảy</span>
                <span class="sm:hidden">T7</span>
                @break
        @endswitch
    </p>

</div>
