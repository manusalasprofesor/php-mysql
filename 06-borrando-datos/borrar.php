<?php
    /// Conexión con la base de datos
    include 'datos-conexion.php';

    try{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
        
        $_codigo = $_GET['codigo'];
        $_consulta = "DELETE FROM alumnos WHERE id='$_codigo'";
        $_conexion -> query($_consulta);
        echo '<p>Registro eliminado</p>';
           
    }catch (mysqli_sql_exception $_e){
        echo "Error en la introducción de datos: ".$_e ->getMessage();
    }
    $_conexion -> close();
    echo '<p>Retorno al <a href="index.php">Listado</a></p>';
?>