<?php

namespace App\Providers;

use App\Interfaces\ImageStorage;
use App\Utils\ImageLocalStorage;
use Illuminate\Support\ServiceProvider;

/**
 * Service provider responsible for binding storage implementations.
 */
class ImageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services into the container.
     */
    public function register(): void
    {
        $this->app->bind(ImageStorage::class, function () {
            return new ImageLocalStorage();
        });
    }
}