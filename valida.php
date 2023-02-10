<?php
session_start();
include_once 'conex.php';

// Verifica se o usuário e a senha foram enviados via POST
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
  
  // Recupera as informações enviadas pelo usuário
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  
  // Cria a consulta SQL para verificar se o usuário e a senha estão corretos
  $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND senha = '" . $senha . "'";
  
  // Executa a consulta no banco de dados
  $result = mysqli_query($conn, $sql);
  
  // Verifica se a consulta retornou algum resultado
  if (mysqli_num_rows($result) > 0) {
    // Usuário e senha válidos
    header("Location: administrativo.php");
    exit;
  } else {
    // Usuário ou senha inválidos
    $_SESSION['loginErro'] = "Erro de Login ou Senha";
    header("location: index.php");
    exit;
  }
  
} else {
  // Usuário e senha não foram enviados via POST
  $_SESSION['loginErro'] = "Erro de Login ou Senha";
  header("location: index.php");
  exit;
}
?>
