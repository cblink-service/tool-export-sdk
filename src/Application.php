<?php

namespace Cblink\Service\ExportTool;

use Cblink\Service\Foundation\Container;

/**
 * @property Task\Client $task  导出任务
 * @property File\Client $file  导出文件
 */
class Application extends Container
{
    protected array $providers = [
        Task\ServiceProvider::class,
        File\ServiceProvider::class,
    ];
}