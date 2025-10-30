<div>
    <flux:modal :dismissible="false" name="modal-service-student-care"
        class="w-full max-w-[90vw] md:max-w-[720px] lg:max-w-[800px] max-h-[90vh] overflow-y-auto">

        <!-- Header -->
        <div class="px-8 py-6 border-b border-gray-200 dark:border-gray-700">
            <flux:heading class="font-bold text-gray-800 dark:text-gray-200 text-xl">
                    Thêm mới lịch sử chăm sóc học viên
            </flux:heading>
            <flux:text class="mt-1 text-gray-600 dark:text-gray-400">
                Thêm mới lịch sử chăm sóc học viên vào hệ thống quản lý
            </flux:text>
        </div>

        <form wire:submit.prevent='createStudentCare' class="px-8 py-6 space-y-8">

            {{-- Section heading giống cấu trúc staff --}}
            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 border border-gray-200 dark:border-gray-700">
                        <flux:text class="text-sm font-medium text-gray-600 dark:text-gray-400">Họ và tên</flux:text>
                        <div class="mt-1 text-gray-900 dark:text-white font-semibold">{{ $studentName }}</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 border border-gray-200 dark:border-gray-700">
                        <flux:text class="text-sm font-medium text-gray-600 dark:text-gray-400">Lớp</flux:text>
                        <div class="mt-1 text-gray-900 dark:text-white font-semibold">{{ $studentCourseName }}</div>
                    </div>
                </div>
            </div>

            {{-- Thông tin chăm sóc (không có attendance_id trong form) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Trạng thái --}}
                <div class="form-group">
                    <flux:select wire:model="status" label="Trạng thái liên hệ" placeholder="Chọn trạng thái">
                        <flux:select.option value="no_answer">Không nghe máy</flux:select.option>
                        <flux:select.option value="success">Đã liên hệ</flux:select.option>
                    </flux:select>
                </div>

                {{-- Người thực hiện --}}
                <div class="form-group">
                    <flux:input label="Người thực hiện" value="{{ auth()->user()->name }}" disabled />
                </div>

                {{-- Phản hồi phụ huynh --}}
                <div class="form-group md:col-span-2">
                    <flux:textarea wire:model="parent_response" label="Phản hồi của phụ huynh / Học viên" rows="4" placeholder="Nhập nội dung phản hồi." />

                </div>

                {{-- Ghi chú --}}
                <div class="form-group md:col-span-2">
                    <flux:textarea wire:model="note" label="(Dành cho nội bộ) ghi chú thêm chỉ ghi khi không thể liên hệ được. Và cần phải liên hệ lại sau" rows="3" placeholder="Nhập ghi chú nội bộ (nếu cần)" />
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="flex justify-end items-center pt-6 border-t border-gray-200 dark:border-gray-700">

                <div class="flex space-x-3">
                    <flux:modal.close>
                        <flux:button variant="ghost"
                            class="px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300">
                            ❌ Hủy
                        </flux:button>
                    </flux:modal.close>

                    <flux:button type="submit" variant="primary"
                        class="cursor-pointer px-8 py-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        ➕ Thêm mới
                    </flux:button>
                </div>
            </div>
        </form>

    </flux:modal>
</div>
