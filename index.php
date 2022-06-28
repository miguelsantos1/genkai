<!DOCTYPE HTML>
<html lang="pt-BR">

  <head>
    <title>GENKAI!</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel de Oliveira Santos">
    <meta name="description" content="Loja virtual para amantes da cultura japonesa">
    <meta name="keywords" content="Genkai, Loja, Anime, Mangás, Roupa, Produto, Acessórios, Tênis, Nerd">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
  </head>

  <body>
      <!-- HEADER -->
      <header>
          <nav>
            <ul>
              <li> <a href="#"> Ínicio </a></li>
              <li> <a href="#produtos"> Produtos </a></li>
            </ul>
          </nav>
          <a href="login/formulario.php"> Login </a>
      </header>

      <!-- MAIN -->
      <main>

          <!-- INFO -->
          <section class="info">
            <h1>Loja geek para amantes da cultura japonesa!</h1>
            <p>Produtos de alta qualidade para aqueles que querem o melhor!</p>
          </section>

          <!-- CATEGORIAS E PRODUTOS-->
          <section class="categoria-produto">
          <h2 id="produtos">Categorias: </h2>

          <form action="categoria.php" method="GET">

            <div class="categorias">
              <a href="cookie.php?categoria=Roupa">Roupa</a>
              <a href="cookie.php?categoria=Tênis">Tênis</a>
              <a href="cookie.php?categoria=Acessorios">Acessórios</a>
              <a href="cookie.php?categoria=ActionFigure">Action Figure </a>
              <a href="cookie.php?categoria=Mangás">Mangás</a>
            </div>

          </form>
            <!-- PRODUTOS -->
          <section class="produtos">
            <?php
            include "produtos.php";
            ?>
          </section>
          
        </main>

  </body>

</html>