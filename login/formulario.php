<?php
/*
// Navegador reclama que redirecionou em excesso -- solução nao encontrada
  if($_SESSION['login'] != "SIM") {
    header("location: admin-page.php");
  }
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style-login.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  
      <form action="login.php" method="POST">
        <h1>Login</h1>
       <input type="text" placeholder="usuario" name="nome" id="nome"> <br>
       <input type="password" placeholder="Senha" name="senha" id="senha"> <br>
        <input type="submit" class="button" value="Entrar">
        <a href="../index.php" class="btn-sair"> Voltar </a>
      </form>

</body>
</html>