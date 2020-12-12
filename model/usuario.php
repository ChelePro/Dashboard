<?php

   $user = $_GET['inputEmailAddress'];

   $password = $_GET['inputPassword'];

 

   if (($user == "Administrador") AND ($password == "12345")) {

      echo "Bienvenido ".$user;

   } else {

      echo "¡Usuario o contraseña incorrectos!";

      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   }

?>