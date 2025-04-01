<?php 
// $_servidor = 'localhost';
// $_bbdd = 'cursos';
// $_usuario = 'root';
// $_password = '';

// $_conexion = mysqli_connect($_servidor, $_usuario, $_password, $_bbdd);

// if (!$_conexion){
//     die('Conexión incorrecta: '.mysqli_connect_error());
// }else{
//     echo 'Conexión correcta!!';
// }

// mysqli_close($_conexion);
?>


<?php
    $_servidor = 'localhost';
    $_bbdd = 'cursos';
    $_usuario = 'root';
    $_password = '';

    try{
        // Habilitar excepciones en mysqli
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
        
        echo 'Conexión exitosa!!';
    }catch (mysqli_sql_exception $_e){
        echo "Error en la base de datos: ".$e ->getMessage();
    }

    $_conexion -> close();
?>