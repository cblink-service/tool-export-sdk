<?php

namespace Cblink\Service\ExportTool\Kernel;

class BaseApi extends \Cblink\Service\Foundation\BaseApi
{
    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @param $returnRaw
     * @return array|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(string $method = 'POST', string $url = '', array $options = [], $returnRaw = false)
    {
        // 自动填充配置项的appid 后期将会移除
        if (isset($this->app->config['appid'])) {

            $structure = in_array(strtoupper($method), ['GET', 'DELETE']) ? 'query' : 'json';

            if (!isset($options[$structure]['appid'])) {
                $options[$structure]['appid'] = $this->app->config['appid'];
            }
        }

        return parent::request($method, $url, $options, $returnRaw);
    }
}