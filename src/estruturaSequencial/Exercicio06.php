<?php
//Faça um Programa que peça o raio de um círculo, calcule e mostre sua área.

namespace Exercicios\estruturaSequencial;

class Exercicio06
{
    public function calculaAreaCirculo($raio) : float
    {
        $area = Pi() * ($raio **2);
        return $area;
    }
}
