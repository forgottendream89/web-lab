<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notepadController;

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

Route::get('/', function () {
    return view('layout');

});
Route::get('/notepads', [NotepadController::class, 'index'])->name('notepads.index');
Route::post('/notepads', [NotepadController::class, 'store'])->name('notepads.store');
Route::get('/notepads/create', [NotepadController::class, 'create'])->name('notepads.create');
Route::get('notepads/{notepad}/edit', [NotepadController::class, 'edit'])->name('notepads.edit');
Route::put('notepads/{notepad}', [NotepadController::class, 'update'])->name('notepads.update');
Route::delete('notepads/{notepad}', [NotepadController::class, 'destroy'])->name('notepads.destroy');
Route::get('notepads/{notepad}/show', [NotepadController::class, 'show'])->name('notepads.show');