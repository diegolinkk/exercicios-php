<?php
//Faça um Programa que peça as 4 notas bimestrais e mostre a média.

namespace Exercicios\estruturaSequencial;

use phpDocumentor\Reflection\Types\Float_;
use PhpParser\Node\Expr\Cast\Double;

class Exercicio04
{
    public function mediaBimestral(int $nota1,int $nota2,int $nota3,int $nota4) : float
    {
        $soma = $nota1 + $nota2 + $nota3 + $nota4;
        $media = $soma / 4;
        
        return $media;
    }
}