<?php
   session_start();

   if (isset($_POST['submit'])) {
   $username = "Admin";
   $password = "123";
  
   if ((isset($_POST['user'])) || (isset($_POST['pass']))){
  
      $nombre = $_POST['user'];
      $pass = $_POST['pass'];
  
   }else{
      header("location: login.php?fallo=true");
   }
   
   /*$user = $_POST['user'];

      $password = $_POST['pass'];

   

      if (($user == "Administrador") AND ($password == "12345")) {

         echo "Bienvenido ".$user;

      } else {
      
      if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
      {
         echo "<div style='color:red'> Usuario o contraseña invalido </div>";
      }
      //echo "¡Usuario o contraseña incorrectos!";

         //echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

      }*/

?>