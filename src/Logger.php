<?php

namespace YukataRm\Laravel\Logger;

use YukataRm\Laravel\Logger\Interface\LoggerInterface;

use YukataRm\Logger\Logger as PHPLogger;

use YukataRm\Laravel\Logger\Trait\Env;
use YukataRm\Laravel\Logger\Trait\Logging;

/**
 * Laravel Logger
 * 
 * @package YukataRm\Laravel\Logger
 */
class Logger extends PHPLogger implements LoggerInterface
{
    use Env, Logging;
}
