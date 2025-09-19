<div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-3 sm:p-4 w-full overflow-hidden">
        <div class="hidden sm:flex items-center gap-2">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-lg flex items-center justify-center">
                <flux:icon.chart-pie class="w-4 h-4 text-blue-600 dark:text-blue-400" />
            </div>
            <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Thống kê điểm danh</h2>
        </div>

        <div class="relative h-45 sm:h-48 md:h-52 lg:h-56 xl:h-60 overflow-hidden">
            <canvas id="attendanceChart" class="block w-full h-full" style="width:100% !important;height:100% !important;border:0 !important;outline:0 !important;box-shadow:none !important;background-color:transparent !important;"></canvas>
        </div>

        <!-- Legend tuỳ chỉnh cho mobile -->
        <div class="mt-3 sm:hidden">
            <div class="flex flex-wrap gap-3 text-xs">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full" style="background-color: rgba(34, 197, 94, 0.9)"></span>
                    <span class="text-gray-700 dark:text-gray-300">Có mặt: {{ $present }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full" style="background-color: rgba(239, 68, 68, 0.9)"></span>
                    <span class="text-gray-700 dark:text-gray-300">Vắng mặt: {{ $absent }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full" style="background-color: rgba(255, 255, 0, 0.5)"></span>
                    <span class="text-gray-700 dark:text-gray-300">Tổng số buổi: {{ $total }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let attendanceChartInstance = null;

        function renderAttendanceChart() {
            const canvas = document.getElementById('attendanceChart');
            if (!canvas) return;

            // Destroy instance cũ nếu có để tránh memory leak
            if (attendanceChartInstance) {
                attendanceChartInstance.destroy();
            }

            const isMobile = window.matchMedia('(max-width: 639.98px)').matches;

            attendanceChartInstance = new Chart(canvas, {
                type: 'pie',
                data: {
                    labels: @json($labels),
                    datasets: [{
                        label: 'Điểm danh',
                        data: @json($data),
                        backgroundColor: [
                            'rgba(34, 197, 94, 0.9)', // present
                            'rgba(239, 68, 68, 0.9)', // absent
                            'rgba(255, 255, 0, 0.5)'  // total
                        ],
                        borderColor: isMobile ? [
                            'transparent',
                            'transparent',
                            'transparent'
                        ] : [
                            'rgba(34, 197, 94, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(255, 163, 175, 0.5)'
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
                                font: { size: 14 }
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
                    }
                }
            });
        }

        // Khởi tạo và handle resize nhẹ nhàng
        let resizeTimer;
        function scheduleRerender() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(renderAttendanceChart, 200);
        }

        document.addEventListener('livewire:load', () => requestAnimationFrame(renderAttendanceChart));
        document.addEventListener('livewire:navigated', () => requestAnimationFrame(renderAttendanceChart));
        window.addEventListener('resize', scheduleRerender);
    </script>
@endpush