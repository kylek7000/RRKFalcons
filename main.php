<?php
  //Getting data
  $email = $POST["email"]
  $password = $POST["password"];

  if ($email == "admin" && $password == "password"){
    echo "Welcom Admin!"    
  } else {
    echo "Incorrect Password or Email";
  }

?>
