<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerPostPolicies();

        //
    }

    public function registerPostPolicies()
    {
        //-- DASHBOARD --//
        Gate::define('show-dashboard', function ($user) {
            return $user->hasAccess(['show-dashboard']);
        });

        //-- DATA GURU--//
        Gate::define('browse-teacher', function ($user) {
            return $user->hasAccess(['browse-teacher']);
        });
        Gate::define('add-teacher', function ($user) {
            return $user->hasAccess(['add-teacher']);
        });
        Gate::define('detail-teacher', function ($user) {
            return $user->hasAccess(['detail-teacher']);
        });
        Gate::define('edit-teacher', function ($user) {
            return $user->hasAccess(['edit-teacher']);
        });
        Gate::define('delete-teacher', function ($user) {
            return $user->hasAccess(['delete-teacher']);
        });

        //-- DATA MURID--//
        Gate::define('browse-student', function ($user) {
            return $user->hasAccess(['browse-student']);
        });
        Gate::define('add-student', function ($user) {
            return $user->hasAccess(['add-student']);
        });
        Gate::define('detail-student', function ($user) {
            return $user->hasAccess(['detail-student']);
        });
        Gate::define('edit-student', function ($user) {
            return $user->hasAccess(['edit-student']);
        });
        Gate::define('delete-student', function ($user) {
            return $user->hasAccess(['delete-student']);
        });

        //-- DATA RAPOR--//
        Gate::define('browse-rapor', function ($user) {
            return $user->hasAccess(['browse-rapor']);
        });
        Gate::define('add-rapor', function ($user) {
            return $user->hasAccess(['add-rapor']);
        });
        Gate::define('detail-rapor', function ($user) {
            return $user->hasAccess(['detail-rapor']);
        });
        Gate::define('edit-rapor', function ($user) {
            return $user->hasAccess(['edit-rapor']);
        });
        Gate::define('delete-rapor', function ($user) {
            return $user->hasAccess(['delete-rapor']);
        });

    }
}
