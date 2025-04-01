<?php
    require_once 'datos-conexion.php';

    // // Recogemos los datos del formulario
    // $_nombre = mysqli_real_scape_string($_POST['nombre']); //escapa los carácteres especiales para evitar inyecciones SQL
    // $_email = $_POST['correo'];
    // $_mensaje = $_POST['mensaje'];

    // Conectamos al servidor MySQL y creamos la base de datos
    try{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
        // echo 'Conexión exitosa!!';

        // Recogemos los datos del formulario
        $_nombre = $_conexion -> real_scape_string($_POST['nombre']); //escapa los carácteres especiales para evitar inyecciones SQL
        $_email = $_POST['correo'];
        $_mensaje = $_POST['mensaje'];


        $_sql = "INSERT INTO alumnos (nombre, email, mensaje) VALUES ('$_nombre', '$_email', '$_mensaje')";
        $_conexion -> query($_sql);
        echo 'Datos introducidos con éxito!!';
    }catch (mysqli_sql_exception $_e){
        echo "Error en la introducción de datos: ".$_e ->getMessage();
    }

    $_conexion -> close();

?>