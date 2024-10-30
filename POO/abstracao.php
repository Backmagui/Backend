<?php

class Funcionario{
    public $nome = "Pedro";
    public $telefone = null;
    public $numFilhos = 7;

    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($filhos){
        $this->numFilhos = $filhos;
    }

    function modificarNome($novo_nome){
        $this->nome = $novo_nome;
    }
}

$y = new Funcionario();
echo $y -> resumirCadFunc();
echo '<hr>';

$y->modificarNumFilhos(5);
echo $y->resumirCadFunc();
echo '<hr>';

$x = new Funcionario();
$x->modificarNome('Gilmar');
echo $x->resumirCadFunc();
echo '<hr>';


?>