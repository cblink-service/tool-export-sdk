<?php


namespace Cblink\Service\ToolExportSdk;


use Cblink\Service\ToolExportSdk\Kernel\ServiceContainer;

/**
 * @property Export\Client $export
 * Class ToolExportApp
 * @package Cblink\Service\ToolExportApp
 */
class ToolExportApp extends ServiceContainer
{
    /**
     * {@inheritdoc}
     */
    protected function getCustomProviders(): array
    {
        return [
            Export\ServiceProvider::class,
        ];
    }


}