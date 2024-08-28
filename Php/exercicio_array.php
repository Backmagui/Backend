<?php

//Criando os números da lista
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<pre>';//Formatando em modo lista
//Escrevendo os números da lista
print_r ($numeros);
//Escrevendo os números que serão alterados
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo '<hr>';
echo '</pre>';

echo '<pre>';
//Alterando o valores
$numeros[0] = 100;
$numeros[4] = 500;
$numeros[9] = 1000;

//Escrevendo a lista
print_r ($numeros);

//Mostrando os números alterados
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo '<hr>';
echo '</pre>';

?>