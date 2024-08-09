<?php

//Declarando as Variáveis
$cliente_1 = "Jorge";
$quantidade_gasta = 300;
$vip = "não";

//Vendo se o cliente recebe desconto ou não
if ($quantidade_gasta >= 500 or $vip=="Sim"){
    echo "Cliente com desconto aplicado";
}
else{
    echo "Cliente sem desconto";
}
?>