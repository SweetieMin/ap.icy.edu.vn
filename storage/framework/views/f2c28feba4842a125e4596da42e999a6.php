<div class="flex-1 h-12 border -mt-px -ml-px flex items-center justify-center bg-pink-50 text-pink-700 font-medium"
     style="min-width: 10rem;">

    <p class="text-md">
        <!--[if BLOCK]><![endif]--><?php switch($day->dayOfWeek):
            case (0): ?>
                Chủ Nhật
                <?php break; ?>
            <?php case (1): ?>
                Thứ Hai
                <?php break; ?>
            <?php case (2): ?>
                Thứ Ba
                <?php break; ?>
            <?php case (3): ?>
                Thứ Tư
                <?php break; ?>
            <?php case (4): ?>
                Thứ Năm
                <?php break; ?>
            <?php case (5): ?>
                Thứ Sáu
                <?php break; ?>
            <?php case (6): ?>
                Thứ Bảy
                <?php break; ?>
        <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
    </p>

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/day-of-week.blade.php ENDPATH**/ ?>