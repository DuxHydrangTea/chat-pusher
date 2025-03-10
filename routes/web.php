<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/{id}', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/login/{id}', [HomeController::class, 'login'])->name('login');

Route::post('/send-message/{id}', [HomeController::class, 'sendMessage'])->name('send_message');
