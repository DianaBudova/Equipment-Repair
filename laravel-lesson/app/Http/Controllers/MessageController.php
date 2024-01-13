<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $service;

    public function __construct(MessageService $service)
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|numeric',
            'manager_id' => 'required|numeric',
            'text' => 'required|unique:messages|max:255',
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required|numeric',
            'manager_id' => 'required|numeric',
            'text' => 'required|string|max:255',
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}