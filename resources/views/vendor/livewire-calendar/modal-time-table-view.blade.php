{{-- Modal xem thông tin lịch học --}}
<flux:modal wire:ignore.self name="view-event" class="md:w-150">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">{{ $eventName ?? '' }} {{ $courseName ?? '' }}</flux:heading>
        </div>

        <div
            class="rounded-2xl border border-gray-200 {{ $eventColor ?? 'bg-white' }} p-5 shadow-sm dark:border-gray-800 dark:{{ $eventColor ?? 'bg-stone-950' }}">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                {{-- Ngày học --}}
                <div class="rounded-xl border bg-white border-gray-200 p-4 dark:border-gray-800">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Ngày học</p>
                    <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100">
                        @if (!empty($selectedDate))
                            {{ $selectedDate instanceof \Carbon\Carbon ? $selectedDate->format('d/m/Y') : (is_string($selectedDate) ? \Carbon\Carbon::parse($selectedDate)->format('d/m/Y') : now()->format('d/m/Y')) }}
                        @else
                            {{ now()->format('d/m/Y') }}
                        @endif
                    </p>
                </div>

                {{-- Giờ học --}}
                <div class="rounded-xl border bg-white border-gray-200 p-4 dark:border-gray-800">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Giờ học</p>
                    <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100">
                        {{ $startTime ?? '--:--' }} - {{ $endTime ?? '--:--' }}
                    </p>
                </div>

                {{-- Phòng học --}}
                <div class="rounded-xl border bg-white border-gray-200 p-4 dark:border-gray-800 sm:col-span-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Phòng học</p>
                    <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100">
                        {{ $roomName ?? 'Chưa có' }}
                    </p>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-2">
            <flux:modal.close>
                <flux:button variant="ghost"
                    class="px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300">
                    Đóng</flux:button>
            </flux:modal.close>
        </div>
    </div>
</flux:modal>
