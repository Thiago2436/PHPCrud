<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Sstilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
      <form method="POST" action="valida.php">
        <p><h1>LOGIN</h1></p>
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Digite seu usuario"><br><br>
        <label>Senha</label>
        <input type="text" name="senha" placeholder="Digite sua Senha"><br><br>
        
        <input type="submit" name="btnLogin" value="Acessar"><br><br>

        <p> Faça seu cadastro <a href="cadastro.php"> CLIQUE AQUI </a> </p>
    </form>  
       
    <?php

        if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }
    
    ?>
    </h1>
    
</body>
</html>