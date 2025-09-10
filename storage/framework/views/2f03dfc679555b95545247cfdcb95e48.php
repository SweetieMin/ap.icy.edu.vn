<div class="relative mb-4 w-full">
    
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal8318632d5261647b706c011e29964ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8318632d5261647b706c011e29964ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-open','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $attributes = $__attributesOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__attributesOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $component = $__componentOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__componentOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Syllabus</h1>
                        <p class="header-subtitle">Quản lý chương trình học chi tiết</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Syllabus</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span><?php echo e($syllabi->total() ?? 0); ?> syllabus</span>
                </div>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.management.syllabus.actions-syllabus', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1370343368-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>
    </div>


    <!-- Search and Filter Section -->
    <div class="mt-6">
        <div class="theme-card-pink mb-6">

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Search -->
                <div>
                    <label for="search" class="card-label">Tìm kiếm</label>
                    <input 
                        wire:model.live="search" 
                        type="text" 
                        id="search"
                        placeholder="Tìm theo bài học, nội dung, mục tiêu..."
                        class="card-input"
                    >
                </div>
                
                <!-- Subject Filter -->
                <div>
                    <label for="subjectFilter" class="card-label">Lọc theo môn học</label>
                    <select 
                        wire:model.live="subjectFilter" 
                        id="subjectFilter"
                        class="card-input"
                    >
                        <option value="">Tất cả môn học</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?> (<?php echo e($subject->code); ?>)</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
                
                <!-- Per Page -->
                <div>
                    <label for="perPage" class="card-label">Số dòng mỗi trang</label>
                    <select 
                        wire:model.live="perPage" 
                        id="perPage"
                        class="card-input"
                    >
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Syllabus Table -->
    <div class="theme-table-pink">
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center w-16">STT</th>
                        <th class="text-left">Môn học</th>
                        <th class="text-left">Bài học</th>
                        <th class="text-left">Nội dung</th>
                        <th class="text-left">Mục tiêu</th>
                        <th class="text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $syllabi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syllabus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="table-row">
                            <td class="table-cell text-center">
                                <?php echo e($syllabus->ordering); ?>

                            </td>
                            <td class="table-cell">
                                <div class="flex flex-col">
                                    <span class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                        <?php echo e($syllabus->subject->name); ?>

                                    </span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">
                                        <?php echo e($syllabus->subject->code); ?>

                                        <!--[if BLOCK]><![endif]--><?php if($syllabus->subject->program): ?>
                                            - <?php echo e($syllabus->subject->program->name); ?>

                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </span>
                                </div>
                            </td>
                            <td class="table-cell">
                                <?php echo e($syllabus->lesson_number); ?>

                            </td>
                            <td class="table-cell">
                                <div class="max-w-xs truncate" title="<?php echo e($syllabus->content); ?>">
                                    <?php echo e(Str::limit($syllabus->content, 100)); ?>

                                </div>
                            </td>
                            <td class="table-cell">
                                <div class="max-w-xs truncate" title="<?php echo e($syllabus->objectives); ?>">
                                    <?php echo e(Str::limit($syllabus->objectives, 100)); ?>

                                </div>
                            </td>
                            <td class="table-cell text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','icon' => 'eye','title' => 'Xem chi tiết','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','icon' => 'eye','title' => 'Xem chi tiết','class' => 'cursor-pointer']); ?>
                                        Xem
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','icon' => 'square-pen','wire:click' => '$dispatch(\'edit-syllabus\', { syllabusId: '.e($syllabus->id).' })','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','icon' => 'square-pen','wire:click' => '$dispatch(\'edit-syllabus\', { syllabusId: '.e($syllabus->id).' })','class' => 'cursor-pointer']); ?>
                                        Sửa
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'danger','icon' => 'trash','wire:click' => 'deleteSyllabus('.e($syllabus->id).')','wire:confirm' => 'Bạn có chắc chắn muốn xóa syllabus này?','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'danger','icon' => 'trash','wire:click' => 'deleteSyllabus('.e($syllabus->id).')','wire:confirm' => 'Bạn có chắc chắn muốn xóa syllabus này?','class' => 'cursor-pointer']); ?>
                                        Xóa
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="table-cell">
                                <div class="empty-state flex flex-col items-center">
                                    <?php if (isset($component)) { $__componentOriginal8318632d5261647b706c011e29964ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8318632d5261647b706c011e29964ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-open','data' => ['class' => 'w-8 h-8 mb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $attributes = $__attributesOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__attributesOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $component = $__componentOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__componentOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
                                    <div class="text-sm">Không có syllabus nào</div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <!--[if BLOCK]><![endif]--><?php if($syllabi->hasPages()): ?>
            <div class="pagination-container">
                <?php echo e($syllabi->links()); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <!-- Summary -->
    <div class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
        Hiển thị <?php echo e($syllabi->firstItem() ?? 0); ?> đến <?php echo e($syllabi->lastItem() ?? 0); ?> trong tổng số <?php echo e($syllabi->total()); ?> syllabus
    </div>

    <!-- Flash Messages -->
    <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
        <div class="fixed top-4 right-4 z-50">
            <div class="bg-green-100 dark:bg-green-900/20 border border-green-400 dark:border-green-500 text-green-700 dark:text-green-400 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline"><?php echo e(session('message')); ?></span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/management/syllabus/syllabi.blade.php ENDPATH**/ ?>