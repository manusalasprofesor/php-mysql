<?php
    require_once 'datos-conexion.php';

    // Conectamos al servidor MySQL y creamos la base de datos
    try{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
        // echo 'Conexión exitosa!!';
        $_sql = 'CREATE TABLE IF NOT EXISTS alumnos (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                mensaje TEXT NOT NULL
            )';
        $_conexion -> query($_sql);
        echo 'Tabla creada con éxito!!';
    }catch (mysqli_sql_exception $_e){
        echo "Error en la tabla: ".$e ->getMessage();
    }

    $_conexion -> close();

?>