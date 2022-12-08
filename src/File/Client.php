<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\Service\ExportTool\File;

use Cblink\Service\ExportTool\Kernel\BaseApi;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Client extends BaseApi
{
    /**
     * 获取文件的下载地址
     *
     * @param int $id  文件ID
     * @param array $params
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function download($id, array $params = [])
    {
        return $this->httpGet(sprintf('/api/file/%s/download', $id), $params);
    }
}
