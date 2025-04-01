<?php
    /// Conexión con la base de datos
    include 'datos-conexion.php';

    try{
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_conexion = new mysqli($_servidor, $_usuario, $_password, $_bbdd); 
        
        $_codigo = $_GET['codigo'];
        $_consulta = "SELECT * FROM alumnos WHERE id='$_codigo'";
        $_datos = mysqli_query($_conexion, $_consulta);

        $_fila = mysqli_fetch_array($_datos);
            $_codigoActual = $_fila['id'];
            $_nombreActual = mb_convert_encoding($_fila['nombre'],'UTF-8');
            $_correoActual = mb_convert_encoding($_fila['email'],'UTF-8');
            $_mensajeActual = mb_convert_encoding($_fila['mensaje'],'UTF-8');
            

            $_formulario = '<form action="procesa-datos.php" method="post">
            <fieldset>
                <legend>Puede modificar los datos de este registro</legend>
                <ul>
                <li>
                    <label for="nombre">Nombre del Usuario</label>
                    <input type="text" id="nombre" name="nombre" value="'.$_nombreActual.'">
                </li>
                <li>
                    <label for="correo">E-mail</label>
                    <input type="text" id="correo" name="correo" value="'.$_correoActual.'">
                </li>
                <li>
                    <label for="mensaje">Mensaje</label>
                    <input type="text" id="mensaje" name="mensaje" value="'.$_mensajeActual.'">
                </li>
            </ul>
            </fieldset>
            <fieldset>
                <input type="hidden" id="codigo" name="codigo" value="'.$_codigoActual.'">
                <p><input type="submit" value="Guardar cambios"></p> 
            </fieldset>
        </form>';
        echo $_formulario;
           
    }catch (mysqli_sql_exception $_e){
        echo "Error en la introducción de datos: ".$_e ->getMessage();
    }
    // echo '<p>Retorno al <a href="index.php">Listado</a></p>';
    $_conexion -> close();

?>