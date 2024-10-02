

<?php
    echo "Bem-vindo, usuário foi cadastrado com sucesso";
    echo "<hr>";
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo "Email: ";
    echo $_POST ['email'];
    echo '<br>';
    echo 'Senha: ';
    echo $_POST ['senha'];
?>