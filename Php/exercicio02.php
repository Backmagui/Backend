<?php

//Declarando Variáveis
$salario = 1000;
$hora_extra = 4;

//Vendo qual bônus o funcionário terá
if ($salario > 2000 and $hora_extra > 10){
    $bonus_1 = ($salario * 1.2);
    echo "Você recebeu um bônus de 20%, seu salário agora é de $bonus_1";
}
elseif($salario >= 2000 and $hora_extra > 5){
    $bonus_2 = ($salario * 1.1);
    echo "Você recebeu um bônus de 10%, seu salário agora é de $bonus_2"; 
}
else{
    echo "Você não recebeu bônus";
}



?>