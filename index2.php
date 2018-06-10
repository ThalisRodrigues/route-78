<?php
	session_start();
	include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Route-78</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<style>
			.nav-link{font-size: 1.5em !important;}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-default" style="background-color: #000000; border-color: #000;>
			<a class="navbar-brand" href="#"><i class="fa fa-3x fa-desktop"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index2.php">Home</a>
					</li>
					
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produto</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index2.php?page=cad_bike">Cadastrar</a>
							<a class="dropdown-item" href="index2.php?page=list_bike">Listar</a>
						</div>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionario</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index2.php?page=cad_funcionario">Cadastrar</a>
							<a class="dropdown-item" href="index2.php?page=list_funcionario">Listar</a>
						</div>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cliente</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index2.php?page=cad_cliente">Cadastrar</a>
							<a class="dropdown-item" href="index2.php?page=list_cliente">Listar</a>
						</div>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedido</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index2.php?page=cad_pedido">Cadastrar</a>
							<a class="dropdown-item" href="index2.php?page=list_pedido">Listar</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
					
						include("conexao.php");
						
						switch(@$_REQUEST["page"]){
							case "cad_bike":
								include("cadastrar_bike.php");
							break;
							case "list_bike":
								include("listar_bike.php");
							break;
							case "salvar_bike":
								include("salvar_bike.php");
							break;
							case "edit_bike":
								include("editar_bike.php");
							break;
							case "cad_marca":
								include("cadastrar_marca.php");
							break;
							case "list_marca":
								include("listar_marca.php");
							break;
							case "salvar_marca":
								include("salvar_marca.php");
							break;
							case "editar_marca":
								include("editar_marca.php");
							break;
							case "cad_pedido":
								include("cadastrar_pedido.php");
							break;
							case "list_pedido":
								include("listar_pedido.php");
							break;
							case "salvar_pedido":
								include("salvar_pedido.php");
							break;
							case "edit_pedido":
								include("editar_pedido.php");
							break;
							case "cad_cliente":
								include("cadastrar_cliente.php");
							break;
							case "list_cliente":
								include("listar_cliente.php");
							break;
							case "salvar_cliente":
								include("salvar_cliente.php");
							break;
							case "edit_cliente":
								include("editar_cliente.php");
							break;
							case "cad_funcionario":
								include("cadastrar_funcionario.php");
							break;
							case "list_funcionario":
								include("listar_funcionario.php");
							break;
							case "salvar_funcionario":
								include("salvar_funcionario.php");
							break;
							case "edit_funcionario":
								include("editar_funcionario.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>