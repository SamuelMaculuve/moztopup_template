<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\RechargeTypeController;
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

Route::get('/payment', [Controller::class, 'payment'])->name('payment');

Route::get('/details/{id}', [Controller::class, 'details2'])->name('details2');

Route::get('/client/profile', [Controller::class, 'pofile'])->middleware(['auth', 'verified'])->name('pofilee');

Route::get('/login/user', [Controller::class, 'login'])->name('loginUser');

Route::get('/signup', [Controller::class, 'signup'])->name('signupUser');


Route::get('/dashboard/login', [DashboardController::class, 'loginPage'])->name('admin.login');

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {


    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin')->middleware('check-permission:admin|viewer|editor|deletor|creator');

    Route::get('/recharge/type', [DashboardController::class, 'rechargeTypes'])->name('rechargeTypes')->middleware('check-permission:admin|viewer|editor|deletor|creator');

    Route::get('/recharge', [DashboardController::class, 'recharge'])->name('recharge')->middleware('check-permission:admin|viewer|editor|deletor|creator');

    Route::get('/recharge/list', [DashboardController::class, 'listRecharge'])->name('listRecharge')->middleware('check-permission:admin|viewer|editor|deletor|creator');

    Route::get('/game', [DashboardController::class, 'createGame'])->name('createGame')->middleware('check-permission:admin|viewer|editor|deletor|creator');

    Route::get('/games/list', [DashboardController::class, 'listGames'])->name('listGames')->middleware('check-permission:admin|viewer|editor|deletor|creator');

    Route::get('/users/list', [DashboardController::class, 'users'])->name('users')->middleware('check-permission:admin|viewer|editor');

    Route::prefix('games')->group(function () {
        Route::post('/create', [GameController::class, 'store'])->name('new.game')->middleware('check-permission:admin|creator');
    });

    Route::prefix('recharges')->group(function () {
        Route::post('/create/recharge/type', [RechargeTypeController::class, 'store'])->name('new.recharge.type')->middleware('check-permission:admin|creator');

        Route::post('/create/recharge', [RechargeController::class, 'store'])->name('new.recharge')->middleware('check-permission:admin|creator');
    });

});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
