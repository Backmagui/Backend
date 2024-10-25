<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$textarea = $_POST['textarea'];

$texto = $titulo. '#' .$categoria. '#' .$textarea.PHP_EOL;

header('location: consultar_chamado.php');

$arquivo = fopen('../../app_help_desk/registro.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

?>