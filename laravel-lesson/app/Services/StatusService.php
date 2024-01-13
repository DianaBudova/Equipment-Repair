<?php

namespace App\Services;

use App\Models\Status;

class StatusService
{
    public function getAll()
    {
        return Status::all();
    }

    public function create(array $data)
    {
        return Status::create($data);
    }

    public function update(string $id, array $data)
    {
        Status::find($id)->update($data);
        return Status::find($id);
    }

    public function destroy($id)
    {
        Status::find($id)->delete();
    }

    public function getById($id)
    {
        return Status::find($id);
    }
}