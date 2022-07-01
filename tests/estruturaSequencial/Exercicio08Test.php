<?php

use Exercicios\estruturaSequencial\Exercicio08;
use PHPUnit\Framework\TestCase;

final class Exercicio08Test extends TestCase
{
    private $salario;

    protected function seTup() : void
    {
        $valorHora = 10.25;
        $horasTrabalhadas = 220;

        $this->salario = Exercicio08::calculaSalario($valorHora,$horasTrabalhadas);
    }

    public function testIfSalaryIsBeignCaltulatedCorrectly()
    {
        $this->assertEquals( 2255.0,$this->salario);
    }
}