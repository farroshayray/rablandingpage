<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Spatie\MediaLibrary\Support\UrlGenerator\UrlGeneratorFactory;
use App\Media\CustomMediaUrlGenerator;

class AppServiceProvider extends ServiceProvider
{
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
        Paginator::useBootstrap();
        // app(UrlGeneratorFactory::class)->setCustomUrlGenerator(CustomMediaUrlGenerator::class);
    }
}
