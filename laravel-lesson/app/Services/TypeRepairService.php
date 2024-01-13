<?php

namespace App\Services;

use App\Models\TypeRepair;

class TypeRepairService
{
    public function getAll()
    {
        return TypeRepair::all();
    }

    public function create(array $data)
    {
        return TypeRepair::create($data);
    }

    public function update(string $id, array $data)
    {
        TypeRepair::find($id)->update($data);
        return TypeRepair::find($id);
    }

    public function destroy($id)
    {
        TypeRepair::find($id)->delete();
    }

    public function getById($id)
    {
        return TypeRepair::find($id);
    }

    public function getByName($name)
    {
        return TypeRepair::where("name", $name)->first();
    }
}