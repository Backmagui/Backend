<?php
    // echo "Bem-vindo, usuário foi cadastrado com sucesso";
    // echo "<hr>";
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // echo "Email: ";
    // echo $_POST ['email'];
    // echo '<br>';
    // echo 'Senha: ';
    // echo $_POST ['senha'];

    session_start();


    $usuario_autenticado = false;
    
    $usuario_cadastro = [

        ['email' => 'admin@senai.br','senha' => '12345'],
        ['email' =>'aluno@senai.br', 'senha' =>'abcde'],
        ['email' => 'suporte@senai.br', 'senha' => '1a2b3c']


    ];

    foreach($usuario_cadastro as $user){
        if ($user ['email'] == $_POST ['email'] AND $user ['senha'] == $_POST ['senha']){
            $usuario_autenticado = true;
        }

    }

    if ($usuario_autenticado == true){
        $_SESSION ['autenticado'] = 'SIM';
        echo "Usuário autenticado com sucesso";
        header('Location: painel.php');
        
    }
    else{
        // echo "Usuário ou senha incorreta";
        $_SESSION ['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }

?>