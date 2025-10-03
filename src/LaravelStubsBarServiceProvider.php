<?php

declare(strict_types=1);

namespace Componist\LaravelStubs;

use Illuminate\Support\ServiceProvider;

class LaravelStubsBarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../stub/blade/site/page.blade.php' => resource_path('views/page/page.blade.php')
        ], 'componist-page-stub');

        $this->publishes([
            __DIR__.'/../stub/blade/site/layout.blade.php' => resource_path('views/layouts/app.blade.php'),
            __DIR__.'/../stub/php/site/layout.php' => app_path('View/AppLayout.php'),
        ], 'componist-page-layout');
    }
}