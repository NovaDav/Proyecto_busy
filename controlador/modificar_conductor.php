<?php

if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["nombres"]) or !empty($_POST["apellidos"])
        or !empty($_POST["dni"]) or !empty($_POST["edad"])
        or !empty($_POST["fecha"]) or !empty($_POST["licencia"])
        or !empty($_POST["direccion"]) or !empty($_POST["telefono"])
        or !empty($_POST["correo"]) or !empty($_POST["contraseña"])
    ) {
        $id = $_POST["id"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $dni = $_POST["dni"];
        $edad = $_POST["edad"];
        $fecha = $_POST["fecha"];
        $licencia = $_POST["licencia"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $sql = $conexion->query(" update registro_conductor set nombres='$nombres', apellidos='$apellidos',numero_cedula=$dni,edad=$edad,fecha_nacimiento='$fecha',numero_licencia=$licencia,direccion='$direccion',telefono_celular='$telefono',correo='$correo',contraseña='$contraseña' where id_conductor=$id ");

        if ($sql == 1) {

            header("location:tabla-conductores.php");

        } else {
            echo '<div class="alert alert-danger">Error al modificar registro</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }

}
?>