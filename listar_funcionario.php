<h1>Listar Funcionario</h1>
<?php
	$sql = "SELECT * FROM funcionario";
	
	$result = $conn->query($sql);
	
	$qtd = $result->num_rows;
	
	
	
  
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Codigo</th>";
		print "<th>Nome</th>";
		print "<th>Sexo</th>";
		print "<th>CPF</th>";
		print "<th>RG</th>";
		print "<th>Telefone</th>";
		print "<th>Email</th>";
		print "<th>Tipo</th>";
		print "<th>Situacao</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $result->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["codigo_funcionario"]."</td>";
			print "<td>".$row["nome_funcionario"]."</td>";
			print "<td>".$row["sexo_funcionario"]."</td>";
			print "<td>".$row["cpf_funcionario"]."</td>";
			print "<td>".$row["rg_funcionario"]."</td>";			
			print "<td>".$row["telefone_funcionario"]."</td>";
			print "<td>".$row["email_funcionario"]."</td>";
			print "<td>".$row["tipo_funcionario"]."</td>";
			print "<td>".$row["situacao_funcionario"]."</td>";
			print "<td>".$row["tipo_funcionario"]."</td>";
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='index.php?page=edit_funcionario&cod_fun=".$row["codigo_funcionario"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=salvar_funcionario&acao=excluir&cod_fun=".$row["codigo_funcionario"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	
?>