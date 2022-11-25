<?php

if (!empty($_POST["btnbuses"])){
    
    if (!empty($_POST["placa"]) or !empty($_POST["modelo"])
    or !empty($_POST["marca"])){
        $placa=$_POST["placa"];
        $modelo=$_POST["modelo"];
        $marca=$_POST["marca"];
        $sql=$conexion->query(" insert into buses(placa, modelo, marca)values 
        ('$placa','$modelo','$marca')");
       if($sql==1)  {
        echo '<div class="alert alert-success">Vehículo registrado correctamente</div>';
        
    } else {
        echo '<div class="alert alert-danger">Error al  registrar Vehículo</div>';
       }
       

   
   
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
     }
}










?>