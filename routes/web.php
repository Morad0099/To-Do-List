<?php

use App\Http\Controllers\active;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('landpage');
});
Route::get('/users', function () {
    return view('users');
});

// Route::get('/', [active::class, 'users']);
Route::get('/todo/data', [active::class, 'users_data']);
// Route::get('/todo/data', [active::class, 'users_data']);
Route::post('/send/todo/data', [active::class, 'store'])->name('send');

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin-panel');
})->middleware(['auth', 'verified', 'Admin'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
