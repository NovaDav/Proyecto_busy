<?php


if (!empty($_POST["btniniciar"])){
    if (!empty($_POST["correo"]) and !empty($_POST["contraseña"])){ // si se ingreso por lo menos un campo
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query(" select * from registro_conductor where correo='$correo' and contraseña='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombres"]=$datos->nombres;
            $_SESSION["apellidos"]=$datos->apellidos;
             header("location:perfil_conductores.php");

        } else {
            
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';       
  
        }
        
    } else {
                
        echo '<div class="alert alert-warning" >LOS CAMPOS ESTAN  VACIOS </div>';        
        
    }

}

?>