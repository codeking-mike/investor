<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\WithdrawalController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/services', [HomeController::class, 'index']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/deposit', [DepositController::class, 'create'])->middleware('auth');
Route::post('/deposit', [DepositController::class, 'store']);
Route::get('/deposits/list', [DepositController::class, 'list'])->middleware('auth');
Route::get('/deposit/delete/{id}', [DepositController::class, 'delete']);
Route::get('/payment/{id}', [DepositController::class, 'payment'])->name('payment')->middleware('auth');
Route::put('/deposit/{id}', [DepositController::class, 'update']);

Route::post('/register', [HomeController::class, 'create']);
Route::post('/login', [HomeController::class, 'authenticate']);
Route::get('/logout', [HomeController::class, 'logout']);

//user dashboard
Route::get('/account', [AccountController::class, 'index'])->middleware('auth');
Route::get('/referal', [AccountController::class, 'referal'])->middleware('auth');


//Invetment
Route::get('/invest', [InvestmentController::class, 'index'])->middleware('auth');
Route::post('/invest/prem', [InvestmentController::class, 'prem']);
Route::post('/invest/begin', [InvestmentController::class, 'begin']);
Route::get('/invest/list', [InvestmentController::class, 'list'])->middleware('auth');

Route::get('/withdraw', [WithdrawalController::class, 'index'])->middleware('auth');
Route::post('/withdraw', [WithdrawalController::class, 'create'])->middleware('auth');
Route::get('/withdraw/bonus', [WithdrawalController::class, 'bonus'])->middleware('auth');

Route::get('/complete', [UserController::class, 'show'])->middleware('auth');
Route::get('/user/profile', [UserController::class, 'index'])->middleware('auth');
Route::put('/profile/{id}', [UserController::class, 'update'])->middleware('auth');
Route::put('/complete/{id}', [UserController::class, 'complete'])->middleware('auth');





