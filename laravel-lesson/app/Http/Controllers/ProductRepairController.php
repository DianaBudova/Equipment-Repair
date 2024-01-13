<?php

namespace App\Http\Controllers;

use App\Services\ProductRepairService;
use App\Http\Controllers\Controller;
use App\Models\ProductRepair;
use Illuminate\Http\Request;

class ProductRepairController extends Controller
{
    protected $service;

    public function __construct(ProductRepairService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'category_id' => 'required|numeric',
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'category_id' => 'required|numeric',
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}