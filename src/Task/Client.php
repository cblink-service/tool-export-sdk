<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\Service\ExportTool\Task;

use Cblink\Service\ExportTool\Kernel\BaseApi;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Client extends BaseApi
{
    /**
     * 列表
     *
     * @param array $params
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(array $params = [])
    {
        return $this->httpGet('/api/task', $params);
    }

    /**
     * 任务详情
     *
     * @param $id
     * @param array $params
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function show($id, array $params = [])
    {
        return $this->httpGet(sprintf('/api/task/%s', $id), $params);
    }

    /**
     * 创建任务
     *
     * @param array $params
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $params = [])
    {
        return $this->httpPost('/api/task', $params);
    }

    /**
     * 追加上传
     *
     * @param $id
     * @param array $params
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function appendUpload($id, array $params = [])
    {
        return $this->httpPost(sprintf('/api/task/%s/upload', $id), $params);
    }
}
