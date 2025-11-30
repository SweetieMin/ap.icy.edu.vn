<?php

namespace App\Exports\Personnel;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithHeadings, WithMapping
{
    protected $locationId;
    protected $columns;

    public function __construct($locationId, $columns)
    {
        $this->locationId = $locationId;
        $this->columns = $columns;
    }

    public function collection()
    {
        $users = User::with(['locations', 'roles', 'detail', 'courses'])
            ->where('status', 'active')
            ->whereHas('roles', fn($q) => $q->where('name', 'student'))
            ->when($this->locationId, function ($q) {
                $q->whereHas(
                    'locations',
                    fn($q2) =>
                    $q2->where('locations.id', $this->locationId)
                );
            })
            ->whereHas('courses')
            ->get();

        return $users;
    }

    public function headings(): array
    {
        $map = [
            'name'           => 'Họ và Tên',
            'account_code'   => 'Mã HV',
            'phone'          => 'Số điện thoại',
            'birthday'       => 'Ngày sinh',
            'email'          => 'Email',
            'course'         => 'Lớp',
            'card_id'        => 'CCCD/CMND',
            'aspiration'     => 'Nguyện vọng',
            'address'        => 'Địa chỉ',
            'guardian_name'  => 'Người giám hộ',
            'avatar'         => 'Ảnh đại diện',
        ];

        return collect(['name' => true] + $this->columns) // name luôn true
            ->filter(fn($v) => $v === true)
            ->keys()
            ->map(fn($key) => $map[$key] ?? ucfirst($key))
            ->toArray();
    }


    public function map($student): array
    {

        $data = [
            'name'           => $student->name,
            'account_code'   => $student->account_code,
            'course'         => $student->courses->pluck('name')->join(', '),
            'phone'          => $student->detail->phone ?? '',
            'birthday'       => $student->detail->birthday ?? '',
            'email'          => $student->email ?? '',
            'card_id'        => $student->detail->id_card ?? '',
            'aspiration'     => $student->detail->aspiration ?? '',
            'address'        => $student->detail->address ?? '',
            'guardian_name'  => $student->detail->guardian_name ?? '',
            'avatar' => filled($student->detail->getRawOriginal('avatar'))
                ? 'Đã có'
                : 'Chưa có',
        ];

        return collect(['name' => true] + $this->columns) // name luôn true
            ->filter(fn($v) => $v === true)
            ->keys()
            ->map(fn($key) => $data[$key] ?? '')
            ->toArray();
    }
}
