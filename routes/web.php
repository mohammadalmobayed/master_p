<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HousingAController;
use App\Http\Controllers\HousingBController;
use App\Http\Controllers\HousingHidabController;
use App\Http\Controllers\Finance;
use App\Http\Controllers\HousingInfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.index');
});
Route::get('home', function () {
    return view('pages.home');
});
Route::get('Deanship', function () {
    return view('pages.deanship.deanship');
});
Route::get('Finance', function () {
    return view('pages.finance.finance');
});
Route::get('user', function () {
    return view('pages.users.user');
});
Route::get('Housing', function () {
    return view('pages.housing.Housing Al-Hidab');
});
Route::get('profile', function () {
    return view('pages.profile.profile');
});
Route::post('home', [LoginController::class, 'home'])->name('home.index');
Route::get('housingA', [HousingAController::class, 'index'])->name('housingA.index');
Route::get('housingB', [HousingBController::class, 'index'])->name('housingB.index');
Route::get('housingHidab', [HousingHidabController::class, 'index'])->name('housingHidab.index');
Route::get('housingInfo', [HousingInfoController::class, 'index'])->name('housingInfo.index');
Route::get('finance', [Finance::class, 'index'])->name('finance.index');
Route::get('users', [UserController::class, 'index'])->name('user.index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
