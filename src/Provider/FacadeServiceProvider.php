<?php

namespace YukataRm\Laravel\Logger\Provider;

use Illuminate\Support\ServiceProvider;

use YukataRm\Laravel\Logger\Facade\Manager;
use YukataRm\Laravel\Logger\Facade\Logger;

/**
 * Facade Service Provider
 * 
 * @package YukataRm\Laravel\Logger\Provider
 */
class FacadeServiceProvider extends ServiceProvider
{
    /**
     * register Facade
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Logger::class, function () {
            return new Manager();
        });
    }
}
