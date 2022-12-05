<?php
    session_start();
    $user = $_POST['usuario'];
    $pasw = $_POST['password'];

    if (isset($_SESSION['usuario']))
    {
        printf("REUNUDANDO SESION <br>");
        printf("Bienvenido de nuevo".$_SESSION{'usuario'});
    }
    else
    {
        $_SESSION['usuario'] = $user;
        printf("NUEVA SESION <br>");
        printf("Bienvenido %s",$user);
    }
?>