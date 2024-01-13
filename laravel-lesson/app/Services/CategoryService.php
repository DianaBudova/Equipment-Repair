<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getAll()
    {
        return Category::all();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(string $id, array $data)
    {
        Category::find($id)->update($data);
        return Category::find($id);
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
    }

    public function getById($id)
    {
        return Category::find($id);
    }

    public function getByName($name)
    {
        return Category::where("name", $name)->first();
    }
}