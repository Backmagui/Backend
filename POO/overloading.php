<?php

class funcionario{

    public $nome = null;
    public $telefone = null;
    public $num_filho = null;
    public $cargo = null;
    public $salario = null;

    //setters overloading
    function__set($atributos, $valores){
        $this->$atributos = $valores;
    }

    
    //getters
    function__get($atributos){
        return $this->$atributos;
    }

    function resumirCadFunc(){
        // return "$this->nome possui $this->num_filho filho(s)";
        return $this->__get('nome')." possui ".$this->__get('num_filho')." filhos(s)";
    }
}

$y = new funcionario();
$y->__set('nome', 'Guilherme');
$y->__set('num_filho',6);
echo $y->resumirCadFunc();


?>