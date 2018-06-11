
<h1>Cadastrar Funcionario</h1>
 

<form action="index2.php?page=salvar_funcionario&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="text"  name="nome_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Sexo</label>
		<input type="text" name="sexo_funcionario" class="form-control" >
	</div>	
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_funcionario" class="form-control" >
	</div>	
	<div class="form-group">
		<label>RG</label>
		<input type="text" name="rg_funcionario" class="form-control" >
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="telefone_funcionario" class="form-control" >
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email_funcionario" class="form-control" >
	</div>
	<div class="form-group">
		<label>Login</label>
		<input type="text" name="login_funcionario" class="form-control" >
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="senha_funcionario" class="form-control" >
	</div>
	
	<div class="form-group">
		<label>Situação do funcionario </label>   	
		<select name="situacao_funcionario" class="btn btn-secondary">
			<option >Ativo: Sim</option>
			<option >Ativo: Não</option>
		</select>
	</div>
	<div class="form-group">
		<label>Tipo</label>
		<input type="text" name="tipo_funcionario" class="form-control" >
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>