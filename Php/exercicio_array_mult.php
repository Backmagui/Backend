<?php
//Declarando a tabela
$cadastro = [];

//Declarando as listas da tabela
$cadastro ['usuario'] = ['João', 'Maria', 'Pedro'];
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

//Imprimindo os valores da lista
echo '<pre>';
print_r($cadastro);
echo '</pre>';

//Alterando os valores da lista
$cadastro ['usuario'][1] = ['Ana'];
$cadastro ['senha'] [1] = ['efgh'];

echo '<hr>';

echo "A tabela foi alterada com sucesso";

echo '<hr>';

echo '<pre>';
print_r($cadastro);
echo '</pre>';

?>