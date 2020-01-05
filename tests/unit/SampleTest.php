<?php

class SampleTest extends \PHPUnit\Framework\TestCase
{

    public function testTrueAssertsToTrue()
    {
        $test = true;
        $this->assertTrue($test);
    }
}