<?php

namespace Cblink\Service\ExportTool;

use Cblink\Service\Foundation\Container;

/**
 * @property Task\Client $task  导出任务
 */
class Application extends Container
{
    protected array $providers = [
        Task\ServiceProvider::class,
    ];
}