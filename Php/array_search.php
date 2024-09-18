<?php

$frutas = array("maçã", "banana", "laranja");

$nome_fruta = "abacate";

$indice = array_search($nome_fruta, $frutas);

if ($indice !== false){
    echo "$nome_fruta foi encontrada na posição: " .$indice;
}
else{
    echo "$nome_fruta não foi encontrada na lista de frutas";
}

?>