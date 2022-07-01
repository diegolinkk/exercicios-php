<?php
//Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês.

namespace Exercicios\estruturaSequencial;

class Exercicio08
{
    public static function calculaSalario(float $valorHora, int $horasTrabalhadas) : float
    {
        return $valorHora * $horasTrabalhadas;
    }
}