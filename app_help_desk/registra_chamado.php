<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$textarea = $_POST['textarea'];

$texto = $titulo. ' | ' .$categoria. ' | ' .$textarea;

echo  $texto;

// fopen ('registro.txt', 'a');

// fwrite('registro.txt', '$texto');

// fclose('registro.txt');

?>