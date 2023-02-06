<?php
session_start();
include_once("conex.php");
if ((isset($_POST['usuario'])) && (isset($_POST['senha']))){
//sql injection
    $usuario = mysqli_real_escape_string($conn, $_POST  ['usuario']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);
//Buscar usuario no banco de dados 
$sql ="SELECT * FROM Usuario WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);    
    
    if (empty($resultado)){
        $_SESSION['loginerro'] = "User ou Senha Invalido";
        header("Location: index.php");
    }elseif(isset($resultado)){
        header("Location: cadastro.php");
    }

}else{
    $_SESSION['loginerror'] = "Usuario ou senha invalida";
    header("Location: index.php");

}
       
?>
