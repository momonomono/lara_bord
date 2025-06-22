<?php

namespace App\Models\Todos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status_id',
        'detail'
    ];
}
