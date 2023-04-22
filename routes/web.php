<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [Controller::class, 'home'])->name('home');

Route::get('/details', [Controller::class, 'details'])->name('details');

Route::get('/client/profile', [Controller::class, 'pofile'])->middleware(['auth', 'verified'])->name('pofilee');

Route::get('/login/user', [Controller::class, 'login'])->name('loginUser');

Route::get('/signup', [Controller::class, 'signup'])->name('signupUser');

Route::get('/dashboard/admin', [Controller::class, 'admin'])->name('admin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
