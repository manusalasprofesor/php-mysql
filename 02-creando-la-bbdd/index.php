<?php
    require_once 'datos-conexion.php';

    // Conectamos al servidor MySQL
    try{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_conexion = new mysqli($_servidor, $_usuario, $_password); 
        // echo 'Conexión exitosa!!';
        $_sql = 'CREATE DATABASE IF NOT EXISTS cursos_cifo';
        $_conexion -> query($_sql);
        echo 'Base de datos creada con éxito!!';
    }catch (mysqli_sql_exception $_e){
        echo "Error en la base de datos: ".$e ->getMessage();
    }

    $_conexion -> close();


?>