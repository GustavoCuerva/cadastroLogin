<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM dadosusuario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);
        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result)<1){
            //Não existe o login no bd
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        }else if(mysqli_num_rows($result)>0){
            //Existe o login no bd
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }else{
        //não acessa
        header('Location: index.php');
    }

?>