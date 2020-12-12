<?php

   $user = $_GET['user'];

   $password = $_GET['pass'];

 

   if (($user == "Administrador") AND ($password == "12345")) {

      echo "Bienvenido ".$user;

   } else {
    
    if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
    {
        echo "<div style='color:red'> Usuario o contraseña invalido </div>";
    }
    //echo "¡Usuario o contraseña incorrectos!";

      //echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   }

?>