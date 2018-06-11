<h1>Listar Pedido</h1>
<?php


	$sql = "SELECT * FROM pedido";
	
	$result = $conn->query($sql);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Hora e Data</th>";
		print "<th>Hora</th>";
		print "<th>Valor Recebido</th>";
		print "<th>Valor Total</th>";
		print "<th>Funcionario</th>";
		print "<th>Cliente</th>";
		print "<th>Produto</th>";
		print "<th>Ação</th>";
		print "</tr>";
		while( $row = $result->fetch_assoc() ){
			print "<tr>";
			print "<td>".$row["cod_pedido"]."</td>";
			print "<td>".$row["data_pedido"]."</td>";
			print "<td>".$row["hora_pedido"]."</td>";
			print "<td>".$row["subtotal_pedido"]."</td>";
			print "<td>".$row["total_pedido"]."</td>";
			print "<td>".$row["funcionario_codigo_funcionario"]."</td>";
			print "<td>".$row["cliente_cod_cliente"]."</td>";
			print "<td>".$row["produto_codigo_produto"]."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='index2.php?page=editar_pedido&cod_pedido=".$row["cod_pedido"]."'\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index2.php?page=salvar_pedido&acao=excluir&cod_pedido=".$row["cod_pedido"]."'\"><i class='fa fa-trash'></i></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>