<?php

//echo é o comando para escrever 
//<br> pula linha 
//materia de quarta 
echo 'Olá mundo <br>';
echo 'Bem Vindo ao Sesi Senai <br>';
echo '______________________________<br>';
echo '~~Informação Pessoais Do Aluno~~<br> ';
echo '---------------------------------------<br>';
echo 'Nome: Leticia Moreira Grando <br>';
echo 'Data Nascimento: 12/03/2008 <br>';
echo 'Natalidade: Tatui-SP <br>';
echo 'Número: (015)99297-3582<br>';
echo 'Email: leticia.grando.senai404@gmail.com <br>';
echo 'CPF: 098543762-54<br>';
echo 'Rm: 9845<br>';
echo '---------------------------------------<br>';
echo 'Nome: Emanuelly Brandi Cristine <br>';
echo 'Data Nascimento: 10/01/2008 <br>';
echo 'Natalidade: Tatui-SP <br>';
echo 'Número: (015)62849-7654<br>';
echo 'Email: emanuelly.brandi.senai404@gmail.com <br>';
echo 'CPF: 297453028-35<br>';
echo 'Rm: 0374<br>';
echo '---------------------------------------<br>';
echo 'Nome: Ana Vitoria Da Rocha Lourenço <br>';
echo 'Data Nascimento: 16/04/2008 <br>';
echo 'Natalidade: Jacuí-MG <br>';
echo 'Número: (011)4002-8922<br>';
echo 'Email: ana.lourenco.senai404@gmail.com <br>';
echo 'CPF: 284530963-98<br>';
echo 'Rm: 6384<br>';
echo '<br>';

//divisao de materia (Materia de sexta )

echo '__________________________________<br><br>';

//declarando variaves 
$nome= ' Leticia';
$numero= '(015)99297-3582';
$natalidade= 'Tatui-SP';
$data_nascimento= ' 12/03/2008';
$email= 'leticia.grando.senai404@gmail.com';
$cpf= ' 098543762-54';
$rm= ' 9845';
$cidade= 'Cerquilho-SP';

//exemplo
echo "Olá $nome, tudo bem ?. Bem vindo-a a $cidade.<br><br>";

// chamar a variavel 
echo '______________________________<br>';
echo 'Dados Pessoais<br>';
echo '-------------------------------------------<br>';
echo "Nome: $nome";
echo '<br>';
echo "Numero: $numero";
echo '<br>';
echo "Natalidade: $natalidade";
echo '<br>';
echo "Data de Nascimento: $data_nascimento";
echo '<br>';
echo "Email: $email";
echo '<br>';
echo "CPF: $cpf";
echo '<br>';
echo "RM: $rm";
echo '<br>';
echo '______________________________<br>';

//exemplo
echo "Obrigada pela atenção $nome";

?>