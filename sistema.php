<?php
    
    session_start();
    //print_r($_SESSION);
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }else{
        $logado = $_SESSION['email'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cadastro.css">
    <title>Sua Conta</title>
</head>
<body>
    <h1>Seja bem vindo</h1>
    <a href="sair.php" class="sair">Sair</a>
</body>
</html>