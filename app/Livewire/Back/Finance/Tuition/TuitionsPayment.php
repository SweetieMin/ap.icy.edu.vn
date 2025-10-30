<?php

namespace App\Livewire\Back\Finance\Tuition;

use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use App\Support\Bank\BankHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Support\Tuition\TuitionHelper;
use App\Repositories\Contracts\BankRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\ProgramRepositoryInterface;
use App\Repositories\Contracts\StudentRepositoryInterface;
use App\Repositories\Contracts\TuitionRepositoryInterface;
use App\Repositories\Contracts\ProgramLocationPriceRepositoryInterface;

#[Title('Thanh toán học phí')]
class TuitionsPayment extends Component
{
    // Search
    public $searchProgram = '';
    public $programs = [];
    public $filteredPrograms = [];
    public $isProgramSearchFocused = false;

    // Student selection
    public $selectedStudent = null;
    public $students = [];
    public $searchStudent = '';
    public $filteredStudents = [];

    // Seasons
    public $seasons = [];

    // Banks
    public $banks = [];
    public $selectedBankId = null;

    // Transaction History
    public $transactionHistory = [];

    // Selected items
    public $selectedItems = [];
    
    // Book purchase tracking
    public $bookPurchases = [];

    // Payment
    public $totalAmount = 0;
    public $discountAmount = 0;
    public $discountType = 'vnd'; // 'vnd' or 'percent'
    public $finalAmount = 0;
    public $note = '';
    public $paymentMethod = 'cash';

    #[Url(except: '')]
    public $student;

    #[On('payment-student')]
    public function paymentStudent($studentId)
    {
        $this->student = $studentId;
    }

    public function mount()
    {
        $this->loadPrograms();
        $this->loadStudents();
        $this->loadSeasons();
        $this->loadBanks();
        if ($this->student) {
            $this->selectStudent($this->student);
        } else {
            $this->student = '';
        }
    }

    #[On('turnOnBankTransfer')]
    public function turnOnBankTransfer()
    {
        $this->dispatch('turnOnBankTransfer');
    }

    public function loadPrograms()
    {
        $programs = app(ProgramRepositoryInterface::class)->getAllPrograms();
        $this->programs = [];

        // Chuyển đổi và thêm giá mặc định (sẽ được override khi chọn học sinh)
        foreach ($programs as $program) {
            $this->programs[] = [
                'id' => $program->id,
                'name' => $program->name,
                'english_name' => $program->english_name,
                'price' => 0, // Giá mặc định, sẽ được cập nhật khi chọn học sinh
                'price_book' => $program->price_book ?? 0, // Giá sách
            ];
        }

        $this->filteredPrograms = []; // Không hiển thị gì ban đầu
    }

    public function loadStudents()
    {
        $this->students = app(StudentRepositoryInterface::class)->getStudentsOfLocationWithFilters()->toArray();
        $this->filteredStudents = $this->students; // Hiển thị tất cả học sinh ban đầu
    }

    public function loadSeasons()
    {
        $this->seasons = app(SeasonRepositoryInterface::class)->getSeasonAvailable()->toArray();
    }

    public function loadBanks()
    {
        $this->banks = app(BankRepositoryInterface::class)->getActiveBanks()->toArray();
    }

    public function loadTransactionHistory($studentId)
    {
        $this->transactionHistory = app(TuitionRepositoryInterface::class)->getTuitionsByUserId($studentId)->toArray();
    }

    public function getProgramPriceForStudent($programId, $studentId)
    {
        try {
            // Lấy location_id từ bảng pivot location_user
            $locationUser = DB::table('location_user')
                ->where('user_id', $studentId)
                ->first();

            if (!$locationUser || !$locationUser->location_id) {
                return 0;
            }

            // Lấy giá từ ProgramLocationPrice
            $programLocationPrice = app(ProgramLocationPriceRepositoryInterface::class)
                ->getPriceByProgramAndLocation($programId, $locationUser->location_id);

            if ($programLocationPrice) {
                return (float) $programLocationPrice->price;
            }

            // Nếu không tìm thấy giá theo location, trả về 0
            return 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function updatedSearchProgram()
    {
        if (empty($this->searchProgram)) {
            $this->filteredPrograms = $this->programs; // Hiển thị tất cả chương trình khi chưa tìm kiếm
        } else {
            $this->filteredPrograms = array_filter($this->programs, function ($program) {
                return stripos($program['name'], $this->searchProgram) !== false ||
                    stripos($program['english_name'], $this->searchProgram) !== false;
            });
        }
    }

    public function onProgramSearchFocus()
    {
        $this->isProgramSearchFocused = true;
        // Chỉ hiển thị danh sách chương trình khi đã chọn học sinh
        if ($this->selectedStudent) {
            $this->filteredPrograms = $this->programs;
        }
    }

    public function onProgramSearchBlur()
    {
        // Delay để tránh blur khi click vào button
        $this->dispatch('delayed-blur');
    }
    
    public function handleDelayedBlur()
    {
        $this->isProgramSearchFocused = false;
        // Khi blur khỏi ô tìm kiếm, giữ danh sách hiển thị nếu đã chọn học sinh
        if ($this->selectedStudent) {
            $this->filteredPrograms = $this->programs;
        }
    }

    public function updatedSearchStudent()
    {
        if (empty($this->searchStudent)) {
            $this->filteredStudents = $this->students; // Hiển thị tất cả học sinh khi chưa tìm kiếm
        } else {
            $this->filteredStudents = array_filter($this->students, function ($student) {
                return stripos($student['name'], $this->searchStudent) !== false ||
                    stripos($student['account_code'], $this->searchStudent) !== false;
            });
        }
    }

    public function paymentMethodChanged()
    {
        // Method để Livewire tự động detect changes
    }

    public function selectedBankChanged()
    {
        // Method để Livewire tự động detect changes
    }

    public function mainMenuQRCode()
    {
        $this->dispatch('mainMenuQRCode');
    }

    public function turnOffQRCode()
    {
        $this->dispatch('turnOffQRCode');
    }

    public function selectStudent($studentId)
    {
        $student = collect($this->students)->firstWhere('id', $studentId);
        if ($student) {
            // Lấy thông tin đầy đủ của học sinh từ database
            $fullStudent = app(StudentRepositoryInterface::class)->getStudentById($studentId);
            if ($fullStudent) {
                // Lấy location_id từ bảng pivot
                $locationUser = \Illuminate\Support\Facades\DB::table('location_user')
                    ->where('user_id', $studentId)
                    ->first();
                $locationId = $locationUser ? $locationUser->location_id : null;

                $this->selectedStudent = [
                    'id' => $fullStudent->id,
                    'name' => $fullStudent->name,
                    'account_code' => $fullStudent->account_code,
                    'location_id' => $locationId,
                ];
            } else {
                $this->selectedStudent = $student;
            }

            $this->searchStudent = ''; // Xóa từ khóa tìm kiếm sau khi chọn
            $this->filteredStudents = []; // Xóa danh sách kết quả
            // Load lịch sử giao dịch của học sinh
            $this->loadTransactionHistory($studentId);
        }
    }

    public function clearStudentSelection()
    {
        $this->selectedStudent = null;
        $this->selectedItems = [];
        $this->bookPurchases = [];
        $this->transactionHistory = []; // Xóa lịch sử giao dịch
        $this->loadStudents();
        $this->student = '';
    }

    public function toggleItemBookPurchase($index, $checked)
    {
        if (isset($this->selectedItems[$index])) {
            $item = $this->selectedItems[$index];
            
            if ($item['type'] === 'program') {
                // Lấy thông tin chương trình để lấy giá sách
                $program = collect($this->programs)->firstWhere('id', $item['id']);
                
                if ($program && $program['price_book'] > 0) {
                    if ($checked) {
                        // Thêm giá sách
                        $this->selectedItems[$index]['include_book'] = true;
                        $this->selectedItems[$index]['book_price'] = $program['price_book'];
                        $this->selectedItems[$index]['price'] = $item['base_price'] + $program['price_book'];
                    } else {
                        // Bỏ giá sách
                        $this->selectedItems[$index]['include_book'] = false;
                        $this->selectedItems[$index]['book_price'] = 0;
                        $this->selectedItems[$index]['price'] = $item['base_price'];
                    }
                    
                    $this->calculateTotal();
                }
            }
        }
    }

    public function addProgram($programId)
    {
        if (!$this->selectedStudent) {
            session()->flash('error', 'Vui lòng chọn học sinh trước khi thêm chương trình!');
            return;
        }

        $program = collect($this->programs)->firstWhere('id', $programId);
        if ($program) {
            // Lấy giá từ ProgramLocationPrice dựa trên location của học sinh
            $price = $this->getProgramPriceForStudent($programId, $this->selectedStudent['id']);

            if ($price <= 0) {
                session()->flash('error', 'Chương trình này chưa có giá cho cơ sở của học sinh!');
                return;
            }

            // Thêm chương trình với giá gốc, chưa mua sách
            $newItem = [
                'id' => (int) $program['id'],
                'name' => $program['name'],
                'price' => (float) $price,
                'base_price' => (float) $price,
                'book_price' => 0,
                'season_id' => null, // Sẽ được chọn sau
                'season_name' => null,
                'type' => 'program',
                'include_book' => false,
            ];

            $this->selectedItems[] = $newItem;

            // Giữ danh sách chương trình hiển thị sau khi thêm
            $this->filteredPrograms = $this->programs;

            $this->calculateTotal();

            $this->searchProgram = '';

            // Force refresh component
            $this->dispatch('$refresh');
        }
    }

    public function addUniform()
    {
        $this->selectedItems[] = [
            'id' => 'uniform',
            'name' => 'Đồng phục',
            'price' => 100000,
            'season_id' => null,
            'season_name' => null,
            'type' => 'uniform',
        ];

        $this->calculateTotal();
        $this->searchProgram = '';
    }

    public function removeItem($index)
    {
        if (isset($this->selectedItems[$index])) {
            unset($this->selectedItems[$index]);
            $this->selectedItems = array_values($this->selectedItems);
            $this->calculateTotal();
        }
    }

    public function selectSeason($index, $seasonId)
    {
        if (isset($this->selectedItems[$index])) {
            $season = collect($this->seasons)->firstWhere('id', $seasonId);
            if ($season) {
                $this->selectedItems[$index]['season_id'] = $season['id'];
                $this->selectedItems[$index]['season_name'] = $season['name'];
            }
            $this->calculateTotal();
        }
    }

    public function updateItemDiscount($index, $discountAmount)
    {
        if (isset($this->selectedItems[$index])) {
            $this->selectedItems[$index]['discount_amount'] = (float) $discountAmount;
            $this->calculateTotal();
        }
    }

    public function updateItemDiscountType($index, $discountType)
    {
        if (isset($this->selectedItems[$index])) {
            $this->selectedItems[$index]['discount_type'] = $discountType;
            // Không reset discount amount, chỉ tính lại với loại giảm giá mới
            $this->calculateTotal();
        }
    }

    public function selectBank($bankId)
    {
        $this->selectedBankId = $bankId;
    }


    public function calculateTotal()
    {
        $this->totalAmount = 0;
        $totalItemDiscounts = 0;

        foreach ($this->selectedItems as $item) {
            $itemPrice = (float) $item['price'];

            // Tính giảm giá cho từng item - chỉ tính trên base_price (giá gốc chương trình)
            if (isset($item['discount_amount']) && $item['discount_amount'] > 0) {
                $discountAmount = (float) $item['discount_amount'];
                // Chỉ tính giảm giá trên base_price, không tính trên giá sách
                $basePrice = isset($item['base_price']) ? (float) $item['base_price'] : $itemPrice;
                
                if (($item['discount_type'] ?? 'vnd') === 'percent') {
                    $itemDiscount = ($basePrice * $discountAmount) / 100;
                } else {
                    $itemDiscount = $discountAmount;
                }
                $totalItemDiscounts += $itemDiscount;
            }

            $this->totalAmount += $itemPrice;
        }

        // Tính giảm giá tổng (nếu có)
        $totalDiscount = $totalItemDiscounts;
        if ($this->discountAmount > 0) {
            $discountAmount = (float) $this->discountAmount;
            if ($this->discountType === 'percent') {
                $totalDiscount += ($this->totalAmount * $discountAmount / 100);
            } else {
                $totalDiscount += $discountAmount;
            }
        }

        $this->finalAmount = $this->totalAmount - $totalDiscount;

        // Đảm bảo finalAmount không âm
        if ($this->finalAmount < 0) {
            $this->finalAmount = 0;
        }
    }

    public function updatedDiscountAmount()
    {
        $this->calculateTotal();
    }

    public function updatedDiscountType()
    {
        // Không reset discount amount, chỉ tính lại với loại giảm giá mới
        $this->calculateTotal();
    }


    public function updatedNote()
    {
        // Method để Livewire tự động detect changes
    }

    public function processPayment()
    {
        // Kiểm tra xem đã chọn học sinh chưa
        if (!$this->selectedStudent) {
            session()->flash('error', 'Vui lòng chọn học sinh trước khi thanh toán');
            return;
        }

        // Kiểm tra xem có chương trình nào được chọn không
        if (count($this->selectedItems) == 0) {
            session()->flash('error', 'Vui lòng chọn ít nhất một chương trình');
            return;
        }

        // Kiểm tra xem tất cả chương trình đã chọn season chưa (trừ đồng phục)
        foreach ($this->selectedItems as $item) {
            if ($item['type'] !== 'uniform' && !$item['season_id']) {
                session()->flash('error', 'Vui lòng chọn season cho tất cả chương trình!');
                return;
            }
        }

        // Kiểm tra bank selection nếu payment method là bank_transfer
        if ($this->paymentMethod === 'bank_transfer' && !$this->selectedBankId) {
            session()->flash('error', 'Vui lòng chọn tài khoản ngân hàng!');
            return;
        }

        // Kiểm tra finalAmount
        if ($this->finalAmount <= 0) {
            session()->flash('error', 'Số tiền thanh toán phải lớn hơn 0!');
            return;
        }

        try {
            $student = app(StudentRepositoryInterface::class)->getStudentById($this->selectedStudent['id']);

            if (!$student) {
                session()->flash('error', 'Không tìm thấy thông tin học sinh!');
                return;
            }

            $createdTuitions = [];
            $baseReceiptNumber = 'ICY' . $student->username . uniqid();

            // Phân loại items: tách khoá học và đồng phục
            $programItems = [];
            $uniformItems = [];
            
            foreach ($this->selectedItems as $item) {
                if ($item['type'] === 'uniform') {
                    $uniformItems[] = $item;
                } else {
                    $programItems[] = $item;
                }
            }

            $receiptCounter = 1;

            // Tính tổng giá đồng phục (nếu có)
            $totalUniformPrice = 0;
            foreach ($uniformItems as $uniformItem) {
                $totalUniformPrice += (float) $uniformItem['price'];
            }

            // Xử lý các khoá học (có thể gộp với đồng phục)
            foreach ($programItems as $programItem) {
                // Tính giá cho khoá học - sử dụng logic giống calculateTotal()
                $itemPrice = (float) $programItem['price'];
                $itemDiscount = 0;

                // Tính giảm giá cho từng item - chỉ tính trên base_price (giá gốc chương trình)
                if (isset($programItem['discount_amount']) && $programItem['discount_amount'] > 0) {
                    $discountAmount = (float) $programItem['discount_amount'];
                    // Chỉ tính giảm giá trên base_price, không tính trên giá sách
                    $basePrice = isset($programItem['base_price']) ? (float) $programItem['base_price'] : $itemPrice;
                    
                    if (($programItem['discount_type'] ?? 'vnd') === 'percent') {
                        $itemDiscount = ($basePrice * $discountAmount) / 100;
                    } else {
                        $itemDiscount = $discountAmount;
                    }
                }

                $finalProgramPrice = $itemPrice - $itemDiscount;
                if ($finalProgramPrice < 0) $finalProgramPrice = 0;

                // Tổng giá cho bản ghi này (khoá học + đồng phục)
                $totalPrice = $finalProgramPrice + $totalUniformPrice;

                // Tạo note cho hạng mục
                $itemName = 'Khoá học';
                if ($programItem['include_book']) {
                    $itemName .= ' + Sách';
                }
                if ($totalUniformPrice > 0) {
                    $itemName .= ' + Đồng phục';
                }

                // Tạo content_transaction (chỉ cho chuyển khoản)
                $contentTransaction = null;
                if ($this->paymentMethod === 'bank_transfer') {
                    $contentTransaction = BankHelper::generateDescriptionTransactionBankTransfer($student->id, $programItem['season_id'], $programItem['id']);
                }

                $tuition = [
                    'user_id' => $student->id,
                    'receipt_number' => $baseReceiptNumber . '-' . $receiptCounter,
                    'program_id' => $programItem['id'],
                    'season_id' => $programItem['season_id'],
                    'price' => $totalPrice,
                    'status' => 'pending',
                    'payment_method' => $this->paymentMethod,
                    'bank_id' => $this->selectedBankId,
                    'content_transaction' => $contentTransaction,
                    'note' => $itemName,
                    'created_by' => Auth::user()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $createdTuition = app(TuitionRepositoryInterface::class)->create($tuition);
                $createdTuitions[] = $createdTuition;
                $receiptCounter++;
            }

            // Nếu chỉ có đồng phục mà không có khoá học
            if (empty($programItems) && !empty($uniformItems)) {
                $totalUniformPrice = 0;
                foreach ($uniformItems as $uniformItem) {
                    $totalUniformPrice += (float) $uniformItem['price'];
                }

                $contentTransaction = null;
                if ($this->paymentMethod === 'bank_transfer') {
                    $contentTransaction = "Uniform." . $student->username.'.'.uniqid();
                }

                $tuition = [
                    'user_id' => $student->id,
                    'receipt_number' => $baseReceiptNumber . '-' . $receiptCounter,
                    'program_id' => null,
                    'season_id' => null,
                    'price' => $totalUniformPrice,
                    'status' => 'pending',
                    'payment_method' => $this->paymentMethod,
                    'bank_id' => $this->selectedBankId,
                    'content_transaction' => $contentTransaction,
                    'note' => 'Đồng phục',
                    'created_by' => Auth::user()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $createdTuition = app(TuitionRepositoryInterface::class)->create($tuition);
                $createdTuitions[] = $createdTuition;
            }

            // Áp dụng giảm giá tổng nếu có
            if ($this->discountAmount > 0 && count($createdTuitions) > 0) {
                $totalDiscountAmount = (float) $this->discountAmount;
                if ($this->discountType === 'percent') {
                    // Tính giảm giá phần trăm trên tổng tiền
                    $totalDiscountAmount = ($this->totalAmount * $totalDiscountAmount) / 100;
                }
                
                // Phân bổ giảm giá tổng cho các bản ghi theo tỷ lệ
                $totalCreatedAmount = 0;
                foreach ($createdTuitions as $tuition) {
                    $totalCreatedAmount += $tuition->price;
                }
                
                if ($totalCreatedAmount > 0) {
                    $remainingDiscount = $totalDiscountAmount;
                    $lastIndex = count($createdTuitions) - 1;
                    
                    foreach ($createdTuitions as $index => $tuition) {
                        if ($index === $lastIndex) {
                            // Bản ghi cuối cùng nhận phần còn lại
                            $tuition->price = max(0, $tuition->price - $remainingDiscount);
                        } else {
                            // Phân bổ theo tỷ lệ
                            $proportion = $tuition->price / $totalCreatedAmount;
                            $itemDiscount = $totalDiscountAmount * $proportion;
                            $tuition->price = max(0, $tuition->price - $itemDiscount);
                            $remainingDiscount -= $itemDiscount;
                        }
                        $tuition->save();
                    }
                }
            }

            $count = count($createdTuitions);
            session()->flash('success', "Tạo thành công {$count} bản ghi thanh toán.");
            $this->redirectRoute('admin.finance.tuitions-payment', ['student' => $this->selectedStudent['id']], navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra khi tạo thanh toán: ' . $e->getMessage());
        }
    }

    public function showQrCode($transactionId)
    {

        
        $transaction = app(TuitionRepositoryInterface::class)->getTuitionById($transactionId);
        $crc16 = TuitionHelper::generateInformationTransaction($transaction);
        $bankName = app(BankRepositoryInterface::class)->getById($transaction->bank_id)->bank_name;
        $accountNumber = app(BankRepositoryInterface::class)->getById($transaction->bank_id)->account_number;
        $amount = (string) $transaction->price;
        $this->dispatch('qr-bank-transfer', $transaction->id, $crc16);
        $this->dispatch('process-payment', $crc16, $bankName, $accountNumber, $amount);
    }

    public function paidCash($transactionId)
    {
        $transaction = app(TuitionRepositoryInterface::class)->getTuitionById($transactionId);
        $transaction->status = 'paid';
        $transaction->save();
        session()->flash('success', 'Đã thanh toán thành công');
        $this->redirectRoute('admin.finance.tuitions-payment', ['student' => $this->selectedStudent['id']], navigate: true);
    }

    public function render()
    {
        return view('livewire.back.finance.tuition.tuitions-payment', [
            'programs' => $this->programs
        ]);
    }
}
