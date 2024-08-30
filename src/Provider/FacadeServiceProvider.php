<?php

namespace YukataRm\Laravel\Logger\Provider;

use YukataRm\Laravel\Provider\FacadeServiceProvider as BaseServiceProvider;

use YukataRm\Laravel\Logger\Facade\Manager;
use YukataRm\Laravel\Logger\Facade\Logger;

/**
 * Facade Service Provider
 * 
 * @package YukataRm\Laravel\Logger\Provider
 */
class FacadeServiceProvider extends BaseServiceProvider
{
    /**
     * get facades
     * 
     * @return array<string, string>
     */
    protected function facades(): array
    {
        return [
            Logger::class => Manager::class
        ];
    }
}
