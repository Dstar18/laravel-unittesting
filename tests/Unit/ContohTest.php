<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ContohTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_equalsUnit(){
        $data = 'hello world';

        $this->assertEquals($data, 'hello world');
    }
}
