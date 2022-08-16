<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\Service\ToolExportSdk\Export;

use Cblink\Service\ToolExportSdk\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 列表
     *
     * @param array $params
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function indexTask(array $params)
    {
        return $this->httpGet('/api/task', $params);
    }
    /**
     * 创建任务
     *
     * @param array $params
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createTask(array $params)
    {
        return $this->httpPost('/api/task', $params);
    }

    /**
     * 追加上传
     *
     * @param array $params
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function uploadAppendFile(array $params)
    {
        return $this->httpPost('/api/task/upload', $params);
    }

    /**
     * 订单状态查询
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showTask($id, array $params)
    {
        return $this->httpGet(sprintf('/api/task/%s', $id), $params);
    }

}
