<?php
 $hostname = 'localhost' ;
 $database = 'L19100257' ;
 $username = 'root' ;
 $password = '' ;

    
    try {
        $con = new PDO("mysql:host=$hostname; dbname=$database" ,$username,$password);
    } catch(PDOException $e){
        echo "Error de conexion a la base de datos";
        echo $e->getMessage();
    }

?>