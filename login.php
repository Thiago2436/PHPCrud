<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Area Restrita</h2>
    <?php
    
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    
    ?>
    <form method="POST" action="valida.php">
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Digite seu usuario"><br><br>
        <label>Senha</label>
        <input type="text" name="senha" placeholder="Digite sua Senha"><br><br>
        
        <input type="submit" name="btnLogin" value="Acessar"><br><br>
    </form>    
    
</body>
</html>