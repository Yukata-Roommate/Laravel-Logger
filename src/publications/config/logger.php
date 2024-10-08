<?php

return [
    /*----------------------------------------*
     * Basic
     *----------------------------------------*/

    "is_rotate_log"  => env("YR_LOGGER_IS_ROTATE_LOG", true),
    "retention_days" => env("YR_LOGGER_RETENTION_DAYS", 7),

    "log_format"      => env("YR_LOGGER_LOG_FORMAT", "[%datetime%] %level%: %message%"),
    "log_format_json" => [
        "%datetime%",
        "%level%",
        "%message%",
    ],

    "base_directory" => env("YR_LOGGER_BASE_DIRECTORY", storage_path("logs")),
    "file"           => [
        "name_format" => env("YR_LOGGER_FILE_NAME_FORMAT", "Y-m-d"),
        "extension"   => env("YR_LOGGER_FILE_EXTENSION", "log"),
        "mode"        => env("YR_LOGGER_FILE_MODE", 0666),
        "owner"       => env("YR_LOGGER_FILE_OWNER", null),
        "group"       => env("YR_LOGGER_FILE_GROUP", null),
    ],

    "is_memory_real_usage" => env("YR_LOGGER_IS_MEMORY_REAL_USAGE", true),
    "is_memory_format"     => env("YR_LOGGER_IS_MEMORY_FORMAT", true),
    "memory_precision"     => env("YR_LOGGER_MEMORY_PRECISION", 2),
];
