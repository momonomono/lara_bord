<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", [App\Http\Controllers\MainController::class, 'todo'])->name("todo");
Route::post("/", [App\Http\Controllers\MainController::class, 'store'])->name("todo.store");

Route::get("/delete", [App\Http\Controllers\DeleteController::class, 'delete'])->name("todo.delete");