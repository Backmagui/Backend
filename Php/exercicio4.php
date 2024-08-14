<?php

$i = 0;

for ($i = 1; $i <= 10; $i ++){

switch(true) {

    case($i <=3 ):
      $categoria = "categoria baixa";
      break;
      
    case($i >3 && $i<=7):
      $categoria = "categoria médio";
      break;
    
    case($i >=8 && $i<=10):
      $categoria = "está na categoria alto";
      break;
}

$par = ($i % 2 == 0) ? "par" : "impar";
echo "O número $i é $par e está na $categoria<br>";
}




?>.