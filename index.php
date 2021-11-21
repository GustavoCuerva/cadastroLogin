<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <form action="testeLogin.php" method="post" class="campoLogin">
        <h2 class="h2Login">Login</h2>
        <input type="email" name="email" placeholder="Email" class="email campoFormL"/>
        <input type="password" name="senha" placeholder="Senha" class="senha campoFormL"/>
        <input type="submit" name="submit" value="Login" class="btLogin"/>
        <a href="cadastro.php">Cadastrar-se</a>
    </form>
</body>
</html>