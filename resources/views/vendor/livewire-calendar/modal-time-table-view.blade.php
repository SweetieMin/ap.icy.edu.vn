{{-- Modal xem thông tin lịch học --}}
<flux:modal wire:ignore.self name="view-event" class="md:w-150">
    <div class="space-y-6">
        {{-- Title --}}
        <div>
            <flux:heading size="lg" class="font-semibold">{{ $eventName ?? 'Lịch học' }} {{ $courseName ?? '' }}</flux:heading>
        </div>

        {{-- Card: Blue container with 2 rows of white chips --}}
        <div class="rounded-2xl border border-blue-200 bg-blue-600/90 p-4 shadow-sm dark:border-blue-900/40 dark:bg-blue-700/80">
            <div class="space-y-4">
                {{-- Row 1: Ngày + Thời gian --}}
                <div class="grid grid-cols-2 gap-4">
                    {{-- Ngày --}}
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Ngày</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            @if (!empty($selectedDate))
                                {{ $selectedDate instanceof \Carbon\Carbon ? $selectedDate->format('d/m/Y') : (is_string($selectedDate) ? \Carbon\Carbon::parse($selectedDate)->format('d/m/Y') : now()->format('d/m/Y')) }}
                            @else
                                {{ now()->format('d/m/Y') }}
                            @endif
                        </p>
                    </div>

                    {{-- Thời gian --}}
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Thời gian</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            {{ $startTime ?? '--:--' }} - {{ $endTime ?? '--:--' }}
                        </p>
                    </div>
                </div>

                {{-- Row 2: Địa điểm + Giáo viên --}}
                <div class="grid grid-cols-2 gap-4">
                    {{-- Địa điểm --}}
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Địa điểm</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            {{ $roomName ?? 'Chưa có' }}
                        </p>
                    </div>

                    {{-- Giáo viên --}}
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Giáo viên</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            {{ $teacherName ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="flex justify-end">
            <flux:modal.close>
                <flux:button variant="ghost" class="px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300">
                    Đóng
                </flux:button>
            </flux:modal.close>
        </div>
    </div>
</flux:modal>
