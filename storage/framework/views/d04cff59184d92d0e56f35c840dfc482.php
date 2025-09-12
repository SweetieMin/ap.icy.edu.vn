
<div class="bg-gray-50 border-b border-gray-200 px-3 py-2 text-center text-sm font-medium text-gray-700">
    <!--[if BLOCK]><![endif]--><?php switch($day->dayOfWeek):
        case (0): ?>
            Chủ nhật
            <?php break; ?>
        <?php case (1): ?>
            Thứ hai
            <?php break; ?>
        <?php case (2): ?>
            Thứ ba
            <?php break; ?>
        <?php case (3): ?>
            Thứ tư
            <?php break; ?>
        <?php case (4): ?>
            Thứ năm
            <?php break; ?>
        <?php case (5): ?>
            Thứ sáu
            <?php break; ?>
        <?php case (6): ?>
            Thứ bảy
            <?php break; ?>
    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/dashboard/day-of-week.blade.php ENDPATH**/ ?>