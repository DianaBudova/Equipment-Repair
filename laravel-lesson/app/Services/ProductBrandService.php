<?php

namespace App\Services;

use App\Models\ProductBrand;

class ProductBrandService
{
    public function getAll()
    {
        return ProductBrand::all();
    }

    public function create(array $data)
    {
        return ProductBrand::create($data);
    }

    public function update(string $id, array $data)
    {
        ProductBrand::find($id)->update($data);
        return ProductBrand::find($id);
    }

    public function destroy($id)
    {
        ProductBrand::find($id)->delete();
    }

    public function getById($id)
    {
        return ProductBrand::find($id);
    }

    public function getByName($name)
    {
        return ProductBrand::where("name", $name)->first();
    }
}