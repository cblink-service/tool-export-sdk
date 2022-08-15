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
     * @var string
     */
    protected $base_url = 'http://127.0.0.1:9503';

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