<?php
include("conexion.php");
 $paridCte=$_POST['par1'];
 $Titulo = $_POST['ti'];
 $Fechadeingreso = $_POST['fe'];
 $Editorial =$_POST['ed'];
 $NumeroDePaginas = $_POST['numpag'];
 $Autor = $_POST['aut'];
 $Tipo = $_POST['tip'];
 $Idioma = $_POST['id'];
 $Precio = $_POST['prec'];
        try{
        $sql = "update libros set  titulo='$Titulo',fechadeingreso='$Fechadeingreso',editorial='$Editorial',numerodepaginas='$NumeroDePaginas',autor='$Autor',tipo='$Tipo',idioma='$Idioma',precio='$Precio' where numregistro=$paridCte";
        $query = $con->prepare($sql);
    $query->execute();
    $query->closeCursor();
    }catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }
?>
