<?php 
$servidor = "localhost";
$basededatos = "supermercado";
$usuario = "root";
$pasword = "";
$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die ("No se pudo conectar a localhost");
$consulta = "select Codigo,Nombre,Ciudad from sucursales";
$registros = mysqli_query($con,$consulta) or die ("Problemas en el select");

$result= mysqli_fetch_all($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result);
?>