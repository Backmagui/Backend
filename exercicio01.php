<?php

//Recebe as variáveis

$nota_1= 9;
$nota_2= 6;
$nota_3= 8;

//Calculando a média
$media= ($nota_1+$nota_2+$nota_3) / 3;

//Mostrando as notas
echo "As notas tiradas pelo aluno foram:, $nota_1, $nota_2, $nota_3<br>";
echo "A sua média foi: $media<br>";

//Falando se o aluno passou ou não
if ($media >= 7){
    echo "Você passou de ano!";
}
else {
    echo"Você está repravado!";
}



?>