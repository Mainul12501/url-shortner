<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\ViewController;
use App\Http\Controllers\Logics\ShortUrlController;

Route::get('/', [ViewController::class, 'index'])->name('home');


Route::post('/short-url', [ShortUrlController::class, 'store'])->name('short-url');
Route::get('/shorten-url/{shortUrl}', [ShortUrlController::class, 'show'])->name('shorten-url');
Route::get('/u/{shortUrl}', [ShortUrlController::class, 'redirectPage'])->name('redirect-url');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');

    Route::get('/show-link-list', [ViewController::class, 'showLinkList'])->name('show-link-list');
    Route::get('/delete-url/{shortUrl}', [ShortUrlController::class, 'destroy'])->name('delete-url');
    Route::get('/tc/{shortUrl}', [ShortUrlController::class, 'totalClick'])->name('total-clicks');
});
