<?php

namespace App\Repositories\Eloquent;

use App\Models\Bank;
use App\Support\Bank\BankHelper;
use App\Repositories\Contracts\BankRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BankRepository implements BankRepositoryInterface
{

    public function prepareData(array $data)
    {
        return [
            'bank_name' => trim($data['bank_name']),
            'bank_code' => BankHelper::getBankCode($data['bank_name']),
            'account_name' => BankHelper::nonAccent($data['account_name']),
            'account_number' => $data['account_number'],
            'status' => $data['status'],
            'description' => $data['description'],
        ];
    }

    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return Bank::query()
            ->latest()
            ->paginate($perPage);
    }

    public function getPaginated(int $perPage = 10): LengthAwarePaginator
    {
        return Bank::query()
            ->latest()
            ->paginate($perPage);
    }

    public function getById(int $id)
    {
        return Bank::findOrFail($id);
    }

    public function getActiveBanks()
    {
        return Bank::where('status', 'active')->orderBy('bank_name')->get();
    }

    public function create(array $data)
    {
        $data = $this->prepareData($data);
        $bank = Bank::create($data);
        
        // Clear cache when new bank is created
        $this->clearBanksCache();
        
        return $bank;
    }

    public function update(int $id, array $data)
    {
        $bank = $this->getById($id);
        $bank->update($this->prepareData($data));
        
        // Clear cache when bank is updated
        $this->clearBanksCache();
        
        return $bank;
    }

    public function delete(int $id): bool
    {
        $bank = $this->getById($id);
        $deleted = (bool) $bank->delete();
        
        // Clear cache when bank is deleted
        if ($deleted) {
            $this->clearBanksCache();
        }
        
        return $deleted;
    }

    /**
     * Clear banks cache
     */
    private function clearBanksCache(): void
    {
        // Clear all banks cache patterns
        $cachePatterns = [
            'banks_paginated_*',
            'banks_active',
            'banks_all'
        ];
        
        foreach ($cachePatterns as $pattern) {
            // Note: This is a simple approach. For production, consider using cache tags
            \Illuminate\Support\Facades\Cache::flush();
            break; // Flush all cache for simplicity
        }
    }
}
