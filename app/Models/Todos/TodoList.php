<?php

namespace App\Models\Todos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TodoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status_id',
        'detail'
    ];

    public static function findById($id)
    {
        return self::find($id);
    }

    public static function deleteById($id)
    {

        return self::where("id", $id)->delete();
    }
}
