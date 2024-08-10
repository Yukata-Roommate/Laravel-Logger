<?php

namespace YukataRm\Laravel\Logger\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Logger Facade
 * 
 * @package YukataRm\Laravel\Logger\Facade
 * 
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface make(\YukataRm\Logger\Enum\LogLevelEnum $logLevel)
 * 
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface debug()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface info()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface notice()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface warning()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface error()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface critical()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface alert()
 * @method static \YukataRm\Laravel\Logger\Interface\LoggerInterface emergency()
 * 
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface debugJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface infoJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface noticeJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface warningJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface errorJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface criticalJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface alertJson()
 * @method static \YukataRm\Laravel\Logger\Interface\JsonLoggerInterface emergencyJson()
 * 
 * @method static void debugLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void infoLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void noticeLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void warningLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void errorLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void criticalLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void alertLog(mixed $message, mixed $value = null, bool $isJson = false)
 * @method static void emergencyLog(mixed $message, mixed $value = null, bool $isJson = false)
 * 
 * @see \YukataRm\Laravel\Logger\Facade\Manager
 */
class Logger extends Facade
{
    /** 
     * Facade Accessor
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
