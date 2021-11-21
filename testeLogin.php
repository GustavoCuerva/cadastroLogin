<?php
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM dadosusuario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->http_build_query($sql);
        print_r($result);
    }else{
        //não acessa
        header('Location: index.php');
    }

?>