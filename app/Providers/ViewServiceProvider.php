<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class ViewServiceProvider extends ServiceProvider
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
        View::share('prueba', 'Este es un mensaje de prueba');
        
        View::composer(['welcome', 'posts.show'], CompanyComposer::class);

        /*
        View::composer(['welcome', 'posts.show'], function ($view) {
            $view->with('prueba2', 'Mensaje desde el View Composer');
        });
        */
    }
}
