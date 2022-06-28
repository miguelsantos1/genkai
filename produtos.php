<?php

if(isset($_COOKIE['categoriaProdutoCookie'])){
  if($_COOKIE['categoriaProdutoCookie'] == "Roupa"){ 
    categoriaProdutoRoupa();
    categoriaProdutoTenis();
    categoriaProdutoAcessorios();
    categoriaProdutoActionFigure();
    categoriaProdutoMangas();
  }

  else if($_COOKIE['categoriaProdutoCookie'] == "Tênis"){ 
    categoriaProdutoTenis();
    categoriaProdutoRoupa();
    categoriaProdutoAcessorios();
    categoriaProdutoActionFigure();
    categoriaProdutoMangas();
  }

  else if($_COOKIE['categoriaProdutoCookie'] == "Acessorios"){ 
    categoriaProdutoAcessorios();
    categoriaProdutoRoupa();
    categoriaProdutoTenis();
    categoriaProdutoActionFigure();
    categoriaProdutoMangas();
  }

  else if($_COOKIE['categoriaProdutoCookie'] == "ActionFigure"){ 
    categoriaProdutoActionFigure();
    categoriaProdutoRoupa();
    categoriaProdutoTenis();
    categoriaProdutoAcessorios();
    categoriaProdutoMangas();
  }

  else if($_COOKIE['categoriaProdutoCookie'] == "Mangás"){ 
    categoriaProdutoMangas();
    categoriaProdutoRoupa();
    categoriaProdutoTenis();
    categoriaProdutoAcessorios();
    categoriaProdutoActionFigure();
  } 
  
} else {
  produtoAcessorios("images/picacessorio.jpg", "Colar", "Corrente foice Naruto", "19,99");
  produtoRoupa("images/pic01.jpg", "Tokyo ghoul", "Roupa Kaneki", "49,99");
  produtoRoupa("images/pic05.jpg", "Anime generico", "Roupa genérica", "20.99");
  produtoActionFigure("images/pic19.jpg", "M. Luffy", "Luffy Action figure", "79,99");
  ProdutoManga("images/picmanga.jpg", "Tokyo GHoul", "Mangá Tokyo Ghoul", "29,99");
  ProdutoManga("images/pic22.jpg", "Jujutsu Kaisen", "Mangá Jujutsu Kaisen", "29,99");
  produtoAcessorios("images/pic13.jpg", "Pulseira", "Pulseria aldeia Naruto", "9,99");
  ProdutoManga("images/pic21.jpg", "Demon Slayer", "Mangá Demon Slayer", "29,99");
  produtoTenis("images/pic07.jpg", "Converse", "One Piece", "249,99");
  produtoActionFigure("images/pic16.jpg", "Tanjiro", "Tanjiro Action figure", "79,99");
  produtoActionFigure("images/pic17.jpg", "Naruto", "Naruto Action figure", "79,99");
  produtoActionFigure("images/pic18.jpg", "Tanjiro", "Tanjiro Action figure", "79,99");
  produtoRoupa("images/piccamiseta.jpg", "Anime generico", "Roupa genérica", "20,99");
  produtoRoupa("images/pic02.jpg", "Shingeki no Kyojin", "Roupa Levi", "49,99");
  produtoActionFigure("images/pic20.jpg", "Sasuke", "Sasuke Action figure", "79,99");
  produtoTenis("images/pic10.jpg", "Converse", "Naruto", "249,99");
  ProdutoManga("images/pic24.jpg", "Mob Psycho 100", "Mangá Mob Psycho 100", "29,99");
  produtoRoupa("images/pic03.jpg", "Hunter x Hunter", "Roupa Killua", "49,99");
  ProdutoManga("images/pic23.jpg", "Promised Neverland", "Mangá P.M", "29,99");
  produtoAcessorios("images/pic15.jpg", "Bandana", "Bandana Naruto", "19,99");
  produtoAcessorios("images/pic14.jpg", "Colar", "Colar Tsunade cristal", "9,99");
  ProdutoManga("images/pic25.jpg", "Naruto", "Mangá Naruto", "29,99");
  produtoTenis("images/pictenis.jpg", "Converse", "tenis do death note", "249,99");
  produtoAcessorios("images/pic12.jpg", "Áneis", "Ànel aldeia Naruto", "9,99");
  produtoTenis("images/pic06.jpg", "Converse", "Shingeki no Kyojin", "249,99");
  produtoRoupa("images/pic04.jpg", "Death note", "Roupa L", "49,99");
  produtoAcessorios("images/pic11.jpg", "Brinco", "Brinco do Tanjiro", "9,99");
  produtoTenis("images/pic08.jpg", "Converse", "Naruto", "249,99");
  produtoActionFigure("images/picactionfigure.jpg", "Emma", "Emma Action figure", "79,99");
  produtoTenis("images/pic09.jpg", "Converse", "Naruto", "249,99");
    }
  
  #Camisa == pic01 - pic05
  #tenis == pic06 - pic10
  #acessorios == pic11 - pic15
  #ActionFigure == pic16 - pic20
  #manga == pic21 - pic25 

  // ROUPA
  
  function categoriaProdutoRoupa() {
    produtoRoupa("images/pic01.jpg", "Tokyo ghoul", "Roupa Kaneki", "49,99");
    produtoRoupa("images/pic04.jpg", "Death note", "Roupa L", "49,99");
    produtoRoupa("images/pic02.jpg", "Shingeki no Kyojin", "Roupa Levi", "49,99");
    produtoRoupa("images/pic03.jpg", "Hunter x Hunter", "Roupa Killua", "49,99");
    produtoRoupa("images/pic05.jpg", "Anime generico", "Roupa genérica", "20.99");
    produtoRoupa("images/piccamiseta.jpg", "Anime generico", "Roupa genérica", "20,99");
}

  // TÊNIS

  function categoriaProdutoTenis() {
    produtoTenis("images/pictenis.jpg", "Converse", "tenis do death note", "249,99");
    produtoTenis("images/pic06.jpg", "Converse", "Shingeki no Kyojin", "249,99");
    produtoTenis("images/pic07.jpg", "Converse", "One Piece", "249,99");
    produtoTenis("images/pic08.jpg", "Converse", "Naruto", "249,99");
    produtoTenis("images/pic09.jpg", "Converse", "Naruto", "249,99");
    produtoTenis("images/pic10.jpg", "Converse", "Naruto", "249,99");
  }

  // Acessorios

  function categoriaProdutoAcessorios() {
    produtoAcessorios("images/picacessorio.jpg", "Colar", "Corrente foice Naruto", "19,99");
    produtoAcessorios("images/pic11.jpg", "Brinco", "Brinco do Tanjiro", "9,99");
    produtoAcessorios("images/pic12.jpg", "Áneis", "Ànel aldeia Naruto", "9,99");
    produtoAcessorios("images/pic13.jpg", "Pulseira", "Pulseria aldeia Naruto", "9,99");
    produtoAcessorios("images/pic14.jpg", "Colar", "Colar Tsunade cristal", "9,99");
    produtoAcessorios("images/pic15.jpg", "Bandana", "Bandana Naruto", "19,99");
  }

      // ACTION FIGURE

  function categoriaProdutoActionFigure() {
    produtoActionFigure("images/picactionfigure.jpg", "Emma", "Emma Action figure", "79,99");
    produtoActionFigure("images/pic16.jpg", "Tanjiro", "Tanjiro Action figure", "79,99");
    produtoActionFigure("images/pic17.jpg", "Naruto", "Naruto Action figure", "79,99");
    produtoActionFigure("images/pic18.jpg", "Tanjiro", "Tanjiro Action figure", "79,99");
    produtoActionFigure("images/pic19.jpg", "M. Luffy", "Luffy Action figure", "79,99");
    produtoActionFigure("images/pic20.jpg", "Sasuke", "Sasuke Action figure", "79,99");
  }

  // Mangás

  function categoriaProdutoMangas() {
    ProdutoManga("images/picmanga.jpg", "Tokyo GHoul", "Mangá Tokyo Ghoul", "29,99");
    ProdutoManga("images/pic22.jpg", "Jujutsu Kaisen", "Mangá Jujutsu Kaisen", "29,99");
    ProdutoManga("images/pic21.jpg", "Demon Slayer", "Mangá Demon Slayer", "29,99");
    ProdutoManga("images/pic23.jpg", "Promised Neverland", "Mangá P.M", "29,99");
    ProdutoManga("images/pic24.jpg", "Mob Psycho 100", "Mangá Mob Psycho 100", "29,99");
    ProdutoManga("images/pic25.jpg", "Naruto", "Mangá Naruto", "29,99");
  }
  

  function produtoRoupa($imagem, $nome, $desc, $preco) {
    echo "<div class='cardproduto'>";
    echo "<img src='$imagem' alt=''>";
    echo "<span class='nome'>$nome</span>";
    echo "<span>$desc</span>";
    echo "<span class='preco'>R$ $preco</span>";
    echo "</div>";
  }
  
  function produtoTenis($imagem, $nome, $desc, $preco) {
    echo "<div class='cardproduto'>";
    echo "<img src='$imagem' alt=''>";
    echo "<span class='nome'>$nome</span>";
    echo "<span class='desc'>$desc</span>";
    echo "<span class='preco'>R$ $preco</span>";
    echo "</div>";
  }

  function produtoAcessorios($imagem, $nome, $desc, $preco) {
    echo "<div class='cardproduto'>";
    echo "<img src='$imagem' alt=''>";
    echo "<span class='nome'>$nome</span>";
    echo "<span class='desc'>$desc</span>";
    echo "<span class='preco'>R$ $preco</span>";
    echo "</div>";
  }

  function produtoActionFigure($imagem, $nome, $desc, $preco) {
    echo "<div class='cardproduto'>";
    echo "<img src='$imagem' alt=''>";
    echo "<span class='nome'>$nome</span>";
    echo "<span class='desc'>$desc</span>";
    echo "<span class='preco'>R$ $preco</span>";
    echo "</div>";
  }

  function ProdutoManga($imagem, $nome, $desc, $preco) {
    echo "<div class='cardproduto'>";
    echo "<img src='$imagem' alt=''>";
    echo "<span class='nome'>$nome</span>";
    echo "<span class='desc'>$desc</span>";
    echo "<span class='preco'>R$ $preco</span>";
    echo "</div>";
  }

?>