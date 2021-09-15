<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[DodoController::class,'index']);
Route::post('/todo/create',[DodoController::class,'create'])->name('Todo.create');
Route::post('/todo/update',[DodoController::class,'update'])->name('Dodo.update');
//Route::post('/todo/delete',[DodoController::class,'delete'])->name('Todo.delete');
