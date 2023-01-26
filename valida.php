<?php
session_start();
include_once("conex.php");
if ((isset($_POST['usuario'])) && (isset($_POST['senha']))){

}else{
    $_SESSION['loginerror'] = "Usuario ou senha invalida";
    header("Location: index.php");

}
       
?>

