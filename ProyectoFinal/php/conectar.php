<?php

   $paridCte=$_POST['par1'];
   $hostname = 'localhost' ;
    $database = 'bibloteca' ;
    $username = 'root' ;
    $password = '' ;

  try {
      $con = new PDO("mysql:host=$hostname; dbname=$database" ,$username,$password);
  } catch(PDOException $e){
      echo "Error de conexion a la base de datos";
      echo $e->getMessage();
      exit();
  }

  try{
    $sql = "select * from libros where numregistro=".$paridCte;
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $query->closeCursor();
}catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

echo json_encode($result);

 ?>
