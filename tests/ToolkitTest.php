<?php

namespace CenarioWeb\ToolkitTests;

use PHPUnit\Framework\TestCase;
use CenarioWeb\Toolkit\Toolkit;

class ToolkitTest extends TestCase
{

    public function setUp()
    {
        $this->toolkit = new Toolkit;
    }

    public function testMethodReturnsOnlyNumbers()
    {
        $str = '999.999.999-99';

        $this->assertEquals(99999999999, $this->toolkit->numbersOnly($str));
    }
}