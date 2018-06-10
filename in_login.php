<form id="form1" name="form" method="post" action="logout.php">	
		<?php
			if (isset($_SESSION["login"])){
				echo " ".$_SESSION["nome"];
			}else{
				echo "<script> alert ('Você não esta logado')</script>";
				echo "<script> location.href = ('index2.php')</script>";
			}
		?>
		<label>
			<input type="submit" name="button" id="button"value="Sair"/>
		</label>
</form>