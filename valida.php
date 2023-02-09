<?php
session_start();
 if ((isset($_POST['usuario'])) && (isset($_POST['senha']))){
    header("Location:administrativo.php");
 } else {
    $_SESSION['loginErro'] = "Erro de Login ou Senha";
    header("location:index.php");
 }
      
?>