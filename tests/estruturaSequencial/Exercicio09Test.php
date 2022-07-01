<?php

use Exercicios\estruturaSequencial\Exercicio09;
use PHPUnit\Framework\TestCase;

final class Exercicio09Test extends TestCase
{
    private int $celcius;

    protected function seTup() : void
    {
        $fahrenheit = 482;
        $this->celcius = Exercicio09::calculaCelcius($fahrenheit);
    }

    public function testIfFahrenheitIsBeignCalculatedCorrectly()
    {
        $this->assertEquals(250,$this->celcius);
    }
}