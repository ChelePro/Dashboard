<?php

   $user = $_GET['user'];

   $password = $_GET['pass'];

 

   if (($user == "Administrador") AND ($password == "12345")) {

      echo "Bienvenido ".$user;

   } else {

      echo "¡Usuario o contraseña incorrectos!";

      echo '<br><a href="Login.php"></a>';

   }

?>
