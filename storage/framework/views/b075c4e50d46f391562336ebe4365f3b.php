<div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
        <div class="flex items-center space-x-2 mb-4">
            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                <?php if (isset($component)) { $__componentOriginal034523d705d4b4e6e19fdb0c8a89f076 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034523d705d4b4e6e19fdb0c8a89f076 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.chart-pie','data' => ['class' => 'w-4 h-4 text-blue-600 dark:text-blue-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.chart-pie'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-blue-600 dark:text-blue-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034523d705d4b4e6e19fdb0c8a89f076)): ?>
<?php $attributes = $__attributesOriginal034523d705d4b4e6e19fdb0c8a89f076; ?>
<?php unset($__attributesOriginal034523d705d4b4e6e19fdb0c8a89f076); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034523d705d4b4e6e19fdb0c8a89f076)): ?>
<?php $component = $__componentOriginal034523d705d4b4e6e19fdb0c8a89f076; ?>
<?php unset($__componentOriginal034523d705d4b4e6e19fdb0c8a89f076); ?>
<?php endif; ?>
            </div>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Thống kê điểm danh</h2>
        </div>
        <div style="height: 200px; position: relative;">
            <canvas id="attendanceChart"></canvas>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function initAttendanceChart() {
            console.log('Init chart...');
            const ctx = document.getElementById('attendanceChart');
            console.log('Canvas element:', ctx);

            if (!ctx) {
                console.warn('attendanceChart canvas not found');
                return;
            }

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: <?php echo json_encode($labels, 15, 512) ?>,
                    datasets: [{
                        label: 'Điểm danh',
                        data: <?php echo json_encode($data, 15, 512) ?>,
                        backgroundColor: [
                            'rgba(34, 197, 94, 0.9)',
                            'rgba(239, 68, 68, 0.9)',
                            'rgba(255, 255, 0, 0.5)'
                        ],
                        borderColor: [
                            'rgba(34, 197, 94, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(255, 163, 175, 0.5)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true,
                                font: {
                                    size: 14
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const value = context.parsed;
                                    return value + ' buổi';
                                }
                            }
                        }
                    }
                }
            });

            console.log('Chart created successfully!');
        }

        document.addEventListener('livewire:load', () => requestAnimationFrame(initAttendanceChart));
        document.addEventListener('livewire:navigated', () => requestAnimationFrame(initAttendanceChart));
    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/dashboard/chart-attendance.blade.php ENDPATH**/ ?>