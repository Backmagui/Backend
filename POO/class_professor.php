<?php

    class professor{

        public $nome;
        public $disciplina;
        private $cpf;
        protected $salario;

        public function ensinar(){
            return "$this->nome está ensinando";
        }

        public function corrigir(){
            return "$this->nome está corrigindo a prova";
        }

        public function prepararAula(){
            return "$this->nome está preparando a aula da $this->disciplina";
        }

        private function fazerChamada(){
            return "$this->disciplina precisa de ajuda";
        }

        private function corrigirTarefa(){
            return "$this->nome corrigiu a tarefa";
        }

        public function simulaFazerChamada(){
            return $this->fazerChamada();
        }

        public function simulaCorrigirTarefa(){
            return $this->corrigirTarefa();
        }
    }

?>