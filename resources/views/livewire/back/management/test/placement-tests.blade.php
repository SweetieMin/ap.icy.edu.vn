<div>
    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.folder class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">File Manager</h1>
                        <p class="header-subtitle">Quản lý file và thư mục</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>File Manager</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-2">
                <button wire:click="$set('showCreateFolderModal', true)" class="theme-header-pink header-button">
                    <flux:icon.folder-plus class="size-4" />
                    <span>Tạo thư mục</span>
                </button>
                <button wire:click="$set('showUploadModal', true)" class="theme-header-pink header-button">
                    <flux:icon.plus class="size-4" />
                    <span>Upload File</span>
                </button>
            </div>
        </div>
    </div>

    {{-- Breadcrumb Navigation --}}
    <div class="theme-card-pink mb-6">
        <div class="card-body">
            <div class="flex items-center space-x-2 text-sm">

                @foreach ($breadcrumbs as $index => $breadcrumb)
                    @if ($index > 0)
                        <svg fill="currentColor" viewBox="0 0 20 20" class="size-4 text-gray-400">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    @endif

                    @if ($index === count($breadcrumbs) - 1)
                        <span class="text-gray-900 dark:text-white font-medium">{{ $breadcrumb['name'] }}</span>
                    @else
                        <button wire:click="navigateToDirectory('{{ $breadcrumb['path'] }}')"
                            class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                            {{ $breadcrumb['name'] }}
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{-- Search and Filter --}}
    <div class="theme-card-pink mb-6">
        <div class="card-body">
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <flux:icon.magnifying-glass
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 size-4 text-gray-400" />
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Tìm kiếm file và thư mục..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                    <flux:icon.document class="size-4" />
                    <span>{{ count($filteredItems) }} mục</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Files and Directories List --}}
    <div class="theme-table-pink">
        @if (count($filteredItems) > 0)
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th class="text-center">Loại</th>
                            <th class="text-center">Ngày sửa</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($filteredItems as $item)
                            <tr>
                                <td>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-8 h-8 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center">
                                            @if ($item['type'] === 'directory')
                                                <flux:icon.folder class="size-4 text-pink-600" />
                                            @elseif(in_array($item['extension'] ?? '', ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                <flux:icon.photo class="size-4 text-pink-600" />
                                            @elseif(in_array($item['extension'] ?? '', ['pdf']))
                                                <flux:icon.document-text class="size-4 text-pink-600" />
                                            @elseif(in_array($item['extension'] ?? '', ['doc', 'docx']))
                                                <flux:icon.document class="size-4 text-pink-600" />
                                            @elseif(in_array($item['extension'] ?? '', ['xls', 'xlsx']))
                                                <flux:icon.table-cells class="size-4 text-pink-600" />
                                            @elseif(in_array($item['extension'] ?? '', ['zip', 'rar', '7z']))
                                                <flux:icon.archive-box class="size-4 text-pink-600" />
                                            @else
                                                <flux:icon.document class="size-4 text-pink-600" />
                                            @endif
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-white break-words">
                                                @if ($item['type'] === 'directory')
                                                    <button wire:click="navigateToDirectory('{{ $item['path'] }}')"
                                                        class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                                        {{ $item['name'] }}
                                                    </button>
                                                @else
                                                    {{ $item['name'] }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    @if ($item['type'] === 'directory')
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full">
                                            THƯ MỤC
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 rounded-full">
                                            {{ strtoupper($item['extension'] ?? 'FILE') }}
                                        </span>
                                    @endif
                                </td>

                                <td class="text-center text-sm text-gray-600 dark:text-gray-400">
                                    {{ $this->formatDate($item['modified']) }}
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center space-x-2">
                                        @if ($item['type'] === 'directory')
                                            <button wire:click="navigateToDirectory('{{ $item['path'] }}')"
                                                class="p-2 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                                <flux:icon.arrow-right class="size-4" />
                                            </button>
                                        @else
                                            <a href="{{ asset($item['path']) }}" target="_blank"
                                                class="p-2 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                                <flux:icon.eye class="size-4" />
                                            </a>
                                            <button wire:click="downloadFile('{{ $item['name'] }}')"
                                                class="p-2 text-green-600 hover:text-green-800 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-all duration-200">
                                                <flux:icon.arrow-down-tray class="size-4" />
                                            </button>
                                        @endif
                                        <button wire:click="deleteItem('{{ $item['name'] }}', '{{ $item['type'] }}')"
                                            wire:confirm="Bạn có chắc chắn muốn xóa {{ $item['type'] === 'directory' ? 'thư mục' : 'file' }} này?"
                                            class="p-2 text-red-600 hover:text-red-800 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all duration-200">
                                            <flux:icon.trash class="size-4" />
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Mobile Card View --}}
            <div class="md:hidden space-y-2 p-3">
                @foreach ($filteredItems as $item)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm">
                        <div class="p-3">
                            {{-- Header Row --}}
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-2 flex-1 min-w-0">


                                    <div
                                        class="w-8 h-8 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                        @if ($item['type'] === 'directory')
                                            <flux:icon.folder class="size-4 text-pink-600" />
                                        @elseif(in_array($item['extension'] ?? '', ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                            <flux:icon.photo class="size-4 text-pink-600" />
                                        @elseif(in_array($item['extension'] ?? '', ['pdf']))
                                            <flux:icon.document-text class="size-4 text-pink-600" />
                                        @elseif(in_array($item['extension'] ?? '', ['doc', 'docx']))
                                            <flux:icon.document class="size-4 text-pink-600" />
                                        @elseif(in_array($item['extension'] ?? '', ['xls', 'xlsx']))
                                            <flux:icon.table-cells class="size-4 text-pink-600" />
                                        @elseif(in_array($item['extension'] ?? '', ['zip', 'rar', '7z']))
                                            <flux:icon.archive-box class="size-4 text-pink-600" />
                                        @else
                                            <flux:icon.document class="size-4 text-pink-600" />
                                        @endif
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <div class="font-medium text-gray-900 dark:text-white text-sm leading-tight">
                                            @if ($item['type'] === 'directory')
                                                <button wire:click="navigateToDirectory('{{ $item['path'] }}')"
                                                    class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-left">
                                                    {{ $item['name'] }}
                                                </button>
                                            @else
                                                <span class="break-words">{{ $item['name'] }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-1 flex-shrink-0">
                                    @if ($item['type'] === 'directory')
                                        <button wire:click="navigateToDirectory('{{ $item['path'] }}')"
                                            class="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                            <flux:icon.arrow-right class="size-4" />
                                        </button>
                                    @else
                                        <a href="{{ asset($item['path']) }}" target="_blank"
                                            class="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                            <flux:icon.eye class="size-4" />
                                        </a>
                                        <button wire:click="downloadFile('{{ $item['name'] }}')"
                                            class="p-1.5 text-green-600 hover:text-green-800 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-all duration-200">
                                            <flux:icon.arrow-down-tray class="size-4" />
                                        </button>
                                    @endif
                                    <button wire:click="deleteItem('{{ $item['name'] }}', '{{ $item['type'] }}')"
                                        wire:confirm="Bạn có chắc chắn muốn xóa {{ $item['type'] === 'directory' ? 'thư mục' : 'file' }} này?"
                                        class="p-1.5 text-red-600 hover:text-red-800 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all duration-200">
                                        <flux:icon.trash class="size-4" />
                                    </button>
                                </div>
                            </div>

                            {{-- Info Row --}}
                            <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                                <div class="flex items-center space-x-2">
                                    @if ($item['type'] === 'directory')
                                        <span
                                            class="px-2 py-0.5 text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full">
                                            THƯ MỤC
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-0.5 text-xs font-medium bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 rounded-full">
                                            {{ strtoupper($item['extension'] ?? 'FILE') }}
                                        </span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                            {{ $this->formatFileSize($item['size'] ?? 0) }}
                                        </span>
                                    @endif
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $this->formatDate($item['modified']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Empty State --}}
            <div class="p-8">
                <div class="empty-state flex flex-col items-center">
                    <flux:icon.folder-open class="w-16 h-16 mb-4 text-gray-400" />
                    <h3 class="text-lg font-medium mb-2 text-gray-500">
                        @if ($search)
                            Không tìm thấy mục nào
                        @else
                            Thư mục trống
                        @endif
                    </h3>
                    <p class="text-gray-400 text-center mb-4">
                        @if ($search)
                            Thử tìm kiếm với từ khóa khác
                        @else
                            Tạo thư mục hoặc upload file để bắt đầu
                        @endif
                    </p>
                    @if (!$search)
                        <div class="flex flex-col sm:flex-row gap-2">
                            <button wire:click="$set('showCreateFolderModal', true)"
                                class="theme-header-pink header-button">
                                <flux:icon.folder-plus class="size-4" />
                                <span>Tạo thư mục</span>
                            </button>
                            <button wire:click="$set('showUploadModal', true)"
                                class="theme-header-pink header-button">
                                <flux:icon.plus class="size-4" />
                                <span>Upload File</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>

    {{-- Upload Modal --}}
    @if ($showUploadModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
            wire:click.self="$set('showUploadModal', false)">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 w-full max-w-md mx-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Upload File</h3>
                    <button wire:click="$set('showUploadModal', false)"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <flux:icon.x-mark class="size-5" />
                    </button>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Chọn file (tối đa 10MB mỗi file)
                        </label>
                        <input type="file" wire:model="uploadedFiles" multiple
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                        @error('uploadedFiles.*')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button wire:click="$set('showUploadModal', false)"
                            class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">
                            Hủy
                        </button>
                        <button wire:click="uploadFiles" class="theme-header-pink header-button">
                            <flux:icon.arrow-up-tray class="size-4" />
                            <span>Upload</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Create Folder Modal --}}
    @if ($showCreateFolderModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
            wire:click.self="$set('showCreateFolderModal', false)">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 w-full max-w-md mx-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tạo thư mục mới</h3>
                    <button wire:click="$set('showCreateFolderModal', false)"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <flux:icon.x-mark class="size-5" />
                    </button>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Tên thư mục
                        </label>
                        <input type="text" wire:model="newFolderName" placeholder="Nhập tên thư mục..."
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                        @error('newFolderName')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button wire:click="$set('showCreateFolderModal', false)"
                            class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">
                            Hủy
                        </button>
                        <button wire:click="createFolder" class="theme-header-pink header-button">
                            <flux:icon.folder-plus class="size-4" />
                            <span>Tạo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
