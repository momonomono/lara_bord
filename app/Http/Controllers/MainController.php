<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos\TodoList;

class MainController extends Controller
{
    
    public function todo(){
        $todolists = TodoList::all();

        return view("todo.index")
            ->with("todolists", 
            $todolists
        );
    }

    public function store(Request $request){
        
        TodoList::create([
            "title" => $request -> input("title"),
            "status_id" => $request -> input("status_id"),
            "detail" => $request -> input("detail")
        ]);

        return redirect()
            ->route("todo")
            ->with("success", "Todo item created successfully!");
    }
}
