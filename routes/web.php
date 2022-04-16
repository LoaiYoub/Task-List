<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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



// Route::get('app', function () {
//     return view('layout.app');
// });

Route::get('tasks', [TaskController::class, 'index']);
Route::post('store', [TaskController::class, 'store']);
Route::post('delete/{id}', [TaskController::class, 'delete']);
Route::post('update/{id}', [TaskController::class, 'update']);
