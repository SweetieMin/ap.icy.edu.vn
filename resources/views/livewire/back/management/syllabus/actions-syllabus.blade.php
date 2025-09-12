<div>
    <!-- Modal Trigger Button -->


    <!-- Create and Update Syllabus Modal -->
    <flux:modal :dismissible="false" name="modal-syllabus" class="md:w-900">
        <form wire:submit='{{ $isEditing ? "updateSyllabus" : "createSyllabus" }}' class="space-y-6">
            <div>
                <flux:heading class="font-bold" size="lg">
                    {{ $isEditing ? 'Cập nhật Syllabus' : 'Tạo mới Syllabus' }}
                </flux:heading>
                <flux:text class="mt-2">
                    {{ $isEditing ? 'Chỉnh sửa thông tin syllabus' : 'Thêm mới syllabus' }}.
                </flux:text>
            </div>

            @if ($isEditing)
                <input type="text" wire:model='syllabusId' hidden />
            @endif

            <div class="form-group">
                <flux:select 
                    wire:model="subject_id" 
                    label="Môn học"
                    placeholder="Chọn môn học"
                >
                    <option value="">Chọn môn học</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">
                            {{ $subject->name }} ({{ $subject->code }})
                        </option>
                    @endforeach
                </flux:select>
            </div>

            <div class="form-group">
                <flux:input 
                    wire:model="lesson_number" 
                    label="Số bài học"
                    type="number"
                    min="1"
                    placeholder="1, 2, 3..."
                />
            </div>

            <div class="form-group">
                <flux:textarea 
                    wire:model="content" 
                    label="Nội dung"
                    rows="4"
                    placeholder="Nhập nội dung bài học..."
                />
            </div>

            <div class="form-group">
                <flux:textarea 
                    wire:model="vocabulary" 
                    label="Từ vựng"
                    rows="3"
                    placeholder="Nhập từ vựng..."
                />
            </div>

            <div class="form-group">
                <flux:textarea 
                    wire:model="grammar" 
                    label="Ngữ pháp"
                    rows="3"
                    placeholder="Nhập ngữ pháp..."
                />
            </div>

            <div class="form-group">
                <flux:textarea 
                    wire:model="assignment" 
                    label="Bài tập"
                    rows="3"
                    placeholder="Nhập bài tập..."
                />
            </div>

            <div class="form-group">
                <flux:textarea 
                    wire:model="CLO" 
                    label="Mục tiêu (CLO)"
                    rows="3"
                    placeholder="Nhập mục tiêu học tập..."
                />
            </div>

            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" class="cursor-pointer" variant="primary">
                    {{ $isEditing ? 'Cập nhật' : 'Thêm mới' }}
                </flux:button>
            </div>
        </form>
    </flux:modal>

       {{-- Delete Location Modal --}}
       <flux:modal name="delete-syllabus" class="md:w-[500px]">
        <div
            class="bg-gradient-to-br from-red-50 via-white to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 rounded-2xl">
            <!-- Header với gradient background -->
            <div class="relative px-8 py-6 bg-gradient-to-r from-red-500 via-pink-500 to-red-600 rounded-t-2xl">
                <div class="absolute inset-0 bg-black/10 rounded-t-2xl"></div>
                <div class="relative flex items-center">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" clip-rule="evenodd">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <flux:heading class="font-bold text-white text-xl">
                            🗑️ Xác nhận xóa Syllabus
                        </flux:heading>
                        <flux:text class="mt-1 text-red-100">
                            Hành động này không thể hoàn tác
                        </flux:text>
                    </div>
                </div>
            </div>

            <form wire:submit='deleteSyllabusConfirm' class="px-8 py-6 space-y-6">
                <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-red-800 dark:text-red-200">
                                Cảnh báo xóa dữ liệu
                            </h3>
                            <div class="mt-2 text-red-700 dark:text-red-300">
                                <p class="mb-2">Bạn có chắc chắn muốn xóa Syllabus này không?</p>
                                <ul class="list-disc list-inside space-y-1 text-sm">
                                    <li>Tất cả thông tin Syllabus sẽ bị xóa vĩnh viễn</li>
                                    <li>Các khóa học và giáo trình liên quan sẽ bị ảnh hưởng</li>
                                    <li>Dữ liệu học tập của học viên có thể bị mất</li>
                                    <li>Thứ tự sắp xếp Syllabus sẽ bị thay đổi</li>
                                    <li>Hành động này không thể hoàn tác</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <flux:modal.close>
                        <flux:button variant="ghost"
                            class="px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300">
                            ↩️ Hủy bỏ
                        </flux:button>
                    </flux:modal.close>

                    <flux:button type="submit" variant="danger"
                        class="cursor-pointer px-8 py-2 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        🗑️ Xóa vĩnh viễn
                    </flux:button>
                </div>
            </form>
        </div>
    </flux:modal>


</div>
