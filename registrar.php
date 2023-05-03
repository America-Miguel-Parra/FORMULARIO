<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1 
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, contrasena, direccion, telefono, fecha)
        VALUES('$name', '$email', '$password', '$direccion', '$telefono', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se a completado</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>