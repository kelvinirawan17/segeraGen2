<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Root
Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::resource('auth', AuthController::class);
Route::get('/auth', [AuthController::class, 'index'])->name('auth');
Route::post('/auth/login', [AuthController::class, 'login', 'before' => 'csrf', function () {
}])->name('auth.login');

// Dashboard
Route::resource('dashboard', DashboardController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
