<?php 
$servidor = "localhost";
$basededatos = "bibloteca";
$usuario = "root";
$password = "";
$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die ("No se pudo conectar a localhost");
$consulta = "select * from libros";
$registros = mysqli_query($con,$consulta) or die ("Problemas en el select");

$result= mysqli_fetch_all($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result);
?>