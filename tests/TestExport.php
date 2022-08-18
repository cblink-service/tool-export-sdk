<?php


use PHPUnit\Framework\TestCase;

class TestExport extends TestCase
{
    protected $exportApp;

    protected function setUp(): void
    {
        parent::setUp();

        $this->exportApp = new \Cblink\Service\ExportTool\Application([
            'base_url' => 'http://127.0.0.1:9503',
            'appid' => 'xxxxxxxx',
        ]);
    }

    public function testCreateTask()
    {
        $response = $this->exportApp->export->createTask([
            'appid' => '12345678',
            'name' => 'test',
            'headers' => ['标题 1', '标题 2', '标题 3'],
            'file_name' => 'test001',
            'total' => 1,   // 标题
        ]);

        $this->assertTrue($response['err_code'] == 0);
    }

    public function testUploadAppendFile()
    {
        $response = $this->exportApp->export->uploadAppendFile([
            'appid' => '12345678',
            'push_total' => '1',
            'task_id' => 18,
            'data' => [[1,2,3]], // 提交的数据
        ]);

        $this->assertTrue($response['err_code'] == 0);
    }

    public function testShowTask()
    {
        $response = $this->exportApp->export->showTask(15, ['appid' => '12345678']);

        $this->assertTrue($response['err_code'] == 0);
    }

}