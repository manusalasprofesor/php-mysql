<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario para ingresar datos en una BBDD</title>
</head>
<body>
    <h1>Formulario de ingreso de datos</h1>
    <form action="procesa-datos.php" method="POST" name="formulario1" id="formulario1">
        <fieldset>
            <legend>Datos de Usuarios</legend>
            <ul>
                <li>
                    <label for="nombre">Nombre del Usuario</label>
                    <input type="text" id="nombre" name="nombre">
                </li>
                <li>
                    <label for="correo">E-mail</label>
                    <input type="email" id="correo" name="correo">
                </li>
                <li>
                    <label for="mensaje">Mensaje</label>
                    <input type="text" id="mensaje" name="mensaje">
                </li>
            </ul>
        </fieldset>
        <p><input type="submit" value="Enviar Formulario"></p> 
        <p><input type="reset" value="Borrar Datos"></p>       
    </form>
</body>
</html>