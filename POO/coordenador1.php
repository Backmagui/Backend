<?php

require_once('class_coordenador1.php');

$y = new coordenador();

$y->nome = 'pedro';
$y->departamento = 'secretaria';

echo $y->coordenarTurmas();
echo '<hr>';

echo $y->planejarAulas();
echo '<hr>';

echo $y->auxiliarProfessores();
echo '<hr>';

echo $y->simulaDefiniHora();
echo '<hr>';

echo $y->organizarReunioes();
echo '<hr>';

?>