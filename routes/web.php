<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
// use App\Livewire\Tasks\Index;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::view('/', 'welcome')->name('welcome');

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::view('dashboard', 'dashboard')->name('dashboard');

        Route::view('profile', 'profile')->name('profile');

        // Route::get('/tasks/index', Index::class)->name('tasks.index');
    });


    require __DIR__ . '/auth.php';
});