<?php
session_start();
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
    if ($btnLogin){
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        echo " $usuario - $senha ";
        if((!empty($usuario)) AND (!empty($senha))){

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

