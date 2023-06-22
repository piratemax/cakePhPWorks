<?php
declare(strict_types=1);
namespace App\Test\TestCase\Controller;
use App\Controller\HomeController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

class HomeControllerTest extends TestCase{
    use IntegrationTestTrait;
    public function testIndex()
    {
        $this->get('/home/index');
        $this->assertResponseOk();$this->assertEquals('test', $this->viewVariable('test'));
    }
}