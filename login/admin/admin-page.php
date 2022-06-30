<?php
  session_start();
  if($_SESSION["login"] != true){
    header("Location: ../formulario.php");
}
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
    <title>GENKAI! | Admin Page</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <main>

          <h1>Bem-vindo, Admin!</h1>

          <a href="../index.php">Home</a>  
          <a href="register-products.php">Produtos</a>  
          <a href="sales.php">Vendas</a>  
          <a href="../loggout.php">Deslogar</a>  

    </main>


        

      
   


    
  </body>
</html>