<h1>Editar Funcionario</h1>
<?php
	$sql = "SELECT * FROM funcionario WHERE codigo_funcionario =".$_REQUEST["cod_fun"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>



<form action="index2.php?page=salvar_funcionario&acao=editar&cod_fun=<?php print $row["codigo_funcionario"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_funcionario" class="form-control" value="<?php print $row["nome_funcionario"]; ?>">
	</div>
	<div class="form-group">
		<label>Sexo</label>
		<input type="text" name="sexo_funcionario" class="form-control" value="<?php print $row["sexo_funcionario"]; ?>">
	</div>	
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_funcionario" class="form-control" value="<?php print $row["cpf_funcionario"]; ?>">
	</div>	
	<div class="form-group">
		<label>RG</label>
		<input type="text" name="rg_funcionario" class="form-control" value="<?php print $row["rg_funcionario"]; ?>">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="telefone_funcionario" class="form-control" value="<?php print $row["telefone_funcionario"]; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email_funcionario" class="form-control" value="<?php print $row["email_funcionario"]; ?>">
	</div>
	<div class="form-group">
		<label>Login</label>
		<input type="text" name="login_funcionario" class="form-control" value="<?php print $row["login_funcionario"]; ?>">
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="senha_funcionario" class="form-control" value="<?php print $row["senha_funcionario"]; ?>">
	</div>
	<div class="form-group">
		<label>Situação</label>
		<select name="situacao_funcionario" class="btn btn-secondary" value="<?php print $row["situacao_funcionario"] ?>">
			<option >Ativo: Sim</option>
			<option >Ativo: Não</option>
		</select>
	</div>
	<div class="form-group">
		<label>Tipo</label>
		<input type="text" name="tipo_funcionario" class="form-control" value="<?php print $row["tipo_funcionario"]; ?>">
	</div>
		
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>
<?php
	} //final do if
?>