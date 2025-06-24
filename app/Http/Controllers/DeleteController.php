<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos\TodoList;

class DeleteController extends Controller
{
    public function delete($id){

        if(empty($id)){
            return redirect()
                ->route("todo")
                ->with("msg", "IDがありません");
        }

        $data = TodoList::findById($id);

        if(empty($data)){
            return redirect()
                ->route("todo")
                ->with("msg", "データがありませんでした");
        }

        TodoList::deleteById($id);

        return redirect()
            ->route("todo")
            ->with("msg","成功しました");
    }
}
