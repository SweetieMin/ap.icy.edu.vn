<div>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class=" grid auto-rows-min gap-4 xl:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
               
                    <video autoplay playsinline preload="auto">
                        <source src="<?php echo e(asset('INTRO.mp4')); ?>" type="video/mp4">
                    </video>
        
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
                <video autoplay muted playsinline loop class="w-full h-full " preload="auto">
                    <source src="<?php echo e(asset('PROGRAM.mp4')); ?>" type="video/mp4">
                </video>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
                <!--[if BLOCK]><![endif]--><?php if($isShowChartAttendance): ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.general.dashboard.chart-attendance', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2028378732-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.general.dashboard.time-table', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2028378732-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('livewire:navigated', () => {
            document.querySelectorAll('video[autoplay]').forEach(video => {
                video.play().catch(() => {
                    video.play();
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/dashboard/layout-dashboard.blade.php ENDPATH**/ ?>