<h1>Editar Produto</h1>
<?php
	$sql = "SELECT * FROM produto WHERE codigo_produto=".$_REQUEST["cod_bike"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>

	
	
<form action="index2.php?page=salvar_bike&acao=editar&cod_bike=<?php print $row["codigo_produto"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_produto" class="form-control"value="<?php print $row["nome_produto"]; ?>">
	</div>
	<div class="form-group">
		<label>Descrição do Produto</label>
		<input type="text" name="descricao_produto" class="form-control"value="<?php print $row["descricao_produto"]; ?>">
	</div>
	<div class="form-group">
		<label>Estoque Produto</label>
		<input type="text" name="estoque_produto" class="form-control"value="<?php print $row["estoque_produto"]; ?>">
	</div>
	<div class="form-group">
		<label>Valor do Produto</label>
		<input type="number" name="valor_produto" class="form-control"value="<?php print $row["valor_produto"]; ?>">
	</div>
	<div class="form-group">
		<label>Situação do Produto</label>
		<input type="text" name="situacao_produto" class="form-control"value="<?php print $row["situacao_produto"]; ?>">
	</div>
	

	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	} //final do if, muito safa morou
?>