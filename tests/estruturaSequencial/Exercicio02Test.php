<?php

use Exercicios\estruturaSequencial\Exercicio02;
use PHPUnit\Framework\TestCase;

final class Exercicio02Test extends TestCase
{
    private $exercicio02;

    protected function setUp() : void
    {
        $this->exercicio02 = new Exercicio02();
    }

    public function testIfExercicio02ReturnsNumeroInformadoCorrectly()
    {
        return $this->assertEquals("O número informado foi 2",$this->exercicio02->numero_informado(2));
    }
}