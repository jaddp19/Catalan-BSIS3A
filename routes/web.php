<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::livewire('/', 'public::pages.index')->name('home');
Route::livewire('/learnmore', 'public::pages.learnmore')->name('learnmore');
Route::livewire('/about', 'public::pages.about')->name('about');
Route::livewire('/menulist', 'public::pages.menu-list')->name('menulist');
Route::livewire('/reservation', 'public::pages.reservation')->name('reservation');

Route::livewire('/login', 'public::pages.auth.login')->name('login');
Route::livewire('/register', 'public::pages.auth.register')->name('register');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::livewire('/dashboard', 'admin::pages.dashboard-page')->name('admin.dashboard');

    //users
    Route::livewire('/users', 'admin::pages.user.view-user')->name('admin.user.view');
    Route::livewire('/users/create', 'admin::pages.user.create-user')->name('admin.user.create');
    Route::livewire('/users/edit/{user}', 'admin::pages.user.edit-user')->name('admin.user.edit');

    //roles
    Route::livewire('/roles', 'admin::pages.role.view-role')->name('admin.role.view');
    Route::livewire('/roles/create', 'admin::pages.role.create-role')->name('admin.role.create');
    Route::livewire('/roles/edit/{role}', 'admin::pages.role.edit-role')->name('admin.role.edit');

    //services
    Route::livewire('/services', 'admin::pages.service.view-service')->name('admin.service.view');
    Route::livewire('/services/create', 'admin::pages.service.create-service')->name('admin.service.create');
    Route::livewire('/services/edit/{service}', 'admin::pages.service.edit-service')->name('admin.service.edit');
});

Broadcast::routes();