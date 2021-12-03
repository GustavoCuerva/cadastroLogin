<?php
    
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
            print_r('Não existe');
        }else if(mysqli_num_rows($result)>0){
            print_r('Existe');         
        }
    }else{
        //não acessa
        header('Location: index.php');
    }

?>