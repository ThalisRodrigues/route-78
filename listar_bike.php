<h1>Listar Produto</h1>
<?php
	require ("conexao.php");
	$sql = "SELECT * FROM produto";
	
	$result = $conn->query($sql);
	
	$qtd = $result->num_rows;
	

	
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Codigo</th>";
		print "<th>Nome</th>";
		print "<th>Descrição</th>";
		print "<th>Estoque</th>";
		print "<th>Valor</th>";
		print "<th>Situação</th>";
		print "<th>Opção</th>";
	
		print "</tr>";
		while($row = $result->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["codigo_produto"]."</td>";
			print "<td>".$row["nome_produto"]."</td>";
			print "<td>".$row["descricao_produto"]."</td>";
			print "<td>".$row["estoque_produto"]."</td>";
			print "<td>".$row["valor_produto"]."</td>";
			print "<td>".$row["situacao_produto"]."</td>";
			print "<td>
			 

			<button class='btn btn-success' onclick=\"location.href='pedido.php?acao=add&id=".$row["codigo_produto"]."';\"><i class='fa fa-add'></i></button>

					<button class='btn btn-success' onclick=\"location.href='index.php?page=edit_bike&cod_bike=".$row["codigo_produto"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=salvar_bike&acao=excluir&cod_bike=".$row["codigo_produto"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	
?>