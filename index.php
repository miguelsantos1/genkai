<!DOCTYPE HTML>
<html lang="pt-BR">

  <head>
    <title> GENKAI! | Home </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel de Oliveira Santos">
    <meta name="description" content="Loja virtual para amantes da cultura japonesa">
    <meta name="keywords" content="Genkai, Loja, Anime, Mangás, Roupa, Produto, Acessórios, Tênis, Nerd">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
      <!-- HEADER -->
      <header>
          <nav>
            <ul>
              <li> <a href="#"> Ínicio </a></li>
              <li> <a href="#products"> Produtos </a></li>
            </ul>
          </nav>
          <a href="login/formulario.php"> Login </a>
      </header>

      <!-- MAIN -->
      <main>
  
          <!-- INFORMATIONS -->
          <section class="informations">
            <h1>Loja geek para amantes da cultura japonesa!</h1>
            <p>Produtos de alta qualidade para aqueles que querem o melhor!</p>
          </section>

          <!-- CATEGORIES  AND PRODUCTS-->
          <section class="categories-products">
          <h2 id="products">Categorias: </h2>

          <form action="categoria.php" method="GET">

            <div class="categories">
              <a href="cookie.php?categoria=Roupa">Roupa</a>
              <a href="cookie.php?categoria=Tênis">Tênis</a>
              <a href="cookie.php?categoria=Acessorios">Acessórios</a>
              <a href="cookie.php?categoria=ActionFigure">Action Figure </a>
              <a href="cookie.php?categoria=Mangás">Mangás</a>
            </div>

          </form>
            <!-- PRODUCTS -->
          <section class="products">
            <?php
            include "php/products.php";
            ?>
          </section>
          
        </main>

  </body>

</html>