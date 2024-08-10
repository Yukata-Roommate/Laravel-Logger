<?php

namespace YukataRm\Laravel\Logger\Trait;

/**
 * Logging trait
 * 
 * @package YukataRm\Laravel\Logger\Trait
 * 
 * @property-read \YukataRm\Logger\Enum\LogLevelEnum $logLevel
 */
trait Logging
{
    /**
     * whether logging
     *
     * @return bool
     */
    #[\Override]
    protected function isLogging(): bool
    {
        if (!parent::isLogging()) return false;

        if (!function_exists("config")) return false;

        if ($this->logLevel->isDebug() && !config("app.debug")) return false;

        return true;
    }
}
