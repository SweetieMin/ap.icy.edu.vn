<div>

    <div class="chart-container">
        <canvas id="attendanceChart"></canvas>
    </div>


</div>

<?php $__env->startPush('styles'); ?>
    <style>
        .chart-container {
            width: 100%;
            height: calc(40vw);
            /* co giãn theo viewport */
            max-height: 530px;
            /* desktop lớn nhất */
            min-height: 160px;
            /* mobile nhỏ */
            margin: auto;
        }

        /* Tablet/Laptop nhỏ có sidebar */
        @media (min-width: 1024px) {
            .chart-container {
                max-height: 340px;
                /* bạn đo được */
            }
        }

        /* Laptop 1280px */
        @media (min-width: 1280px) {
            .chart-container {
                max-height: 153px;
                /* bạn đo được */
            }
        }

        /* Laptop 1536px */
        @media (min-width: 1536px) {
            .chart-container {
                max-height: 13vw;
                /* bạn đo được */
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        let attendanceChartInstance = null;

        function renderAttendanceChart() {
            const canvas = document.getElementById('attendanceChart');
            if (!canvas) return;

            if (attendanceChartInstance) {
                attendanceChartInstance.destroy();
            }

            attendanceChartInstance = new Chart(canvas, {
                type: 'pie',
                data: {
                    labels: <?php echo json_encode($labels, 15, 512) ?>,
                    datasets: [{
                        label: 'Điểm danh',
                        data: <?php echo json_encode($data, 15, 512) ?>,
                        backgroundColor: [
                            'rgba(34, 197, 94, 0.9)',
                            'rgba(239, 68, 68, 0.9)',
                            'rgba(251, 207, 232, 0.8)'
                        ],
                        borderColor: [
                            'rgba(34, 197, 94, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(236, 72, 153, 0.8)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'left',
                            labels: {
                                usePointStyle: true,
                                padding: 16,
                                font: { size: 14 }
                            },
                            onClick: function(event, legendItem) {
                                
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.parsed + ' buổi';
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Thống kê điểm danh',
                            color: '#be185d',
                            font: { size: 20, weight: 'bold' },
                            padding: { top: 10, bottom: 30 }
                        }
                    },
                    animation: {
                        duration: 2000,
                        easing: 'easeInOutQuart'
                    }
                },
            });
        }

        document.addEventListener('DOMContentLoaded', renderAttendanceChart);
        document.addEventListener('livewire:navigated', renderAttendanceChart);
        document.addEventListener('livewire:init', renderAttendanceChart);
        document.addEventListener('livewire:load', () => {
            setTimeout(renderAttendanceChart, 500);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/dashboard/chart-attendance.blade.php ENDPATH**/ ?>