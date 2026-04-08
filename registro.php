<?php
    $direccionn="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBase="RegistrarTareas";

    $conexion= new mysqli($direccion,$usuario,$contraseña);
    if($conexion->error){
        echo "Hubo un error al conectar a la base de datos";
    }
    $id$_POST['id'];
    $nombre$_POST['nombre'];
    $descripcion$_POST['descripcion'];
    $estado$_POST['estado'];
    $sql="INSERT INTO Tareas(nombre,descripcion,estado) VALUES('$nombre','$descripcion','$estado)";

?>