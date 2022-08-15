<?php


namespace Cblink\Service\ToolExportSdk;


use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property Export\Client $export
 * Class ToolExportApp
 * @package Cblink\Service\ToolExportApp
 */
class ToolExportApp extends Container
{
    protected array $providers = [
        Export\ServiceProvider::class,
    ];


}