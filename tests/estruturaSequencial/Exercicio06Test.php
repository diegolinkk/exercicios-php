<?php

use PHPUnit\Framework\TestCase;
use Exercicios\estruturaSequencial\Exercicio06;

final class Exercicio06Test extends TestCase
{
    private $circleArea;

    protected function seTup():void
    {
        //calculate
        $calculator = new Exercicio06();
        $radius = 2;
        $this->circleArea = $calculator->calculaAreaCirculo($radius);

        //round circle area precision 
        $this->circleArea = round($this->circleArea,2);


    }

    public function testTrue()
    {
        $this->assertEquals(12.57,$this->circleArea);
    }
}