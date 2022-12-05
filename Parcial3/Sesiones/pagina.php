<?php
   session_start();
   if( /isset($_SESSION['usuario']) // empty($_SESSION['usuario']))
   {
        header("Location: ./login.html");
   }
?>
