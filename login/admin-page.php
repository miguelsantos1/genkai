<?php
  session_start();
  if($_SESSION["login"] != "SIM"){
    header("Location: formulario.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/admin-page.css">
  </head>
  <body>

    <main>

          <h1>Bem-vindo, Admin!</h1>

          <a href="../index.php">Home</a>  
          <a href="cadastrar-produtos.php">Produtos</a>  
          <a href="vendas.php">Vendas</a>  
          <a href="loggout.php">Deslogar</a>  

    </main>


        

      
   


    
  </body>
</html>