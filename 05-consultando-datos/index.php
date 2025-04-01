<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require_once 'datos-conexion.php';

        // Conectamos al servidor MySQL y creamos la base de datos
        try{
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
            // echo 'Conexión exitosa!!';
            $_sql = "SELECT * FROM alumnos";
            // $_conexion -> query($_sql);
            $_datos = mysqli_query($_conexion, $_sql);

            // Creamos una tabla para mostrar los datos
            echo '<table><tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>E-MAIL</td>
            <td>MENSAJE</td>
            </tr></table>';

            while ($_fila = mysqli_fetch_array($_datos)){
                echo '<table><tr><td>'.
                        mb_convert_encoding($_fila['id'],'UTF-8').'</td><td>'.
                        mb_convert_encoding($_fila['nombre'],'UTF-8').'</td><td>'.
                        mb_convert_encoding($_fila['email'], 'UTF-8').'</td><td>'.
                        mb_convert_encoding($_fila['mensaje'], 'UTF-8').'</td></tr></table>';
            }
        }catch (mysqli_sql_exception $_e){
            echo "Error en la introducción de datos: ".$_e ->getMessage();
        }

        $_conexion -> close();

    ?>
</body>
</html>

