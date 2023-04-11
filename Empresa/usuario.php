<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
   
   $user1 = "Sandra García";
   $pass1 = "prieto123";
   $user2 = "Paty Garcia";
   $pass2 = "prieto456";
   $user3 = "Paulina González";
   $pass3 = "morales123";
   $user4 = "Viridiana Ortega";
   $pass4 = "magdaleno123";
   $user5 = "Vanessa Dominguez";
   $pass5 = "melgarejo123";
   $user6 = "Fatima Romo";
   $pass6 = "diaz123";
   
   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   switch ($user) {
      case $user1:
         if ($password == $pass1) {
           header('Location: Inicio.html');
         } else {
            echo $error_notif;
         }
      break;
      case $user2:
         if ($password == $pass2) {
           header('Location: Inicio.html');
         } else {
            echo $error_notif;
         }
      break;
      case $user3:
         if ($password == $pass3) {
           header('Location: Inicio.html');
         } else {
            echo $error_notif;
         }
      break;
      case $user4:
         if ($password == $pass4) {
           header('Location: Inicio.html');
         } else {
            echo $error_notif;
         }
      break;
       case $user5:
         if ($password == $pass5) {
           header('Location: Inicio.html');
         } else {
            echo $error_notif;
         }
      break;
       case $user6:
         if ($password == $pass6) {
           header('Location: Inicio.html');
         } else {
            echo $error_notif;
         }
      break;
      default:
         echo $error_notif;
   }
?>