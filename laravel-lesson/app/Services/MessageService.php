<?php

namespace App\Services;

use App\Models\Message;

class MessageService
{
    public function getAll()
    {
        return Message::all();
    }

    public function create(array $data)
    {
        return Message::create($data);
    }

    public function update(string $id, array $data)
    {
        Message::find($id)->update($data);
        return Message::find($id);
    }

    public function destroy($id)
    {
        Message::find($id)->delete();
    }

    public function getById($id)
    {
        return Message::find($id);
    }
}