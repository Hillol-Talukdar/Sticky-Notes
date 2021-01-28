<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StickyNoteController;

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

Route::get('/stickynotes', [StickyNoteController::class, 'index']);


Route::get('/stickynotes/create', [StickyNoteController::class, 'create']);
Route::post('/stickynotes/create', [StickyNoteController::class, 'store']);

Route::get('/stickynotes/{id}/edit', [StickyNoteController::class, 'edit']);
Route::patch('/stickynotes/{id}/update', [StickyNoteController::class, 'update']);

Route::get('/stickynotes/{id}/delete', [StickyNoteController::class, 'delete']);


Route::get('/', function () {
    return view('welcome');
});
