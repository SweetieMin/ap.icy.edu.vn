<div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
        <div class="flex items-center space-x-2 mb-4">
            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                <flux:icon.chart-pie class="w-4 h-4 text-blue-600 dark:text-blue-400" />
            </div>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Thống kê điểm danh</h2>
        </div>
        <div style="height: 200px; position: relative;">
            <canvas id="attendanceChart"></canvas>
        </div>
    </div>
</div>

@push('scripts')
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
                    labels: @json($labels),
                    datasets: [{
                        label: 'Điểm danh',
                        data: @json($data),
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
@endpush

