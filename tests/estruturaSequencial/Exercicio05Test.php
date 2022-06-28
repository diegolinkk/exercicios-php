<?php

use Exercicios\estruturaSequencial\Exercicio05;
use PHPUnit\Framework\TestCase;

final class Exercicio05Test extends TestCase
{
    private $centimeters;

    protected function seTup() :void
    {
        $centimetersCalculator = new Exercicio05();
        $meters = 15;
        $this->centimeters = $centimetersCalculator->conversorMetrosCentimetros($meters); 
    }

    public function testIfCentimetersIsReturningCorrectly()
    {
        $this->assertEquals(1500,$this->centimeters);
    }
}