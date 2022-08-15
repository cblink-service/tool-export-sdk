<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\Service\ToolExportSdk\Kernel;

use Cblink\Service\ToolExportSdk\Kernel\Exception\ToolExportException;
use Cblink\Service\ToolExportSdk\Kernel\Traits\HasHttpRequest;

/**
 * Class BaseClient.
 */
class BaseClient
{
    use HasHttpRequest;

    /**
     * @var ServiceContainer
     */
    protected $app;

    protected $config;

    /**
     * BaseClient constructor.
     * @param ServiceContainer $app
     */
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;

        $this->config = $app->config;
    }

    protected function getBaseOptions()
    {
        $options = [
            'base_uri' => method_exists($this, 'getBaseUri') ? $this->getBaseUri() : '',
            'timeout' => method_exists($this, 'getTimeout') ? $this->getTimeout() : 10.0,
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        return $options;
    }

    /**
     * 发送请求
     *
     * @param $method
     * @param $uri
     * @param array $params
     *
     * @return mixed
     */
    public function sendRequest($method, $uri, $params = [])
    {
        $data = array_merge($params, ['appid' => $this->config['appid']]);

        $response = $this->$method($this->url($uri), $data, $this->getBaseOptions());
        if ($response['err_code'] != 0) {
            throw new ToolExportException($response['err_msg']);
        }
        return $response;
    }

    /**
     * url
     *
     * @param string $uri
     * @return string
     */
    protected function url($uri = ''): string
    {
        return rtrim($this->config['base_url'], '/') . '/' . ltrim($uri, '/');
    }
}
