<?php

use PHPUnit\Framework\TestCase; //Traz a classe TestCase do framework PHPUnit, que é usado para testes

require_once 'calculadora.php'; //Incluindo o arquivo calculadora.php

class calculadorateste extends TestCase //Cria-se uma classe calculadorateste estendendo a classe TestCase 
{
    private $calculadora; //Define-se a variável $calculadora como privada

    protected function setUp(): void //Prepara o ambiente de testes
    {
        $this->calculadora = new Calculadora(); //Chama a classe calculadora que recebe uma instância da classe Calculadora
    }

    public function testAdd() //Cria-se uma função pública chamdo testAdd
    {
        $resultado = $this->calculadora->add(2, 3); //Variável $resulatado recebe chamando a classe calculadora passando como parâmetro os números 2 e 3
        $this->assertEquals(5, $resultado); //Resultado é igual a 5
    }

    public function testSubtract() //Cria-se uma função pública chamado testSubtract
    {
        $resultado = $this->calculadora->subtract(5, 3); //Variável $resultado recebe chamando a classe calculadora passando como parâmetro os números 5 e 3
        $this->assertEquals(2, $resultado); //Resultado é igual a 2
    }
}
