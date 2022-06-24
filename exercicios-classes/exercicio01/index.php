<?php

// Classe Bola: Crie uma classe que modele uma bola:
// Atributos: Cor, circunferência, material
// Métodos: trocaCor e mostraCor

require_once('.\Bola.php');

$bola1 = new Bola("Azul","15.2","borracha");
echo $bola1;


$bola2 = new Bola("Preto","2","Couro");
echo $bola2;

$bola1->trocaCor("Amarelo");
echo "Trocando a cor da bola 1 para amarelo" . PHP_EOL;

echo "Cor nova da bola1: {$bola1->mostraCor()}";