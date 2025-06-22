<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(){
        
        return view("todo.delete");
    }
}
