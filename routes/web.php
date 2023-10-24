<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;

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
Route::get('/item', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
Route::post('/item', [ItemController::class, 'store'])->name('item.store');
Route::get('/item/{Item}', [ItemController::class, 'show'])->name('item.show');
Route::get('/item/{Item}/edit', [ItemController::class, 'edit'])->name('item.edit');
Route::put('/item/{Item}', [ItemController::class, 'update'])->name('item.update');
Route::delete('/item/{Item}', [ItemController::class, 'destroy'])->name('item.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
