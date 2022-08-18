<?php

namespace Cblink\Service\ExportTool;

use Cblink\Service\Foundation\Container;

/**
 * @property Export\Client $export  导出
 */
class Application extends Container
{
    protected array $providers = [
        Export\ServiceProvider::class,
    ];
}