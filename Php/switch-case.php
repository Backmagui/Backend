<?php

$corEscolhida = "vermelho";

switch ($corEscolhida) {
    case "vermelho":
        echo "Você escolheu a cor vermelha";
        break;
    
    case "azul":
        echo "Você escolheu a cor azul.";
        break;

    case "verde":
        echo "Você escoheu a cor verde.";
        break;

    default:
        echo "Cor não disponível.";
        break;
}

?>