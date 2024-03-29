<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service->getAll());
    }

    public function show(Request $request)
    {
        return response()->json($this->service->getById($request->id));
    }

    public function showByName(string $name)
    {
        return response()->json($this->service->getByName($name));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories,name,' . $id . '|max:255',
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}