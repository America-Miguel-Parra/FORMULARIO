<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORMULARIO</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">    </head>

    <body>
        <form method="post">
        <h2>Bienvenido</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <i class="bi bi-person-fill"></i>
        </div>
       
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <i class="bi bi-envelope-at-fill"></i>
        </div>
        
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <i class="bi bi-person-fill-lock"></i>
        </div>
       
        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Direccion">
            <i class="bi bi-geo-alt-fill"></i>
        </div>

        <div class="input-wrapper">
            <input type="telf" name="telefono" placeholder="Telefono">
            <i class="bi bi-telephone-fill"></i>
        </div>
        <br>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
    include("registrar.php");
    ?>
    
    </body>
</html>
