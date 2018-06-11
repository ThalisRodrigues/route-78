<h1>Cadastrar Produto</h1>
<form action="index2.php?page=salvar_bike&acao=cadastrar" method="POST">
	
	<div class="row">
		<div class="form-group col-md-12">
			<label>Nome Produto</label>
			<input type="text" name="nome_produto" class="form-control">
			<br/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Descrição</label>
			<input type="text" name="descricao_produto" class="form-control">
			<br/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Estoque</label>
			<input type="text" name="estoque_produto" class="form-control">
			<br/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Valor</label>
			<input type="number" name="valor_produto" class="form-control">
			<br/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label>Situação Produto</label>
			<input type="text" name="situacao_produto" class="form-control">
			<br/>
		</div>
	</div>
	
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>