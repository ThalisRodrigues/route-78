<h1>Cadastrar Pedido</h1>

<?php
    require ("conexao.php");

    session_start();
    
    if(!isset($_SESSION['pedido'])){ 
        $_SESSION['pedido'] = array(); 
    } //adiciona produto 
     
    if(isset($_GET['acao'])){ 
        //ADICIONAR pedido 
        if($_GET['acao'] == 'add'){ 
            $id = intval($_GET['id']); 
            if(!isset($_SESSION['pedido'][$id])){ 
                $_SESSION['pedido'][$id] = 1; 
            } else { 
                $_SESSION['pedido'][$id] += 1; 
            } 
        } //REMOVER pedido 
     
        if($_GET['acao'] == 'del'){ 
            $id = intval($_GET['id']); 
            if(isset($_SESSION['pedido'][$id])){ 
                unset($_SESSION['pedido'][$id]); 
            } 
        } //ALTERAR QUANTIDADE 
        if($_GET['acao'] == 'up'){ 
            if(is_array($_POST['prod'])){ 
                foreach($_POST['prod'] as $id => $qtd){
                        $id  = intval($id);
                        $qtd = intval($qtd);
                        if(!empty($qtd) || $qtd <> 0){
                            $_SESSION['pedido'][$id] = $qtd;
                        }else{
                            unset($_SESSION['pedido'][$id]);
                        }
                }
            }
        }
           
   }
?>
<?php
$data = date("d-m-Y");
$hour = date("H:i:s");
?>

<form action="index.php?page=salvar_pedido&acao=cadastrar" method="POST">
	<div class="form-row">
        <div class="col-md-6">
            <label>Data </label>
            <input type="date" name="data_pedido" class="form-control" value="<?php echo $data["d-m-Y"];?>">
        </div>
        <div class="col-md-6">
            <label>Hora </label>
            <input type="time" name="hora_pedido" class="form-control">
        </div>
    </div>    



<div class="form-group">
		<label>Funcionario</label>
		<?php


			$sql = "SELECT * FROM funcionario";
	
            $result = $conn->query($sql);
            			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Nome do Funcionario</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["codigo_funcionario"]."</td>";
					print "<td>".$row["nome_funcionario"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="funcionario_codigo_funcionario" class="form-control" >
	</div>
	
	
	
	<div class="form-group">
		<label>Cliente</label>
		<?php
			$sql = "SELECT * FROM cliente";
	
			$result = $conn->query($sql);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Nome Cliente</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["codigo_cliente"]."</td>";
					print "<td>".$row["nome_cliente"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="cliente_codigo_cliente" class="form-control" >
	</div>



    <table class="table table-hover">

        <caption>Pedido de Produtos</caption><br/>
        <thead>
            <tr>
                <th width="244">Nome Produto</th>
                <th width="79">Quantidade</th>
                <th width="89">Pre&ccedil;o</th>
                <th width="100">SubTotal</th>
                <th width="64">Remover</th>
            </tr>
        </thead>
        <form action="?acao=up" method="post">
        <tfoot>
            <tr>
                <td colspan="5"><input type="submit" value="Atualizar pedido" /></td>
            <tr>
            <td colspan="5"><a href="listar_bike.php">Continuar Comprando</a></td>
        </tfoot>
        <tbody>
     <?php
        if(count($_SESSION['pedido']) == 0){
          echo '
                <tr>
                    <td colspan="5">Não há produto no pedido</td>
                </tr>
            ';
          } else {
                require("conexao.php");
                $total = 0;
                foreach($_SESSION['pedido'] as $id => $qtd){
                        $sql   = "SELECT *  FROM produto WHERE codigo_produto= '$id'";
                        $qr    = $conn->query($sql) or die(mysql_error());
                        $ln    = $qr->fetch_assoc();
                        $nome  = $ln['nome_produto'];
                        $preco = number_format($ln['valor_produto'], 2, ',', '.');
                        $sub   = number_format($ln['valor_produto'] * $qtd, 2, ',', '.');
                        $total += $ln['valor_produto'] * $qtd;
                         echo '
                            <tr>       
                                <td>'.$nome.'</td>
                                <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                <td>R$ '.$preco.'</td>
                                <td>R$ '.$sub.'</td>
                                <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                            </tr>';
                }
                $total = number_format($total, 2, ',', '.');
                echo '<tr>                         
                            <td colspan="4">Total</td>
                            <td>R$ '.$total.'</td>
                    </tr>';
          }
          
                   ?>
                   
        
         </tbody>
    </form>
 </table>
 <br/>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>