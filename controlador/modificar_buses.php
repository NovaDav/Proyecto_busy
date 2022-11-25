<?php

if (!empty($_POST["btnbuses"])) {

    if (
        !empty($_POST["placa"]) or !empty($_POST["modelo"])
        or !empty($_POST["marca"])
    ) {
        $id = $_POST["id"];
        $placa = $_POST["placa"];
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];
        $sql = $conexion->query(" update buses set placa='$placa', modelo='$modelo',marca='$marca' where id_bus='$id' ");

        if ($sql == 1) {

            header("location:tabla-buses.php");

        } else {
            echo '<div class="alert alert-danger">Error al modificar registro</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }

}
?>