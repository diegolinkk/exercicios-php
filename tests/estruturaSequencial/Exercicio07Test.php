<?php

use PHPUnit\Framework\TestCase;
use Exercicios\estruturaSequencial\Exercicio07;

final class Exercicio07Test extends TestCase
{
    private int $dobroQuadrado;
    protected function seTup() : void
    {
        $calculadora = new Exercicio07();
        $metros = 5;
        $this->dobroQuadrado = $calculadora->dobroAreaQuadrado($metros);
    }

    public function testSquareDoubleArea()
    {
        $this->assertEquals(50,$this->dobroQuadrado);
    }

}