<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('login'));

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function (){
    Route::controller(ChatController::class)->group(function () {
        Route::get('/users', 'index')->name('users');
        Route::get('/chat/{receiverId}', 'chat')->name('chat');
        Route::post('/chat/{receiverId}/send', 'sendMessage');
        Route::post('/chat/typing', 'typing');
        Route::post('/online', 'setOnline');
        Route::post('/offline', 'setOffline');
    });
});
