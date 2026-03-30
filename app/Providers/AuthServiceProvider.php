<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        \App\Models\User::class => \App\Policies\UserPolicy::class,
        \App\Models\Booking::class => \App\Policies\BookingPolicy::class,
        \App\Models\Menu::class => \App\Policies\MenuPolicy::class,
        \App\Models\Payment::class => \App\Policies\PaymentPolicy::class,
        \App\Models\BookingDetail::class => \App\Policies\BookingDetailPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Example gate if you want extra checks:
        // Gate::define('manage-users', fn ($user) => $user->hasRole('admin'));
    }
}
