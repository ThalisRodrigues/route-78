<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banc = "route78";
	
	$conn = @mysqli_connect($host, $user, $pass) or die ("Erro ao conectar com o Servidor");
	$sql_banco = mysqli_select_db($conn,$banc);
	
?>

