<?php

use PHPUnit\Framework\TestCase;

class calculadoratestetdd extends TestCase
{
    public function testAdd()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(5, $calculadora->add(2, 3));
    }
}