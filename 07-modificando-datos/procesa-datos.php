<?php
    require_once 'datos-conexion.php';

    // Recogemos los datos del formulario
    $_nombre = $_POST['nombre'];
    $_email = $_POST['correo'];
    $_mensaje = $_POST['mensaje'];
    $_codigo = $_POST['codigo'];

    // Conectamos al servidor MySQL y creamos la base de datos
    try{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
        // echo 'Conexión exitosa!!';
        $_sql = "UPDATE alumnos SET nombre='$_nombre', email='$_email', mensaje='$_mensaje' WHERE id='$_codigo'";
        $_conexion -> query($_sql);
        echo 'Datos modificados con éxito!!';
    }catch (mysqli_sql_exception $_e){
        echo "Error en la introducción de datos: ".$_e ->getMessage();
    }

    $_conexion -> close();
    echo '<p>Retorno al <a href="index.php">Listado</a></p>';

?>