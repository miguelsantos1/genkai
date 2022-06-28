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
  <title>Cadastrar Produtos</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="css/admin-page.css">
</head>
<body>

    

      <main>

        
        <h1>Cadastrar novo produto</h1>
        
        <form action="cadastrarproduto.php">
          
            <p> Nome do produto   </p> <input name="nome" id="nome" type="text">
            <p> Descrição         </p> <input type="text" name="descricao">
            <p> Preço             </p> <input type="number" name="preco">
            <p> Imagem do Produto </p> <input type="file" name="imagem">
          
          <input type="submit" value="Cadastrar">
          
        </form>
        <footer>
            <nav>
                  <ul>
                    <li> <a href="../index.php"> Home </a></li>
                    <li> <a href="#"> Cadastrar Produtos</a></li>
                    <li> <a href="#produtos"> Vendas</a></li>
                    <li> <a href="./loggout.php"> Deslogar </a></li>
                  </ul>
                </nav>
        </footer>
        
      </main>
      
</body>
</html>