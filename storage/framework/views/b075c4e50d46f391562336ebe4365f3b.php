<div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-3 sm:p-4 w-full overflow-hidden">
        <div class="relative h-37 sm:h-90  xl:h-90 overflow-hidden">
            <canvas id="attendanceChart" class="block w-full h-full"
                style="width:100% !important;height:100% !important;border:0 !important;outline:0 !important;box-shadow:none !important;background-color:transparent !important;"></canvas>
        </div>

        <!-- Legend tuỳ chỉnh cho mobile -->
        <div class="mt-3 sm:hidden">
            <div class="flex flex-wrap gap-2 text-xs">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full" style="background-color: rgba(34, 197, 94, 0.9)"></span>
                    <span class="text-gray-700 dark:text-gray-300">Có mặt: <?php echo e($present); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full" style="background-color: rgba(239, 68, 68, 0.9)"></span>
                    <span class="text-gray-700 dark:text-gray-300">Vắng mặt: <?php echo e($absent); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full" style="background-color: rgba(251, 207, 232, 0.8)"></span>
                    <span class="text-gray-700 dark:text-gray-300">Tổng số buổi: <?php echo e($total); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let attendanceChartInstance = null;

        function renderAttendanceChart() {
            const canvas = document.getElementById('attendanceChart');
            if (!canvas) {
                console.warn('Canvas not found, retrying...');
                setTimeout(renderAttendanceChart, 100);
                return;
            }

            // Destroy instance cũ nếu có để tránh memory leak
            if (attendanceChartInstance) {
                attendanceChartInstance.destroy();
                attendanceChartInstance = null;
            }

            const isMobile = window.matchMedia('(max-width: 1023.98px)').matches;
            console.log('Rendering chart, isMobile:', isMobile);

            attendanceChartInstance = new Chart(canvas, {
                type: 'pie',
                data: {
                    labels: <?php echo json_encode($labels, 15, 512) ?>,
                    datasets: [{
                        label: 'Điểm danh',
                        data: <?php echo json_encode($data, 15, 512) ?>,
                        backgroundColor: [
                            'rgba(34, 197, 94, 0.9)', // xanh lá
                            'rgba(239, 68, 68, 0.9)', // đỏ
                            'rgba(251, 207, 232, 0.8)' // total
                        ],
                        borderColor: isMobile ? [
                            'transparent',
                            'transparent',
                            'transparent'
                        ] : [
                            'rgba(34, 197, 94, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(236, 72, 153, 0.8)'
                        ],
                        borderWidth: isMobile ? 0 : 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    devicePixelRatio: 1,
                    plugins: {
                        legend: {
                            display: !isMobile, // ẩn legend mặc định trên mobile
                            position: 'left',
                            labels: {
                                usePointStyle: true,
                                padding: 16,
                                font: {
                                    size: 14
                                }
                            },
                            onClick: function(event, legendItem) {

                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const value = context.parsed;
                                    return value + ' buổi';
                                }
                            }
                        },
                        title: { // Tiêu đề chart
                            display: !isMobile,
                            text: 'Thống kê điểm danh',
                            color: '#be185d',
                            font: {
                                size: 20,
                                weight: 'bold'
                            },
                            padding: {
                                top: 10,
                                bottom: 30
                            }
                        }
                    },
                    elements: {
                        arc: {
                            borderWidth: isMobile ? 0 : 2,
                            hoverBorderWidth: isMobile ? 0 : 2,
                            hoverBorderColor: isMobile ? 'transparent' : 'rgba(0,0,0,0.1)'
                        }
                    },
                    layout: {
                        padding: {
                            top: isMobile ? 8 : 20,
                            bottom: isMobile ? 8 : 20,
                            left: isMobile ? 8 : 20,
                            right: isMobile ? 8 : 20
                        }
                    },
                    animation: { // Hiệu ứng load chart
                        duration: 2000,
                        easing: 'easeInOutQuart'
                    }
                }
            });
        }

        function initChartOnce() {
            if (window.chartInitialized) return;
            window.chartInitialized = true;
            setTimeout(renderAttendanceChart, 100);
        }

        document.addEventListener('DOMContentLoaded', initChartOnce);
        document.addEventListener('livewire:load', initChartOnce);
        document.addEventListener('livewire:navigated', initChartOnce);
        document.addEventListener('livewire:init', initChartOnce);

        // Fallback
        setTimeout(() => {
            if (!attendanceChartInstance) {
                console.log('Fallback: Attempting to render chart...');
                renderAttendanceChart();
            }
        }, 1000);

        window.addEventListener('resize', scheduleRerender);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/dashboard/chart-attendance.blade.php ENDPATH**/ ?>