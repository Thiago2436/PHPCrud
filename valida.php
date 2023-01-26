<?php
session_start();
include_once("conex.php");
if ((isset($_POST['usuario'])) && (isset($_POST['senha']))){

    $usuario = mysqli_real_escape_string($conn, $_POST  ['usuario']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);
    

}else{
    $_SESSION['loginerror'] = "Usuario ou senha invalida";
    header("Location: index.php");

}
       
?>

