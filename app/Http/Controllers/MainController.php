<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos\list;

class MainController extends Controller
{
    public function __construct()
    {
        
    }

    public function todo(){


        return view("todo.index");
    }

    public function store(Request $request){
        

        return redirect()
            ->route("todo")
            ->with("success", "Todo item created successfully!");
    }
}
