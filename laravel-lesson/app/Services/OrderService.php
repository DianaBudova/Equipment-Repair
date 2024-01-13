<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{
    public function getAll()
    {
        return Order::all();
    }

    public function create(array $data)
    {
        return Order::create($data);
    }

    public function update(string $id, array $data)
    {
        Order::find($id)->update($data);
        return Order::find($id);
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
    }

    public function getById($id)
    {
        return Order::find($id);
    }
}