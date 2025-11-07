<div>
    <flux:modal name="import-syllabus"
        class=" w-full max-w-[90vw] md:max-w-[720px] lg:max-w-[1800px] max-h-[90vh] overflow-y-auto ">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Import Syllabus</flux:heading>
                <flux:text class="mt-2">Import syllabus information into the system.</flux:text>
            </div>

            <div class="flex gap-2">
                <div class="form-group w-1/2">
                    <flux:select wire:model="subject_id" variant="listbox" searchable clearable
                        placeholder="Choose industries..." label="Upload files">
                        @foreach ($subjects as $subject)
                            <flux:select.option value="{{ $subject->id }}">{{ $subject->name }} ({{ $subject->code }})
                            </flux:select.option>
                        @endforeach
                    </flux:select>
                </div>
                <div class="form-group w-1/2">
                    <flux:file-upload wire:model="excel_file" label="Upload files" accept=".xlsx">
                        <flux:file-upload.dropzone heading="Drop files or click to browse" text="File Excel type .xlsx"
                            with-progress inline />
                    </flux:file-upload>

                </div>
            </div>

            @if ($preview)
                <div class="mt-4 overflow-x-auto">
                    <table class="w-full text-sm border">
                        <thead class="bg-gray-100">
                            <tr>

                                <th class="border px-2 py-1">Lesson</th>
                                <th class="border px-2 py-1">Content</th>
                                <th class="border px-2 py-1">Vocabulary</th>
                                <th class="border px-2 py-1">Grammar</th>
                                <th class="border px-2 py-1">Assignment</th>
                                <th class="border px-2 py-1">CLO</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($preview as $row)
                                <tr>
                                    @foreach ($row as $col)
                                        <td class="border px-2 py-1">{{ $col }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <flux:button wire:click="save" class="mt-3" variant="primary">
                    Import vào hệ thống
                </flux:button>
            @endif


        </div>
    </flux:modal>

    <!-- Create and Update Syllabus Modal -->
    <flux:modal :dismissible="false" name="modal-syllabus" class="md:w-900">
        <form wire:submit='{{ $isEditing ? 'updateSyllabus' : 'createSyllabus' }}' class="space-y-6">
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
                <flux:select wire:model="subject_id" label="Môn học" placeholder="Chọn môn học">
                    <option value="">Chọn môn học</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">
                            {{ $subject->name }} ({{ $subject->code }})
                        </option>
                    @endforeach
                </flux:select>
            </div>

            <div class="form-group">
                <flux:input wire:model="lesson_number" label="Số bài học" type="number" min="1"
                    placeholder="1, 2, 3..." />
            </div>

            <div class="form-group">
                <flux:textarea wire:model="content" label="Nội dung" rows="4"
                    placeholder="Nhập nội dung bài học..." />
            </div>

            <div class="form-group">
                <flux:textarea wire:model="vocabulary" label="Từ vựng" rows="3" placeholder="Nhập từ vựng..." />
            </div>

            <div class="form-group">
                <flux:textarea wire:model="grammar" label="Ngữ pháp" rows="3" placeholder="Nhập ngữ pháp..." />
            </div>

            <div class="form-group">
                <flux:textarea wire:model="assignment" label="Bài tập" rows="3" placeholder="Nhập bài tập..." />
            </div>

            <div class="form-group">
                <flux:textarea wire:model="CLO" label="Mục tiêu (CLO)/Url bài kiểm tra" rows="3"
                    placeholder="Nhập mục tiêu học tập hoặc url bài kiểm tra..." />
            </div>

            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" class="cursor-pointer" variant="primary">
                    {{ $isEditing ? 'Cập nhật' : 'Thêm mới' }}
                </flux:button>
            </div>
        </form>
    </flux:modal>

</div>
