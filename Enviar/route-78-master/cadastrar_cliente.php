<h1>Cadastrar Cliente</h1>
<form action="index2.php?page=salvar_cliente&acao=cadastrar" method="POST">
	<div class="row">
		<div class="form-group col-md-12">
			<label>Nome Cliente</label>
			<input type="text" name="nome_cliente" class="form-control" >
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Tipo</label>
			<input type="text" name ="tipo_cliente" class="form-control" >
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>CPF</label>
			<input type="text" name="cpf_cliente" class="form-control" >
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Telefone</label>
			<input type="text" name="telefone_cliente" class="form-control" >
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Email</label>
			<input type="text" name="email_cliente" class="form-control" >
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Endereço</label>
			<input type="text" name="endereco_cliente" class="form-control" >
		</div>
	</div>		
	
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>
