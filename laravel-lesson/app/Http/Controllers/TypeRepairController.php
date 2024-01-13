<?php

namespace App\Http\Controllers;

use App\Services\TypeRepairService;
use App\Http\Controllers\Controller;
use App\Models\TypeRepair;
use Illuminate\Http\Request;

class TypeRepairController extends Controller
{
    protected $service;

    public function __construct(TypeRepairService $service)
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
            'text' => 'required|unique:type_repairs|max:255',
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'text' => 'required|string|max:255',
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}