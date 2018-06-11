<?php
	session_start();
?>
	
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login in Route-78</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      
     <form class="form-signin" method="post" action="ope.php" id="formlogin" name="formlogin" >
        <h2 class="form-signin-heading">Fazer Login</h2>
        <fieldset id="fie">
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="login" id="login_funcionario" class="form-control" placeholder="Login" required autofocus  /><br />
        <label for="inputSenha" class="sr-only">Senha</label>
        <input type="password" name="senha" id="senha_funcionario" class="form-control" placeholder="Senha" required /><br />
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </fieldset> 
      </form> 

    </div> <!-- /container -->
  </body>
</html>