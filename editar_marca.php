<h1>Editar Marca</h1>
<?php
	$sql = "SELECT * FROM marca WHERE id_marca = ".$_REQUEST["id_marca"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=salvar_marca&acao=editar&id_marca=<?php print $_REQUEST["id_marca"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome da Marca</label>
		<input type="text" name="nome_marca" class="form-control" value="<?php print $row["nome_marca"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>
<?php
	} //fim do if
?>