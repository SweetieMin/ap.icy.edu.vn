<?php

namespace App\Livewire\Back\Management\Test;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

#[Title('Quản lý File Test')]
class PlacementTests extends Component
{
    use WithFileUploads;

    public $files = [];
    public $directories = [];
    public $uploadedFiles = [];
    public $showUploadModal = false;
    public $showCreateFolderModal = false;
    public $newFolderName = '';
    public $search = '';
    public $currentPath = 'storage/test';
    public $breadcrumbs = [];
    private $allowedBasePath = 'storage/test';

    public function mount()
    {
        $this->loadDirectoryContents();
    }

    public function loadDirectoryContents()
    {
        $fullPath = public_path($this->currentPath);
        
        if (!File::exists($fullPath)) {
            File::makeDirectory($fullPath, 0755, true);
        }

        // Load directories
        $this->directories = collect(File::directories($fullPath))
            ->map(function ($dir) {
                return [
                    'name' => basename($dir),
                    'type' => 'directory',
                    'modified' => File::lastModified($dir),
                    'path' => str_replace(public_path(), '', $dir),
                ];
            })
            ->sortBy('name')
            ->values()
            ->toArray();

        // Load files
        $this->files = collect(File::files($fullPath))
            ->map(function ($file) {
                return [
                    'name' => $file->getFilename(),
                    'type' => 'file',
                    'size' => $file->getSize(),
                    'extension' => $file->getExtension(),
                    'modified' => $file->getMTime(),
                    'path' => str_replace(public_path(), '', $file->getPathname()),
                ];
            })
            ->sortBy('name')
            ->values()
            ->toArray();

        $this->updateBreadcrumbs();
    }

    private function isPathAllowed($path)
    {
        // Loại bỏ dấu / ở đầu nếu có
        $normalizedPath = ltrim($path, '/');
        $normalizedAllowedPath = ltrim($this->allowedBasePath, '/');
        
        // Kiểm tra xem path có bắt đầu bằng allowedBasePath không
        return strpos($normalizedPath, $normalizedAllowedPath) === 0;
    }

    public function updateBreadcrumbs()
    {
        $pathParts = explode('/', $this->currentPath);
        $this->breadcrumbs = [];
        $currentPath = '';
        
        foreach ($pathParts as $part) {
            if ($part) {
                $currentPath .= ($currentPath ? '/' : '') . $part;
                $this->breadcrumbs[] = [
                    'name' => $part === 'storage' ? 'Storage' : ($part === 'test' ? 'Test' : $part),
                    'path' => $currentPath
                ];
            }
        }
    }

    public function navigateToDirectory($path)
    {

        // Tạm thời tắt kiểm tra để debug
        if (!$this->isPathAllowed($path)) {
            session()->flash('error', 'Không có quyền truy cập thư mục này! Path: ' . $path);
             return;
         }

        $this->currentPath = $path;
        $this->selectedFiles = [];
        $this->loadDirectoryContents();
    }

    public function goUp()
    {
        $pathParts = explode('/', $this->currentPath);
        if (count($pathParts) > 2) { // Don't go above storage/test
            array_pop($pathParts);
            $newPath = implode('/', $pathParts);
            
            // Kiểm tra quyền truy cập
            if (!$this->isPathAllowed($newPath)) {
                session()->flash('error', 'Không có quyền truy cập thư mục này!');
                return;
            }
            
            $this->currentPath = $newPath;
            $this->selectedFiles = [];
            $this->loadDirectoryContents();
        }
    }

    public function uploadFiles()
    {
        // Kiểm tra quyền truy cập
        if (!$this->isPathAllowed($this->currentPath)) {
            session()->flash('error', 'Không có quyền upload vào thư mục này!');
            return;
        }

        $this->validate([
            'uploadedFiles.*' => 'file|max:10240', // 10MB max per file
        ]);

        $relativePath = str_replace('storage/', '', $this->currentPath);
        
        foreach ($this->uploadedFiles as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs($relativePath, $filename, 'public');
        }

        $this->uploadedFiles = [];
        $this->showUploadModal = false;
        $this->loadDirectoryContents();
        
        session()->flash('success', 'Upload file thành công!');
        $this->redirectRoute('admin.management.placement-tests', navigate: true);
    }

    public function createFolder()
    {
        // Kiểm tra quyền truy cập
        if (!$this->isPathAllowed($this->currentPath)) {
            session()->flash('error', 'Không có quyền tạo thư mục trong thư mục này!');
            return;
        }

        $this->validate([
            'newFolderName' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s\-_]+$/',
        ]);

        $folderPath = public_path($this->currentPath . '/' . $this->newFolderName);
        
        if (File::exists($folderPath)) {
            session()->flash('error', 'Thư mục đã tồn tại!');
            return;
        }

        File::makeDirectory($folderPath, 0755, true);
        $this->newFolderName = '';
        $this->showCreateFolderModal = false;
        $this->loadDirectoryContents();
        
        session()->flash('success', 'Tạo thư mục thành công!');
        $this->redirectRoute('admin.management.placement-tests', navigate: true);
    }

    public function deleteItem($name, $type)
    {
        // Kiểm tra quyền truy cập
        if (!$this->isPathAllowed($this->currentPath)) {
            session()->flash('error', 'Không có quyền xóa trong thư mục này!');
            return;
        }

        $itemPath = public_path($this->currentPath . '/' . $name);
        
        if ($type === 'directory') {
            if (File::exists($itemPath) && File::isDirectory($itemPath)) {
                File::deleteDirectory($itemPath);
                session()->flash('success', 'Xóa thư mục thành công!');
                $this->redirectRoute('admin.management.placement-tests', navigate: true);
            } else {
                session()->flash('error', 'Thư mục không tồn tại!');
            }
        } else {
            if (File::exists($itemPath)) {
                File::delete($itemPath);
                session()->flash('success', 'Xóa file thành công!');
                $this->redirectRoute('admin.management.placement-tests', navigate: true);
            } else {
                session()->flash('error', 'File không tồn tại!');
            }
        }
        
        $this->loadDirectoryContents();
    }


    public function downloadFile($filename)
    {
        $filePath = public_path($this->currentPath . '/' . $filename);
        
        if (File::exists($filePath)) {
            return response()->download($filePath);
        }
        
        session()->flash('error', 'File không tồn tại!');
    }

    public function getFilteredItems()
    {
        $allItems = array_merge($this->directories, $this->files);
        
        if (empty($this->search)) {
            return $allItems;
        }

        return collect($allItems)
            ->filter(function ($item) {
                return str_contains(strtolower($item['name']), strtolower($this->search));
            })
            ->values()
            ->toArray();
    }

    public function formatFileSize($bytes)
    {
        if (!$bytes) return '0 B';
        
        $units = ['B', 'KB', 'MB', 'GB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        
        return round($bytes, 2) . ' ' . $units[$pow];
    }

    public function formatDate($timestamp)
    {
        return date('d/m/Y H:i', $timestamp);
    }

    public function render()
    {
        return view('livewire.back.management.test.placement-tests', [
            'filteredItems' => $this->getFilteredItems()
        ]);
    }
}
