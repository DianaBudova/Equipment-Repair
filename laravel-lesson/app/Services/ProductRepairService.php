<?php

namespace App\Services;

use App\Models\ProductRepair;

class ProductRepairService
{
    public function getAll()
    {
        return ProductRepair::all();
    }

    public function create(array $data)
    {
        return ProductRepair::create($data);
    }

    public function update(string $id, array $data)
    {
        ProductRepair::find($id)->update($data);
        return ProductRepair::find($id);
    }

    public function destroy($id)
    {
        ProductRepair::find($id)->delete();
    }

    public function getById($id)
    {
        return ProductRepair::find($id);
    }

    public function getByName(string $name)
    {
        return ProductRepair::where('name', $name)->first();
    }
}
