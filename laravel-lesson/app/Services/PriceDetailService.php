<?php

namespace App\Services;

use App\Models\PriceDetail;

use function Laravel\Prompts\alert;

class PriceDetailService
{
    public function getAll()
    {
        return PriceDetail::all();
    }

    public function create(array $data)
    {
        return PriceDetail::create($data);
    }

    public function update(string $id, array $data)
    {
        PriceDetail::find($id)->update($data);
        return PriceDetail::find($id);
    }

    public function destroy($id)
    {
        PriceDetail::find($id)->delete();
    }

    public function getById($id)
    {
        return PriceDetail::find($id);
    }

    public function getByName(string $detail)
    {
        return PriceDetail::where('detail', $detail)->first();
    }
}