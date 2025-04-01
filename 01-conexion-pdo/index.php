<?php
    require_once 'datos-conexion.php';

    try{
        $_conexion = new PDO("mysql:host=$_servidor;dbname=$_bbdd", $_usuario, $_password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Habilita excepciones en errores SQL
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Devuelve los resultados como arrays asociativos
        ]);
        echo "Conexión exitosa a la base de datos $_bbdd del servidor $_servidor";
    }catch(PDOException $_pe){
        die("No se ha podido conectar con la base de datos $_bbdd /".$_pe -> getMessage());
    }

    $_conexion -> close();
?>