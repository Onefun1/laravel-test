<?php

namespace App\Service\History;

class History
{
    public function add(int $id, string $message)
    {
        $historyRecord = new \App\Models\History();
        $historyRecord->task_id = $id;
        $historyRecord->message = $message;
        $historyRecord->save();
    }
}
