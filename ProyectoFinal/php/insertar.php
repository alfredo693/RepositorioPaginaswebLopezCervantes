<?php
 include("conexion.php");
        $Numregistro = $_POST['num'];
        $Titulo = $_POST['ti'];
        $Fechadeingreso = $_POST['fe'];
        $Editorial =$_POST['edit'];
        $NumeroDePaginas = $_POST['numpag'];
        $Autor = $_POST['aut'];
        $Tipo = $_POST['tip'];
        $Idioma = $_POST['idioma'];
        $Precio = $_POST['pr'];
        try{
        $sql = "insert into libro  (numregistro,titulo,fechadeingreso,editorial,numerodepaginas,autor,tipo,idioma,precio) 
        VALUES('$numregistro', '$Titulo', '$Fechadeingreso', '$Editorial', '$NumeroDePaginas', '$Autor', '$Tipo','$Idioma' , '$Precio')";
        $query = $con->prepare($sql);
    $query->execute();
    $query->closeCursor();
    }catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }
?>
