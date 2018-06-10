<h1>Listar Marca</h1>
<?php
	$sql = "SELECT * FROM marca";
	
	$result = $conn->query($sql);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Marca</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while( $row = $result->fetch_assoc() ){
			print "<tr>";
			print "<td>".$row["id_marca"]."</td>";
			print "<td>".$row["nome_marca"]."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='index.php?page=editar_marca&id_marca=".$row["id_marca"]."'\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=salvar_marca&acao=excluir&id_marca=".$row["id_marca"]."'\"><i class='fa fa-trash'></i></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>