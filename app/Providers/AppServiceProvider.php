<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Events\eventEmail;
use App\Listeners\listenerEmail;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [eventEmail::class => [listenerEmail::class]];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive() ;
    }
}
