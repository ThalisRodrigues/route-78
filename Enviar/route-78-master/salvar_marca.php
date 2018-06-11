<br>
<?php
	$marca = @$_REQUEST["nome_marca"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO marca (nome_marca)
			VALUES ('{$marca}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE marca SET nome_marca='{$marca}' WHERE id_marca=".$_REQUEST["id_marca"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM marca WHERE id_marca=".$_REQUEST["id_marca"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir pois esta marca ja esta associada a uma bike</div>"; 
			}
		break;
	}
?>









