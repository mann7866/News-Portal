<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Repositories\NewsRepository;

class AppServiceProvider extends ServiceProvider
{

    private array $register = [
        NewsInterface::class => NewsRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
