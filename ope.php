<form method="post" action="ope.php" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<label>NOME : </label>

<input type="text" name="login" id="login"  /><br />
<label>SENHA :</label>
<input type="password" name="senha" id="senha" /><br />
<input type="submit" value="LOGAR    "  />
</fieldset>
</form>


<?php 
// session_start inicia a sessão
require("conexao.php");
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = $conn->query("SELECT * FROM `funcionario` WHERE `login_funcionario` = '$login' AND `senha_funcionario`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if($result->num_rows > 0 )
{
$_SESSION['login_funcionario'] = $login;
$_SESSION['senha_funcionario'] = $senha;
header('location:index2.php');
}
else{
    echo "<script> alert ('Login e/ou Senha Inválidos')</script>";
    unset ($_SESSION['login_funcionario']);
    unset ($_SESSION['senha_funcionario']);
    header('location:index.php');
    
     
    }

 
?>