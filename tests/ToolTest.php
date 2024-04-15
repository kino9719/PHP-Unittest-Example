<?php

namespace Demo\PhpUnittestExample\Tests;

use Demo\PhpUnittestExample\Tool;
use Exception;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ToolTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::setUp();
    }

    public function testAdd()
    {
        $tool = new Tool();
        $this->assertEquals(5, $tool->add(2, 3));
    }

    public function testGetEnv()
    {
        $this->assertEquals('testing', getenv('APP_ENV'));
    }

    public function testThrowException()
    {
        $this->expectException(Exception::class);

        $tool = new Tool();
        $tool->throwException();
    }

    public function testMockery()
    {
        $double = Mockery::mock(Tool::class, function (MockInterface $mock) {
            $mock->shouldReceive('add')
                ->once()
                ->with(2, 3)
                ->andReturn(200);
        });

        $result = $double->add(2, 3);
        $this->assertEquals(200, $result);
    }
}
