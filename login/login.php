<?php
  if($_POST['name'] == "Admin" && $_POST['password'] == "123") {
    session_start();
    $_SESSION["login"] = true;
    
    header("Location: admin/admin-page.php");
  } else {
    $_SESSION["login"] = false;
    header("Location: formulario.php");
  }
?>