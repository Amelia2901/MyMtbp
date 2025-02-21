<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\contact_message;
use Illuminate\Support\Carbon;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer('header', function ($view) {
            $user = Auth::user();
            $message = contact_message::all();

            $view->with([
                'user' => $user,
                'message' => $message,
            ]);
        });
    }
}