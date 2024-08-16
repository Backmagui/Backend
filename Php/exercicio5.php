<?php

 function mult($a){
    for ($i = 1; $i <= 10; $i++){
        $resultado = $a * $i;
        echo "$i x $a = $resultado <br>";
        
    }


}

$tabuada = mult(3);
echo $tabuada;
?>