<?php

namespace YukataRm\Laravel\Logger;

use YukataRm\Laravel\Logger\Interface\JsonLoggerInterface;

use YukataRm\Logger\JsonLogger as PHPJsonLogger;

use YukataRm\Laravel\Logger\Trait\Env;
use YukataRm\Laravel\Logger\Trait\Logging;

/**
 * Laravel JSON Logger
 * 
 * @package YukataRm\Laravel\Logger
 */
class JsonLogger extends PHPJsonLogger implements JsonLoggerInterface
{
    use Env, Logging;
}
