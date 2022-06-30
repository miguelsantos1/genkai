<?php
//  Navegador reclama que redirecionou em excesso -- solução nao encontrada
  // if($_SESSION['login'] != true) {
  //   header("location: admin/admin-page.php");
  // }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Miguel de Oliveira Santos">
  <meta name="description" content="Loja virtual para amantes da cultura japonesa">
  <meta name="keywords" content="Genkai, Loja, Anime, Mangás, Roupa, Produto, Acessórios, Tênis, Nerd">
  <title>GENKAI! | Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  
</head>
<body>
  
      <form action="login.php" method="POST">
        <h1>Login</h1>
       <input type="text" placeholder="Usuário" name="name" id="name"> <br>
       <input type="password" placeholder="Senha" name="password" id="password"> <br>
        <input type="submit" class="button" value="Entrar">
        <a href="../index.php" class="btn-exit"> Voltar </a>
      </form>

</body>
</html>