<?php
    $direccion="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBase="RegistrarTareas";

    $conexion= new mysqli($direccion,$usuario,$contraseña,$nombreBase);
    if($conexion->error){
        echo "Hubo un error al conectar a la base de datos";
    }
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $estado=$_POST['estado'];
    $sql="UPDATE Tareas SET id='$id',nombre='$nombre',descripcion='$descripcion',estado='$estado' WHERE id='$id'";
    if ($conexion->query($sql)===TRUE){
        echo "Se edito correctamente";
        header("location: persona.php?id=".$id);
    }
    else{
        echo $conexion->error;
    }

?>