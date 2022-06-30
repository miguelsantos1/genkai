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
  <title>GENKAI! | Cadastrar Produtos</title>
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

      <main>

        <h1>Cadastrar novo produto</h1>
        
        <form action="registerproduct.php">
          
            <p> Nome do produto   </p> <input name="name" id="name" type="text">
            <p> Descrição         </p> <input type="text" name="description">
            <p> Preço             </p> <input type="number" name="price">
            <p> Imagem do Produto </p> <input type="file" name="img">
          
          <input type="submit" value="Cadastrar">
          
        </form>
        <footer>
            <nav>
                  <ul>
                    <li> <a href="../../index.php"> Home </a></li>
                    <li> <a href="#"> Cadastrar Produtos</a></li>
                    <li> <a href="#produtos"> Vendas</a></li>
                    <li> <a href="../loggout.php"> Deslogar </a></li>
                  </ul>
                </nav>
        </footer>
        
      </main>
      
</body>
</html>