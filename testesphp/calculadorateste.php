<?php

use PHPUnit\Framework\TestCase;

require_once 'calculadora.php';

class calculadorateste extends TestCase
{
    private $calculadora;

    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }

    public function testAdd()
    {
        $resultado = $this->calculadora->add(2, 3);
        $this->assertEquals(5, $resultado);
    }

    public function testSubtract()
    {
        $resultado = $this->calculadora->subtract(5, 3);
        $this->assertEquals(2, $resultado);
    }
}
