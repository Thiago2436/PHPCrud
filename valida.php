<?php
session_start();
include_once("conex.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
    if ($btnLogin){
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        echo " $usuario - $senha ";
        if((!empty($usuario)) AND (!empty($senha))){
            //Gerar senha e criptografar
            echo password_hash($senha, PASSWORD_DEFAULT);
            //pesquisar cusuario no B.D
        } else {
            $_SESSION['msg'] = "LOGIN E SENHA : INCORRETO";
            header("Location: login.php");
        }
    }
    else{
        $_SESSION['msg'] = "Pagina não encontrada";
        header("Location: login.php");
    }
?>

