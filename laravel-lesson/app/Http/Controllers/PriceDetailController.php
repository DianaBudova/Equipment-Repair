<?php

namespace App\Http\Controllers;

use App\Services\PriceDetailService;
use App\Http\Controllers\Controller;
use App\Models\PriceDetail;
use Illuminate\Http\Request;

class PriceDetailController extends Controller
{
    protected $service;

    public function __construct(PriceDetailService $service)
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

    // public function showByName(Request $request)
    public function showByName(string $detail)
    {
        return response()->json($this->service->getByName($detail));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'order_id' => 'required|numeric',
            'price' => 'required|numeric',
            'detail' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img_path' => 'required|string|max:255',
            'brand_id' => 'required|numeric'
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'order_id' => 'required|numeric',
            'price' => 'required|numeric',
            'detail' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img_path' => 'required|string|max:255',
            'brand_id' => 'required|numeric'
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}