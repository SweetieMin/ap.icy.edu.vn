<?php

namespace App\Repositories\Eloquent;

use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Repositories\Contracts\LocationRepositoryInterface;

class LocationRepository implements LocationRepositoryInterface
{
    protected array $locationCache = [];

    protected function prepareDataBeforeCreate(array $data): array
    {
        $data['name'] = ucwords(strtolower(trim($data['name'])));
        $data['address'] = ucwords(strtolower(trim($data['address'])));
        $data['created_by'] = $data['created_by'] ?? Auth::id();
        return $data;
    }

    protected function prepareDataBeforeUpdate(array $data): array
    {
        $data['name'] = ucwords(strtolower(trim($data['name'])));
        $data['address'] = ucwords(strtolower(trim($data['address'])));
        $data['created_by'] = $data['created_by'] ?? Auth::id();
        return $data;
    }

    public function getLocationById(int $id): ?Location
    {
        return $this->locationCache[$id] ??= Location::with('createdBy')->findOrFail($id);
    }

    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return Location::with('createdBy')->orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function create(array $data)
    {
        $location = Location::create($this->prepareDataBeforeCreate($data));
        app(UserRepositoryInterface::class)->addBODWithNewLocation($location->id);
        return $location;
    }

    public function update(int $id, array $data)
    {
        $location = $this->getLocationById($id);
        $location->update($this->prepareDataBeforeUpdate($data));
        return $location;
    }

    public function delete(int $id)
    {
        return DB::transaction(function () use ($id) {

            $deleted = $this->getLocationById($id)->delete();
            
            // Clear cache after deletion
            if (isset($this->locationCache[$id])) {
                unset($this->locationCache[$id]);
            }
            
            return $deleted;
        });
    }

    public function showName(string $name): string
    {
        return Location::where('name', $name)->value('name');
    }
}
