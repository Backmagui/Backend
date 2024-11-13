<?php

require_once('class_professor.php');

$y = new professor();

$y->nome = 'pedro';
$y->disciplina = 'História';

echo $y->ensinar();
echo '<hr>';

echo $y->corrigir();
echo '<hr>';

echo $y->prepararAula();
echo '<hr>';

echo $y->simulaFazerChamada();
echo '<hr>';

echo $y->simulaCorrigirTarefa();
echo '<hr>';

?>