<?php

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from buses where id_bus=$id");
    if ($sql==1) {
        echo '<div class="text-center   alert alert-success">El registro fue eliminado correctamente </div>';
    } else {
        echo '<div class="text-center alert alert-danger">Error al eliminar </div>';
    }
    
}


?>