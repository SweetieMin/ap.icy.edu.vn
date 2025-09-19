{{-- Modal thêm sự kiện --}}
<flux:modal wire:ignore.self name="add-event" class="md:w-150">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Thêm sự kiện mới</flux:heading>
            <flux:text class="mt-2">
                @if ($selectedDate ?? false)
                    Ngày: {{ $selectedDate->format('d/m/Y') }}
                @endif
            </flux:text>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <div class="form-group">
                <flux:text class="text-sm font-medium text-gray-700 mb-2">Chọn loại sự kiện</flux:text>
                <flux:select wire:model="selectedEventType" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                    <option value="">-- Chọn loại sự kiện --</option>
                    @foreach ($kindOfEvents as $key => $value)
                        <flux:select.option value="{{ $value }}"> {{ $value }}</flux:select.option>
                    @endforeach
                </flux:select>

                @error('selectedEventType')
                    <flux:text class="text-red-500 text-sm">{{ $message }}</flux:text>
                @enderror

            </div>


            <div class="form-group">
                <flux:text class="text-sm font-medium text-gray-700 mb-2">Chọn lớp học</flux:text>
                <flux:select wire:model="selectedCourseId"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                    <option value="">-- Chọn lớp học --</option>
                    @foreach ($availableCourses as $course)
                        <flux:select.option value="{{ $course['id'] }}"> {{ $course['location_name'] }} -
                            {{ $course['season_code'] }} - {{ $course['name'] }}</flux:select.option>
                    @endforeach
                </flux:select>

                @error('selectedCourseId')
                    <flux:text class="text-red-500 text-sm">{{ $message }}</flux:text>
                @enderror

            </div>
        </div>

        <div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <flux:input label="Từ giờ" wire:model="startTime" type="time" class="w-full " />
                </div>
                <div>

                    <flux:input label="Đến giờ" wire:model="endTime" type="time" class="w-full " />

                </div>
            </div>
        </div>

        <flux:input wire:model="roomName" label="Tên phòng học" placeholder="Nhập tên phòng học..." />
        @error('roomName')
            <flux:text class="text-red-500 text-sm">{{ $message }}</flux:text>
        @enderror

        <flux:textarea wire:model="eventDescription" label="Mô tả" placeholder="Nhập mô tả sự kiện (tùy chọn)..."
            rows="3" />
        @error('eventDescription')
            <flux:text class="text-red-500 text-sm">{{ $message }}</flux:text>
        @enderror

        <div class="flex space-x-3">
            <flux:button wire:click="{{ $isEdit ? 'updateEvent' : 'saveEvent' }}" variant="primary" class="flex-1">
                {{ $isEdit ? 'Cập nhật' : 'Thêm' }} sự kiện
            </flux:button>
            @if ($isEdit)
                <flux:button wire:click="deleteEvent" variant="danger">
                    Xóa sự kiện
                </flux:button>
            @endif
            <flux:button wire:click="closeModal" variant="ghost">
                Hủy
            </flux:button>
        </div>
    </div>
</flux:modal>
