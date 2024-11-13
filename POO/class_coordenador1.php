<?php

class coordenador{

    public $nome;
    public $departamento;
    private $cpf;
    protected $salario;

    public function coordenarTurmas(){
        return "$this->nome está ensinando $this->departamento";
    }

    public function planejarAulas(){
        return "$this->nome está corrigindo a prova";
    }

    public function auxiliarProfessores(){
        return "$this->nome está auxiliando no $this->departamento";
    }

    private function definirHorarios(){
        return "$this->departamento precisa de ajuda";
    }

    private function organizarReunioes(){
        return "$this->nome iniciou uma reunião";
    }

    public function simulaDefiniHora(){
        return $this->definirHorarios();
    }
    
    public function simulaOrganizaReuniao(){
        return $this->organizarReunioes();
    }
}

?>