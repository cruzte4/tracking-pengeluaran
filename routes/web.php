<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    ExpenseController,
    IncomeController,
    TransactionController,
    ReportController,
    ProfileController
};

// Autentikasi
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Pengeluaran
Route::get('/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expenses', [ExpenseController::class, 'store']);

// Pemasukan
Route::get('/incomes/create', [IncomeController::class, 'create']);
Route::post('/incomes', [IncomeController::class, 'store']);

// Transaksi
Route::get('/transactions', [TransactionController::class, 'index']);

// Laporan
Route::get('/reports', [ReportController::class, 'index']);

// Profil
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile/update', [ProfileController::class, 'update']);