<?php

$servidor = "localhost";
$basededatos = "supermercado";
$usuario = "root";
$paswoord = "";
$con = mysqli_connect($servidor,$usuario,$paswoord,$basededatos) or die ('No se pudo conectar'.mysql_error());
$consulta = "SELECT * FROM articulos";

$registros = mysqli_query($con,$consulta) or die ("Problemas en el select");

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);

echo json_encode($result);

?>