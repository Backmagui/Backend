
<?php

//Participantes: Guilherme da Mata e Augusto Ferrari

class aluno{
    public $nome = 'Pedro';
    public $idade = 27;
    public $curso = 'Engenharia';

    function dados_aluno(){
        return "$this->nome tem $this->idade cursando $this->curso";
    }

    function modificaCurso(){
        $this->curso = 'Programação';
        // $this->curso = $novo_curso;
    }

}

$y = new aluno();
echo $y->dados_aluno();
echo '<hr>';

$y->modificaCurso();
echo $y->dados_aluno();





?>