<br>
<?php
	$data  = @$_REQUEST["data_pedido"];
	$hora = @$_REQUEST["hora_pedido"];
	$subtotal  = @$_REQUEST["subtotal_pedido"];
	$total  = @$_REQUEST["total_pedido"];
	$funcionario       = @$_REQUEST["funcionario_codigo_funcionario"];
	$cliente       = @$_REQUEST["cliente_codigo_cliente"];
	$produto      = @$_REQUEST["produto_codigo_produto"]; 			
	
	
	
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO pedido (data_pedido, hora_pedido, subtotal_pedido, total_pedido, funcionario_codigo_funcionario, cliente_codigo_cliente)
			VALUES
			('{$data}',
			'{$hora}',
			'{$subtotal}',
			'{$total}',
			'{$funcionario}',
			'{$cliente}'
			)";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE pedido SET
						data_pedido = '{$data}' ,
						hora_pedido = '{$hora}',
						subtotal_pedido = '{$subtotal}',
						total_pedido = '{$total}',
						funcionario_codigo_funcionario = '{$funcionario}',
						cliente_codigo_cliente = '{$cliente}'
						
					WHERE
						cod_pedido =".$_REQUEST["cod_pedido"]; // É cod_pedido mesmo, melhor não alterar
						
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM produto WHERE id_produto=".$_REQUEST["id_produto"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
	}
?>






