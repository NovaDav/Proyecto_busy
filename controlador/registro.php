<?php

if (!empty($_POST["btnregistrar"])){
    
    if (!empty($_POST["nombres"]) or !empty($_POST["apellidos"])
    or !empty($_POST["dni"])or !empty($_POST["edad"])
    or !empty($_POST["fecha"])or !empty($_POST["licencia"])
    or !empty($_POST["direccion"])or !empty($_POST["telefono"])
    or !empty($_POST["correo"])){
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $dni=$_POST["dni"];
        $edad=$_POST["edad"];
        $fecha=$_POST["fecha"];
        $licencia=$_POST["licencia"];
        $direccion=$_POST["direccion"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];
        $contraseña=($_POST["contraseña"]);
        $sql=$conexion->query(" insert into registro_conductor(nombres, apellidos, numero_cedula,edad,fecha_nacimiento, numero_licencia, direccion, telefono_celular,correo,contraseña)values 
        ('$nombres','$apellidos',$dni,$edad,'$fecha',$licencia,'$direccion','$telefono','$correo','$contraseña')");
       if($sql==1)  {
        echo '<div class="alert alert-success">conductor registrado correctamente</div>';
        
    } else {
        echo '<div class="alert alert-danger">Error al  registrar conductor</div>';
       }
       

   
   
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
     }
}










?>