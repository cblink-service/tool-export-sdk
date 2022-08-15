<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\Service\ToolExportSdk\Export;

use Cblink\Service\ToolExportSdk\Kernel\BaseClient;

class Client extends BaseClient
{

    /**
     * 创建任务
     *
     * @param array $params
     * @return mixed
     * @throws \Cblink\Service\ToolExportSdk\Kernel\Exception\ToolExportException
     */
    public function createTask(array $params)
    {
        return $this->sendRequest('post', 'api/task', $params);
    }

    /**
     * 追加上传
     *
     * @param array $params
     * @return mixed
     * @throws \Cblink\Service\ToolExportSdk\Kernel\Exception\ToolExportException
     */
    public function uploadAppendFile(array $params)
    {
        return $this->sendRequest('post', 'api/task/upload', $params);
    }

    /**
     * 订单状态查询
     *
     * @param $id
     * @return mixed
     * @throws \Cblink\Service\ToolExportSdk\Kernel\Exception\ToolExportException
     */
    public function showTask($id)
    {
        return $this->sendRequest('get', sprintf('api/task/%s', $id));
    }

}
