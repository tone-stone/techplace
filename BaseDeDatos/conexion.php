<?php
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "root";
    $db_name = "techplace";
    $tbl_name ="registros";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
            die("La conexion falló: " . $conexion->connect_error); 
    }else {
        echo "-";
    }
?>