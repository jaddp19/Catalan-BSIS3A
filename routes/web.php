<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;


Route::livewire('/', 'public::pages.index')->name('home');
Route::livewire('/learnmore', 'public::pages.learnmore')->name('learnmore');
Route::livewire('/about', 'public::pages.about')->name('about');
Route::livewire('/contact', 'public::pages.contact')->name('contact');
Route::livewire('/menulist', 'public::pages.menu-list')->name('menulist');
Route::livewire('/customize', 'public::pages.customize')->name('customize');

Route::livewire('/login', 'public::pages.auth.login')->name('login');
Route::livewire('/register', 'public::pages.auth.register')->name('register');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('home'); // send them back to homepage
})->name('logout');

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

    //menus
    Route::livewire('/menus', 'admin::pages.menu.view-menu')->name('admin.menu.view');
    Route::livewire('/menus/create', 'admin::pages.menu.create-menu')->name('admin.menu.create');
    Route::livewire('/menus/edit/{menu}', 'admin::pages.menu.edit-menu')->name('admin.menu.edit');

    //bookings
    Route::livewire('/bookings', 'admin::pages.booking.view-booking')->name('admin.booking.view');
    Route::livewire('/bookings/pending', 'admin::pages.booking.view-pending-booking')->name('admin.booking.pending');
    Route::livewire('/bookings/confirmed', 'admin::pages.booking.view-confirmed-booking')->name('admin.booking.confirmed');
    Route::livewire('/bookings/cancelled', 'admin::pages.booking.view-cancelled-booking')->name('admin.booking.cancelled');
    
});

Broadcast::routes();
