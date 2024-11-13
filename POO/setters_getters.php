<?php

class funcionario{
    public $nome = null;
    public $telefone = null;
    public $num_filho = null;

    function setNome($nome){
        $this->nome = $nome;
    }

    function setFilho($num_filho){
        $this->num_filho = $num_filho;
    }
    
    //getters
    function getNome(){
    return $this->nome;
    }

    function getnum_filho(){
        return $this->num_filho;
    }

    function resumirCadFunc(){
        return "$this->nome possui $this->num_filho filho(s)";
    }
}

$y = new funcionario();
$y->setNome('José');
$y->setFilho(2);
// echo $y->resumirCadFunc();
echo $y->getnome().'possui '.$y->getnum_filho().' filho(s)';



?>