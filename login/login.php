<?php
  if($_POST['nome'] == "Admin" && $_POST['senha'] == "123") {
    session_start();
    $_SESSION["login"] = "SIM";
    
    header("Location: admin-page.php");
  } else {
    $_SESSION["login"] = "NAO";
    header("Location: formulario.php");
  }
?>