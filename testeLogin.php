<?php
    session_start();

    $login = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);

    if(isset($login['submit']) && !empty($login['email']) && !empty($login['senha'])){
        //acessa
        include_once('config.php');
        $email = $login['email'];
        $senha = md5($login['senha']);

        $sql = "SELECT * FROM dadosusuario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result)<1){
            //Não existe o login no bd
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            $_SESSION['msg'] = "Email ou Senha incorretos";
            header('Location: index.php');
        }else if(mysqli_num_rows($result)>0){
            //Existe o login no bd

            if (isset($login['lembre'])) {
                setcookie("email", $email, time()+(60*60*24*365), "/");
                setcookie("senha", $login['senha'], time()+(60*60*24*365), "/");
            }else{
                setcookie("email", $email, time()-(60*60*24*365), "/");
                setcookie("senha", $login['senha'], time()-(60*60*24*365), "/");
            }

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }else{
        //não acessa
        header('Location: index.php');
    }

?>