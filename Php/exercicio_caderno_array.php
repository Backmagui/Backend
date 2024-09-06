<?php

$cadastro = [];//Criando array principal

$cadastro ['email'] = ['gui@gmail.com', 'gu@bol', 'ana@gmail', 'maria@gmail', 'luis@gmail'];
//Criando a sub array email

$cadastro ['nome'] = ['Guilherme', 'Augusto', 'Ana', 'Maria', 'Luis'];
//Criando a sub array nome

echo "<pre>";
print_r($cadastro);
echo "</pre>";
//Exibindo as duas sub array

echo $cadastro ["nome"] [3];
echo "<br>";
echo $cadastro ["nome"] [4];
//Exibindo os conteúdos específicos

echo "<hr>";
//Fazendo a linha e pulando espaço

echo $cadastro ["nome"] [2] = "Senai";
echo "<br>";
echo $cadastro ["email"] [0] = "aluno@senai.br"
//Alterando e imprimindo conteúdos específicos

?>