<?php

//Faça um Programa que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius.
// C = 5 * ((F-32) / 9).

namespace Exercicios\estruturaSequencial;

class Exercicio09
{
    static function calculaCelcius($fahrenheit)
    {
        $celcius = 5 * (($fahrenheit - 32) / 9);
        return $celcius;
    }
}