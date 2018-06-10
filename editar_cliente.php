<h1>Editar Cliente</h1>
<?php
	$sql = "SELECT * FROM cliente WHERE codigo_cliente =".$_REQUEST["cod_cli"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>

	
<form action="index.php?page=salvar_cliente&acao=editar&cod_cli=<?php print $row["codigo_cliente"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome Cliente</label>
		<input type="text" name="nome_cliente" class="form-control" value="<?php print $row["nome_cliente"]; ?>">
	</div>	
	<div class="form-group">
		<label>Tipo Cliente</label>
		<input type="text" name="tipo_cliente" class="form-control" value="<?php print $row["tipo_cliente"]; ?>">
	</div>	
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_cliente" class="form-control" value="<?php print $row["cpf_cliente"]; ?>">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="telefone_cliente" class="form-control" value="<?php print $row["telefone_cliente"]; ?>">
	</div>
		
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email_cliente" class="form-control" value="<?php print $row["email_cliente"]; ?>">
	</div>
	<div class="form-group">
		<label>Endereço</label>
		<input type="text" name="endereco_cliente" class="form-control" value="<?php print $row["endereco_cliente"]; ?>">
	</div>	
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>
<?php
	} //final do if
?>