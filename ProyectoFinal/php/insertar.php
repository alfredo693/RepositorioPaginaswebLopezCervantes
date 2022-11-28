<?php
 include("conexion.php");
        $nombre = $_POST['nom'];
        $Fecha = $_POST['Fe'];
        $Nacionalidad = $_POST['Nacio'];
        $Estatura =$_POST['Estat'];
        $Equipo = $_POST['Equi'];
        $Genero = $_POST['Gen'];
        $Lesion = $_POST['Les'];
        $Posicion = $_POST['Pos'];
        $Sueldo = $_POST['Sue'];
        try{
        $sql = "insert into Jugador  (Nombre,Fecha_Nacimiento,Nacionalidad,Estatura,Equipo_Juega,Genero,Lesion,Posicion,Sueldo) 
        VALUES('$nombre', '$Fecha', '$Nacionalidad', '$Estatura', '$Equipo', '$Genero', '$Lesion','$Posicion' , '$Sueldo')";
        $query = $con->prepare($sql);
    $query->execute();
    $query->closeCursor();
    }catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }
?>
