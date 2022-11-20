<?php
$servidor = "localhost";
$basededatos = "supermercado";
$usuario = "root";
$paswoord = "";
$con = mysqli_connect($servidor,$usuario,$paswoord,$basededatos) or die ('No se pudo conectar'.mysql_error());
$consulta = "SELECT * FROM articulos";

$registros = mysqli_query($con,$consulta);

$result = mysqli_fetch_all($registros);

mysqli_close($con);

echo json_encode($result);

?>