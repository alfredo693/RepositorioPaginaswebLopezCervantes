<?php
 include("conexion.php");
        $Titulo = $_POST['ti'];
        $Fechadeingreso = $_POST['fe'];
        $Editorial =$_POST['ed'];
        $NumeroDePaginas = $_POST['numpag'];
        $Autor = $_POST['aut'];
        $Tipo = $_POST['tip'];
        $Idioma = $_POST['id'];
        $Precio = $_POST['prec'];
        try{
        $sql = "insert into libros (titulo,fechadeingreso,editorial,numerodepaginas,autor,tipo,idioma,precio) 
        VALUES('$Titulo', '$Fechadeingreso', '$Editorial','$NumeroDePaginas', '$Autor', '$Tipo','$Idioma' , '$Precio')";
    $query = $con->prepare($sql);
    $query->execute();
    $query->closeCursor();
    }catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }
?>
