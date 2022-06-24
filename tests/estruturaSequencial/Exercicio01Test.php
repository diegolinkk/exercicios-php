<?php

use Exercicios\estruturaSequencial\Exercicio01;
use PHPUnit\Framework\TestCase;

final class Exercicio01Test extends TestCase
{
    private $exercicio01;

    protected function setUp():void
    {
        $this->exercicio01 = new Exercicio01;
    }

    public function testIfFunctionReturnsHelloWorldString()
    {
        return $this->assertEquals('alo, mundo',$this->exercicio01->alo_mundo());
    }

}