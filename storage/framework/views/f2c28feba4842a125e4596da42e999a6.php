<div class="flex-1 h-10 sm:h-12 border -mt-px -ml-px flex items-center justify-center bg-pink-50 text-pink-700 font-medium"
     style="flex: 1 1 0%; min-width:5.5rem;">

    <p class="text-xs sm:text-md">
        <!--[if BLOCK]><![endif]--><?php switch($day->dayOfWeek):
            case (0): ?>
                <span class="hidden sm:inline">Chủ Nhật</span>
                <span class="sm:hidden">CN</span>
                <?php break; ?>
            <?php case (1): ?>
                <span class="hidden sm:inline">Thứ Hai</span>
                <span class="sm:hidden">T2</span>
                <?php break; ?>
            <?php case (2): ?>
                <span class="hidden sm:inline">Thứ Ba</span>
                <span class="sm:hidden">T3</span>
                <?php break; ?>
            <?php case (3): ?>
                <span class="hidden sm:inline">Thứ Tư</span>
                <span class="sm:hidden">T4</span>
                <?php break; ?>
            <?php case (4): ?>
                <span class="hidden sm:inline">Thứ Năm</span>
                <span class="sm:hidden">T5</span>
                <?php break; ?>
            <?php case (5): ?>
                <span class="hidden sm:inline">Thứ Sáu</span>
                <span class="sm:hidden">T6</span>
                <?php break; ?>
            <?php case (6): ?>
                <span class="hidden sm:inline">Thứ Bảy</span>
                <span class="sm:hidden">T7</span>
                <?php break; ?>
        <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
    </p>

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/day-of-week.blade.php ENDPATH**/ ?>