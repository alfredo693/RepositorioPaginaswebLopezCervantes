<?php
    if(isset($_COOKIE['ultimavista']))
    {
        printf("Su ultima visita fue : %s",$_COOKIE["ultimavisita"]);
        $fechaHoy = data('Y/m/d H:i:s');
        setcookie("ultimavisita",$fechaHoy,time() + (7+24+60+60));
    }
    else
    {
        printf("no se encontro cookie de ultima visita<br>");

        $fechaHoy = date('y/m/d H:i:s');
        $siguienteSemana = time() + (7 + 24 + 60 + 60);
        $fechaExpira = date('y/m/d H:i:s', $siguienteSemana);

        echo '<b>Fecha de creacion de cookie: </b>'.$fechaHoy.'<br>';
        echo '<b>Fecha de vencimiento de cookie: </b>'.$fechaExpira.'<br>';

        setcookie("ultimaVisita",$fechaHoy,time() + (7 + 24 + 60 + 60));
    }
?>