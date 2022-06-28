<?php

use Exercicios\estruturaSequencial\Exercicio04;
use PHPUnit\Framework\TestCase;

final class Exercicio04Test extends TestCase
{
    private float $average1;
    private float $average2;

    protected function seTup():void
    {
        $calculator = new Exercicio04();
        $note1 = 5;
        $note2 = 5;
        $note3 = 5;
        $note4 = 5;
        $this->average1 = $calculator->mediaBimestral($note1,$note2,$note3,$note4); 


        $note5 = 3;
        $note6 = 4;
        $note7 = 5;
        $note8 = 6;
        $this->average2 = $calculator->mediaBimestral($note5,$note6,$note7,$note8); 
    }

    public function testIfAverageIsReturningCorrectlyWithEqualNotes()
    {
        $this->assertEquals(5.0,$this->average1);
    }

    public function testIfAverageIsReturningCorrectlyWithDiferentNotes()
    {
        $this->assertEquals(4.5,$this->average2);
    }

}