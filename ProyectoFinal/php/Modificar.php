<?php
include("conexion.php");
 $paridCte=$_POST['par1'];
        $titulo = $_POST['nom'];
        $fechadeingreso = $_POST['Fe'];
        $Nacionalidad = $_POST['Nacio'];
        $Estatura =$_POST['Estat'];
        $Equipo = $_POST['Equi'];
        $Genero = $_POST['Gen'];
        $Lesion = $_POST['Les'];
        $Posicion = $_POST['Pos'];
        $Sueldo = $_POST['Sue'];
        try{
        $sql = "update Jugador set  Nombre='$nombre',Fecha_Nacimiento='$Fecha',Nacionalidad='$Nacionalidad',Estatura='$Estatura',Equipo_Juega='$Equipo',Genero='$Genero',Lesion='$Lesion',Posicion='$Posicion',Sueldo='$Sueldo' where ID_Jugador=$paridCte";
        $query = $con->prepare($sql);
    $query->execute();
    $query->closeCursor();
    }catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }
?>
