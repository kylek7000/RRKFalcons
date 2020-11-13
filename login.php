<?php

  if (isset($_POST['email'], $_POST["password"])) { 
    //Security issues still
    $email = $_POST["email"];
    $password = $_POST["password"];

    //Test Authenticaton We still Need to use data base
    if ($email == "admin" && $password=="password"){
      header("Location: clockin.php");
      exit();
    } else {
      header("Location: error.php");
      exit();
    }
  }
?>
