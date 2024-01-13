<?php

namespace App\Http\Controllers;

use App\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $service;

    public function __construct(FeedbackService $service)
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
            'text' => 'required|max:255',
        ]);
        return response()->json($this->service->create($data));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'text' => 'required|max:255',
        ]);
        return response()->json($this->service->update($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}
