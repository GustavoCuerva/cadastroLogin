<?php
session_start();
?>

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
        <?php
            if (isset($_SESSION['msg'])) {
                echo "<p>".$_SESSION['msg']."</p>";
                unset($_SESSION['msg']);
            }
        ?>
        <input type="email" name="email" placeholder="Email" value="<?php
            if (isset($_COOKIE['email'])) {
                echo $_COOKIE['email'];
            }
        ?>" class="email campoFormL"/>
        <input type="password" name="senha" placeholder="Senha" value="<?php
            if (isset($_COOKIE['senha'])) {
                echo $_COOKIE['senha'];
            }
        ?>" class="senha campoFormL"/>
        <div class="lembre-se">
            <input type="checkbox" name="lembre" class="check-box" <?php
            if (isset($_COOKIE['email'])) {
                echo "checked";
            }
        ?>>
            <label for="lembre">Lembrar-se</label>
        </div>
        <input type="submit" name="submit" value="Login" class="btLogin"/>
        <a href="cadastro.php" class="cadastro">Cadastrar-se</a>
    </form>
</body>
</html>