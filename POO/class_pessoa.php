<?php

class pessoa{
    public $nome;
    public $idade;
    protected $cpf;
    protected $endereco;

    public function apresentar(){
        return "O $this->nome pode fazer a apresentação";
    }

    public function caminhar(){
        return "$this->nome com $this->idade anos está caminhando";
    }

    public function falar(){
        return "$this->nome está falando";
    }

    private function comer(){
        return "$this->nome está comendo";
    }

    private function dormir(){
        return "$this->nome está dormindo";
    }

    public function simulaComer(){
        return $this->comer();
    }

    public function simulaDormir(){
        return $this->dormir();
    }
}

?>