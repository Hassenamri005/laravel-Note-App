<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;
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

Route::get('/', [NoteController::class, 'index']);

Route::get('/list', [NoteController::class, 'list']);

Route::view('/add', 'add');
Route::post('/add', [NoteController::class, 'add']);

Route::get('/delete/{id}', [NoteController::class, 'delete']);

Route::get('/edit/{id}', [NoteController::class, 'edit']);

