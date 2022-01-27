<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = true;

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public function history()
    {
        return $this->hasMany(History::class, 'task_id', 'id');
    }
}
