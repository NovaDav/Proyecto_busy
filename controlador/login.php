<?php

if(!empty($_POST["btningresar"])){
    if (!empty($_POST["correo"]) and !empty($_POST["contraseña"])){ // si se ingreso por lo menos un campo
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query(" select * from usuario where correo_usuario='$correo' and contraseña_usuario='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["correo"]=$datos->correo;
            header("location:perfil-admin.php");

        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';       
  
        }
        
    } else {
                
        echo '<div class="alert alert-warning" >LOS CAMPOS ESTAN  VACIOS </div>';        
        
    }

}

?>