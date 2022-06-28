<?php

use Exercicios\EstruturaSequencial\Exercicio03;
use PHPUnit\Framework\TestCase;

final class Exercicio03Test extends TestCase
{
    private int $soma;

    public function seTup() : void
    {
        $a = 15;
        $b = 20;

        $somador = new Exercicio03();
        $this->soma = $somador->soma($a,$b);
    }

    public function testIfExercicio03ReturnsCorreclySum()
    {
        $this->assertEquals(35,$this->soma);
    }

}