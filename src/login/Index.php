<?php
include('../../config.php');

/* Se existir email ou senha */
if(isset($_POST['email']) || isset($_POST['senha'])) {

    /* Verificando se o email está em branco */
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    /* Verificando se a senha esta em branco */
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        /* Verificando se no banco de dados tem o email e senha do usuario */
        $sql_code = "SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        /* Retornando quantidade de linhas do banco de dados com as informações iguais a do usuario */
        $quantidade = $sql_query->num_rows;

        /* Se a quantidade de linhas com as informações do usuario for 1 */
        if($quantidade == 1) {
            
            /* Mandar para tela principal */
            header("Location: /src/main/Index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O melhor site para assistir animes e filmes.">
    <!-- Link com o CSS -->
    <link rel="stylesheet" href="/src/login/Style.css" type="text/css">
    <title>Login</title>
</head>

<body>
    <form action="config.php" method="POST">
        <div class="container">
            <div class="title">
                <h1>Login</h1>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="email">Email ou Número de telefone:</label>
                    <input id="email" type="email" placeholder="Exemplo@mail.com" required>
                </div>

                <div class="input-box">
                    <label for="password">Digite sua senha:</label>
                    <input type="password" id="senha" name="password" placeholder="No minimo 8 caracteres" minlength="8"
                        required>
                </div>
            </div>

            <div class="remember">
                <div class="checkbox">
                    <input type="checkbox" id="scales" name="scales" checked>
                    <label for="scales">Lembrar de mim</label>
                </div>
                <div class="p-forget">
                    <p>Esqueceu sua senha?</p>
                </div>
            </div>
            <div class="btns-group">
                <div class="btn-signin">
                    <input type="submit" id="entrar" class="btn-signin" value="Entrar"></input>
                </div>

                <div class="text-signup">
                    <p class="p-signup" for="signup">Novo por aqui? Cadastre-se Agora!</p>
                </div>

                <div class="btn-signup">
                    <a class="btn-signup" name="signup" id="signup" 
                    href="/src/cadastro/Index.html">Cadastrar-se</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>