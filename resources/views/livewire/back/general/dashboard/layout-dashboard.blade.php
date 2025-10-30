<div>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class=" grid auto-rows-min gap-4 xl:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
               
                    <video autoplay playsinline preload="auto">
                        <source src="{{ asset('INTRO.mp4') }}" type="video/mp4">
                    </video>
        
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
                <video autoplay muted playsinline loop class="w-full h-full " preload="auto">
                    <source src="{{ asset('PROGRAM.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
                @if ($isShowChartAttendance)
                    <livewire:back.general.dashboard.chart-attendance />
                @endif
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-pink-400 dark:border-pink-700">
            <livewire:back.general.dashboard.time-table />
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', () => {
            document.querySelectorAll('video[autoplay]').forEach(video => {
                video.play().catch(() => {
                    video.play();
                });
            });
        });
    </script>
@endpush
