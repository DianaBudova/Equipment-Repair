<?php

namespace App\Services;

use App\Models\Feedback;

class FeedbackService
{
    public function getAll()
    {
        return Feedback::all();
    }

    public function create(array $data)
    {
        return Feedback::create($data);
    }

    public function update(string $id, array $data)
    {
        Feedback::find($id)->update($data);
        return Feedback::find($id);
    }

    public function destroy($id)
    {
        Feedback::find($id)->delete();
    }

    public function getById($id)
    {
        return Feedback::find($id);
    }
}