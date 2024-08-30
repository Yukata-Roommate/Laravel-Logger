<?php

namespace YukataRm\Laravel\Logger\Trait;

/**
 * Env trait
 * 
 * @package YukataRm\Laravel\Logger\Trait
 */
trait Env
{
    /**
     * get config or default
     * 
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    protected function config(string $key, mixed $default): mixed
    {
        return config("yukata-roommate.logger.{$key}", $default);
    }

    /**
     * get env is rotate log
     * 
     * @return bool
     */
    #[\Override]
    protected function envIsRotateLog(): bool
    {
        if (!function_exists("config")) return parent::envIsRotateLog();

        return $this->config("is_rotate_log", parent::envIsRotateLog());
    }

    /**
     * get env retention days
     * 
     * @return int
     */
    #[\Override]
    protected function envRetentionDays(): int
    {
        if (!function_exists("config")) return parent::envRetentionDays();

        return $this->config("retention_days", parent::envRetentionDays());
    }

    /**
     * get env log format
     * 
     * @return string
     */
    #[\Override]
    protected function envLogFormat(): string
    {
        if (!function_exists("config")) return parent::envLogFormat();

        return $this->config("log_format", parent::envLogFormat());
    }

    /**
     * get env log format json
     * 
     * @return array<string>
     */
    #[\Override]
    protected function envLogFormatJson(): array
    {
        if (!function_exists("config")) return parent::envLogFormatJson();

        return $this->config("log_format_json", parent::envLogFormatJson());
    }

    /**
     * get env base directory
     * 
     * @return string
     */
    #[\Override]
    protected function envBaseDirectory(): string
    {
        if (!function_exists("config")) return parent::envBaseDirectory();

        return $this->config("base_directory", parent::envBaseDirectory());
    }

    /**
     * get env file name format
     * 
     * @return string
     */
    #[\Override]
    protected function envFileNameFormat(): string
    {
        if (!function_exists("config")) return parent::envFileNameFormat();

        return $this->config("file.name_format", parent::envFileNameFormat());
    }

    /**
     * get env file extension
     * 
     * @return string
     */
    #[\Override]
    protected function envFileExtension(): string
    {
        if (!function_exists("config")) return parent::envFileExtension();

        return $this->config("file.extension", parent::envFileExtension());
    }

    /**
     * get env file mode
     * 
     * @return int
     */
    #[\Override]
    protected function envFileMode(): int
    {
        if (!function_exists("config")) return parent::envFileMode();

        return $this->config("file.mode", parent::envFileMode());
    }

    /**
     * get env file owner
     * 
     * @return string|null
     */
    #[\Override]
    protected function envFileOwner(): string|null
    {
        if (!function_exists("config")) return parent::envFileOwner();

        return $this->config("file.owner", parent::envFileOwner());
    }

    /**
     * get env file group
     * 
     * @return string|null
     */
    #[\Override]
    protected function envFileGroup(): string|null
    {
        if (!function_exists("config")) return parent::envFileGroup();

        return $this->config("file.group", parent::envFileGroup());
    }

    /**
     * get env whether real memory usage
     * 
     * @return bool
     */
    #[\Override]
    protected function envIsMemoryRealUsage(): bool
    {
        if (!function_exists("config")) return parent::envIsMemoryRealUsage();

        return $this->config("is_memory_real_usage", parent::envIsMemoryRealUsage());
    }

    /**
     * get env whether memory format
     * 
     * @return bool
     */
    #[\Override]
    protected function envIsMemoryFormat(): bool
    {
        if (!function_exists("config")) return parent::envIsMemoryFormat();

        return $this->config("is_memory_format", parent::envIsMemoryFormat());
    }

    /**
     * get env memory usage precision
     * 
     * @return int
     */
    #[\Override]
    protected function envMemoryPrecision(): int
    {
        if (!function_exists("config")) return parent::envMemoryPrecision();

        return $this->config("memory_precision", parent::envMemoryPrecision());
    }
}
