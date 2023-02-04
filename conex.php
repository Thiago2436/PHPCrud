<?php 

	$servidor = "localhost";
	$usuario = "root";
	$senha = "123456789";
	$dbname = "MusicLibrary";
	
	//Criar a conexao
	// deepcode ignore HardcodedCredential: <please specify a reason of ignoring this>
 $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
?>