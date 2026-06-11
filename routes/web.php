<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RsvpController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Rute Tampilan Undangan Utama
Route::get('/', function (Request $request) {
    $guestName = $request->query('to', 'Tamu Undangan');
    return view('invitation', compact('guestName'));
});

// Rute API Backend untuk memproses Form RSVP
Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');

// Rute Login Admin
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Dashboard Admin (Hanya bisa diakses jika sudah login)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');