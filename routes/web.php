<?php

use App\Models\Support;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::get('/history', [HomeController::class, 'history'])->middleware('auth');
Route::get('/notification', [HomeController::class, 'notification'])->middleware('auth');
Route::get('/support', [HomeController::class, 'support'])->middleware('auth');

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

Route::get('/complete', [UserController::class, 'show'])->middleware('auth');


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/users', [AdminController::class, 'users'])->middleware('auth');
Route::get('/edituser/{id}', [AdminController::class, 'edituser'])->middleware('auth');
Route::get('/deleteuser/{id}', [AdminController::class, 'delete']);
Route::get('/switch/{id}', [AdminController::class, 'switchuser']);
Route::put('/updateuser/{id}', [AdminController::class, 'updateuser'])->middleware('auth');
Route::get('/admin/deposit', [AdminController::class, 'deposit'])->middleware('auth');
Route::get('/deletedeposit/{id}', [AdminController::class, 'deletedeposit']);
Route::get('/viewpop/{id}', [AdminController::class, 'viewpop'])->middleware('auth');
Route::get('/confirm/{id}', [AdminController::class, 'confirm']);
Route::get('/admin/invest', [AdminController::class, 'invest'])->middleware('auth');
Route::get('/viewinvest/{id}', [AdminController::class, 'viewinvest'])->middleware('auth');
Route::put('/updateinvest/{id}', [AdminController::class, 'updateinvest'])->middleware('auth');
Route::get('/deleteinvest/{id}', [AdminController::class, 'deleteinvest']);
Route::get('/admin/withdrawal', [AdminController::class, 'withdrawal'])->middleware('auth');
Route::get('/viewwithdrawal/{id}', [AdminController::class, 'viewwithdrawal'])->middleware('auth');
Route::get('/complete/{id}', [AdminController::class, 'complete'])->middleware('auth');

Route::get('/admin/bonus', [AdminController::class, 'bonus'])->middleware('auth');
Route::get('/viewbonus/{id}', [AdminController::class, 'viewbonus'])->middleware('auth');
Route::get('/completebonus/{id}', [AdminController::class, 'completebonus'])->middleware('auth');


