<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'public::pages.index')->name('home');
Route::livewire('/learnmore', 'public::pages.learnmore')->name('learnmore');

Route::prefix('admin')->group(function () {
    Route::livewire('/', 'admin::pages.dashboard-page')->name('admin.dashboard');
});

Broadcast::routes();