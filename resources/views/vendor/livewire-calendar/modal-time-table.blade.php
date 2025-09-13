{{-- Modal thêm sự kiện --}}
<flux:modal name="add-event" class="md:w-150">
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
                <flux:select wire:model="selectedCourseId"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                    <option value="">-- Chọn loại sự kiện --</option>
                    @foreach ($kindOfEvents as $key => $value)
                        <flux:select.option value="{{ $key }}"> {{ $value }}</flux:select.option>
                    @endforeach
                </flux:select>

                @error('selectedCourseId')
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

        <div>
            <flux:text class="text-sm font-medium text-gray-700 mb-2">Màu sắc</flux:text>
            <div class="flex space-x-2">
                <button wire:click="$set('eventColor', 'bg-pink-500')"
                    class="w-8 h-8 rounded-full bg-pink-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-pink-500' ? 'border-gray-800' : 'border-gray-300' }}"></button>
                <button wire:click="$set('eventColor', 'bg-blue-500')"
                    class="w-8 h-8 rounded-full bg-blue-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-blue-500' ? 'border-gray-800' : 'border-gray-300' }}"></button>
                <button wire:click="$set('eventColor', 'bg-green-500')"
                    class="w-8 h-8 rounded-full bg-green-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-green-500' ? 'border-gray-800' : 'border-gray-300' }}"></button>
                <button wire:click="$set('eventColor', 'bg-yellow-500')"
                    class="w-8 h-8 rounded-full bg-yellow-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-yellow-500' ? 'border-gray-800' : 'border-gray-300' }}"></button>
                <button wire:click="$set('eventColor', 'bg-purple-500')"
                    class="w-8 h-8 rounded-full bg-purple-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-purple-500' ? 'border-gray-800' : 'border-gray-300' }}"></button>
            </div>
        </div>

        <div class="flex space-x-3">
            <flux:button wire:click="saveEvent" variant="primary" class="flex-1">
                Thêm sự kiện
            </flux:button>
            <flux:button wire:click="closeModal" variant="ghost">
                Hủy
            </flux:button>
        </div>
    </div>
</flux:modal>
