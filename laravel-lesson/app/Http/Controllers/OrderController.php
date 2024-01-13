<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $service;

    public function __construct(OrderService $service)
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_surname' => 'required|string|max:255',
            'user_patronymic' => 'required|string|max:255',
            'user_phone' => 'required|string|max:255',
            'user_address' => 'required|string|max:255',
            'product_repair_id' => 'required|numeric',
            'price_detail_id' => 'required|numeric',
            'product_brand_id' => 'required|numeric',
            'type_repair_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'summaryPrice' => 'required|numeric',
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_surname' => 'required|string|max:255',
            'user_patronymic' => 'required|string|max:255',
            'user_phone' => 'required|string|max:255',
            'user_address' => 'required|string|max:255',
            'product_repair_id' => 'required|numeric',
            'price_detail_id' => 'required|numeric',
            'product_brand_id' => 'required|numeric',
            'type_repair_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'summaryPrice' => 'required|numeric',
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}