<?php


use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class TestExport extends TestCase
{
    protected $exportApp;

    protected function setUp(): void
    {
        parent::setUp();

        $this->exportApp = new \Cblink\ToolExportSdk\ToolExportApp([
            'appid' => '12345678'
        ]);
    }

    public function testCreateTask()
    {
        $response = $this->exportApp->export->createTask([
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
            'push_total' => '1',
            'task_id' => 15,
            'data' => [[1,2,3]], // 提交的数据
        ]);

        $this->assertTrue($response['err_code'] == 0);
    }

    public function testShowTask()
    {
        $response = $this->exportApp->export->showTask(15);

        $this->assertTrue($response['err_code'] == 0);
    }

}