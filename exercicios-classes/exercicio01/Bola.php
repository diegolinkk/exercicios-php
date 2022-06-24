<?php

class Bola{

    private $cor;
    private $circunferencia;
    private $material;

    public function __construct($cor,$circunferencia,$material)
    {
        $this->cor = $cor;
        $this->circunferencia = $circunferencia;
        $this->material = $material;
    }

    public function trocaCor($novaCor)
    {
        $this->cor = $novaCor;
    }

    public function mostraCor():string
    {
        return $this->cor;
    }

    public function __toString()
    {
        return "
            cor: {$this->cor}
            circunferência: {$this->circunferencia}
            material: {$this->material}
        " . PHP_EOL;
    }

}