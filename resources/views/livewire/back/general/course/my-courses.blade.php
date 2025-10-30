<div>
    <div class="theme-table-pink">
        {{-- Desktop Table View --}}
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th class="text-center">Mùa</th>

                        <th class="text-center">Lớp</th>
                        <th class="text-center">Môn</th>
                        <th class="text-center">Danh sách học viên</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $i => $course)
                        <tr wire:key="course-desktop-{{ $course->id }}">
                            <td class="whitespace-nowrap font-medium text-center">
                                {{ $i + 1 }}
                            </td>
                            <td class="whitespace-nowrap font-medium text-center">
                                {{ $course->season->name }}
                            </td>
                            <td class="whitespace-nowrap font-medium text-center">
                                {{ $course->name }}
                            </td>
                            <td class="whitespace-nowrap font-medium text-center">
                                {{ $course->subject->name ?? 'Chưa xác định' }}
                            </td>

                            <td class="whitespace-nowrap font-medium text-center">
                                <flux:button variant="primary" icon="user-group" color="blue"
                                    wire:click="showClassList({{ $course->id }})">Xem danh sách</flux:button>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="5" class="px-6 py-8">
                                <div class="empty-state flex flex-col items-center">
                                    <flux:icon.academic-cap class="w-8 h-8 mb-2 text-gray-400" />
                                    <div class="text-sm text-gray-500">Bạn chưa có lớp nào trong season hiện tại</div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Mobile Card View --}}
        <div class="md:hidden space-y-3">
            @forelse ($courses as $i => $course)
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                    wire:key="course-mobile-{{ $course->id }}">

                    {{-- Main Row --}}
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <flux:icon.academic-cap class="w-4 h-4 text-purple-600" />
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">{{ $course->subject->name ?? 'Chưa xác định' }}
                                </div>
                                <div class="text-sm text-gray-500">{{ $course->name }}</div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span class="text-sm font-medium text-gray-600">#{{ $i + 1 }}</span>

                            <button @click="expanded = !expanded" class="p-2 rounded-full hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-400" :class="{ 'rotate-180': expanded }" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Expanded Details --}}
                    <div x-show="expanded" class="border-t border-gray-100 bg-gray-50">

                        <div class="p-4 space-y-3">
                            {{-- STT --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">STT:</span>
                                <span class="text-sm text-gray-900">{{ $i + 1 }}</span>
                            </div>

                            {{-- Mùa học --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Mùa học:</span>
                                <span class="text-sm text-gray-900">{{ $course->season->name }}</span>
                            </div>

                            {{-- Môn học --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Môn học:</span>
                                <span
                                    class="text-sm text-gray-900">{{ $course->subject->name ?? 'Chưa xác định' }}</span>
                            </div>

                            {{-- Lớp --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Lớp:</span>
                                <span class="text-sm text-gray-900">{{ $course->name }}</span>
                            </div>

                            {{-- Actions --}}
                            <div class="pt-3 border-t border-gray-200">
                                <button wire:click="showClassList({{ $course->id }})"
                                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                    <flux:icon.user-group class="w-4 h-4" />
                                    <span>Xem danh sách học viên</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <flux:icon.academic-cap class="w-8 h-8 mb-2 text-gray-400" />
                        <div class="text-sm text-gray-500">Bạn chưa có lớp nào trong season hiện tại</div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

</div>
