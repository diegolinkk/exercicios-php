<?php
#Faça um Programa que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.

namespace Exercicios\estruturaSequencial;

class Exercicio07
{
    public function dobro($numero)
    {
        return $numero * 2;
    }

    public function dobroAreaQuadrado($numero)
    {
        $area = $numero ** 2;
        return $this->dobro($area);
    }
}