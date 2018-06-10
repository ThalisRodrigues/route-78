<h1>Listar Cliente</h1>
<?php
	$sql = "SELECT * FROM cliente";
	
	$result = $conn->query($sql);
	
	$qtd = $result->num_rows;
	
		$nome  = @$_REQUEST["nome_cliente"];
	$tipo  = @$_REQUEST["tipo_cliente"];
	$cpf  = @$_REQUEST["cpf_cliente"];
	$telefone  = @$_REQUEST["telefone_cliente"];
	$email = @$_REQUEST["email_cliente"];
	$endereco = @$_REQUEST["endereco_cliente"];
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Codigo</th>";
		print "<th>Nome</th>";
		print "<th>Endereço</th>";
		print "<th>CPF</th>";
		print "<th>Telefone</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $result->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["codigo_cliente"]."</td>";
			print "<td>".$row["nome_cliente"]."</td>";
			print "<td>".$row["endereco_cliente"]."</td>";
			print "<td>".$row["cpf_cliente"]."</td>";
			print "<td>".$row["telefone_cliente"]."</td>";
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='index.php?page=edit_cliente&cod_cli=".$row["codigo_cliente"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=salvar_cliente&acao=excluir&cod_cli=".$row["codigo_cliente"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	
?>