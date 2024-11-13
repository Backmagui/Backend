<?php

require_once('class_coordenador.php');

$y = new pessoa();
$y->nome = "Guilherme";
$y->idade = "19";

echo $y->apresentar();
echo '<hr>';

echo $y->caminhar();
echo '<hr>';

echo $y->falar();
echo '<hr>';

echo $y->simulaComer();
echo '<hr>';

echo $y->simulaDormir();

?>