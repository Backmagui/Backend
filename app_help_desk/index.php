<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Landing-Page</title>
</head>
<body>
    <header>

        <div id="comeco">
            <center>
                <h1 class="welcome">Seja Bem-vindo</h1>
                <h3>Cadastre-se e receba nossas promoções</h3>
            </center>
        </div>
        <div>
            <a href="entrar.php">
                <button class="botao_login" type="submit" action="entrar.php">Login</button>
            </a>
        </div>
    </header>
    <main>
            <div class="form">
                <form>
                    <center><img src="logo-2-net.png" width="150"></center>
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" placeholder="Digite seu nome" name="nome" required/>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="Digite seu e-mail" name="email" required/>
                    </div>
                    <div>
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" placeholder="(15)9999-8888" name="telefone" required/>
                    </div>
                    <div class="cadastro">
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
            <div id="mulher"><img src="correndo.jpg" width="500"></div>
    </main>
</body>
</html>