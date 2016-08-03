<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testAdditionOperation()
    {
        $stub = $this->createMock(App\Operation\Addition::class);

        $stub->method('calculate')->will($this->returnValue(4));

        $this->assertEquals(4, $stub->calculate([1, 3]));
        $this->assertEquals(4, $stub->calculate([2, 2]));
    }
}
