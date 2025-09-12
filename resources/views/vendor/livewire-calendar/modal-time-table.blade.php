{{-- Modal thêm sự kiện --}}
<flux:modal name="add-event" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Thêm sự kiện mới</flux:heading>
            <flux:text class="mt-2">
                @if($selectedDate ?? false)
                    Ngày: {{ $selectedDate->format('d/m/Y') }}
                @endif
            </flux:text>
        </div>

        <flux:input 
            wire:model="eventTitle" 
            label="Tiêu đề sự kiện" 
            placeholder="Nhập tiêu đề sự kiện..." 
        />


        <flux:textarea 
            wire:model="eventDescription" 
            label="Mô tả" 
            placeholder="Nhập mô tả sự kiện (tùy chọn)..." 
            rows="3"
        />

        <div>
            <flux:text class="text-sm font-medium text-gray-700 mb-2">Màu sắc</flux:text>
            <div class="flex space-x-2">
                <button 
                    wire:click="$set('eventColor', 'bg-pink-500')"
                    class="w-8 h-8 rounded-full bg-pink-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-pink-500' ? 'border-gray-800' : 'border-gray-300' }}"
                ></button>
                <button 
                    wire:click="$set('eventColor', 'bg-blue-500')"
                    class="w-8 h-8 rounded-full bg-blue-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-blue-500' ? 'border-gray-800' : 'border-gray-300' }}"
                ></button>
                <button 
                    wire:click="$set('eventColor', 'bg-green-500')"
                    class="w-8 h-8 rounded-full bg-green-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-green-500' ? 'border-gray-800' : 'border-gray-300' }}"
                ></button>
                <button 
                    wire:click="$set('eventColor', 'bg-yellow-500')"
                    class="w-8 h-8 rounded-full bg-yellow-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-yellow-500' ? 'border-gray-800' : 'border-gray-300' }}"
                ></button>
                <button 
                    wire:click="$set('eventColor', 'bg-purple-500')"
                    class="w-8 h-8 rounded-full bg-purple-500 border-2 {{ ($eventColor ?? 'bg-pink-500') === 'bg-purple-500' ? 'border-gray-800' : 'border-gray-300' }}"
                ></button>
            </div>
        </div>

        <div class="flex space-x-3">
            <flux:button 
                wire:click="saveEvent" 
                variant="primary"
                class="flex-1"
            >
                Thêm sự kiện
            </flux:button>
            <flux:button 
                wire:click="closeModal" 
                variant="ghost"
            >
                Hủy
            </flux:button>
        </div>
    </div>
</flux:modal>