<?php
    $direccion="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBase="RegistrarTareas";
    $conexion=new mysqli($direccion,$usuario,$contraseña,$nombreBase);
    if($conexion ->error){
        echo "Hubo un error al conectar la base de datos";
    }

    $id=$_GET['id'];
    $sql="SELECT*FROM tareas WHERE id='$id'";
    $resultado=$conexion->query($sql);
    if($resultado->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
        $id=$fila['id'];
        $nombre=$fila['nombre'];
        $descripcion=$fila['descripcion'];
        $estado=$fila['estado'];
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form  class="caja" method="post">
        <h1>REGISTRO DE TAREAS</h1>
        <label for="">Id</label>
        <input type="text" name="id" value="<?=$id?>"><br>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value=<?=$nombre?>><br>
        <label for="">Descripcion:</label>
        <input type="text" name="descripcion" value=<?=$descripcion?>><br>
        <label for="">Estado:</label>
        <input type="text" name="estado" value=<?=$estado?>><br>
        <input type="submit" value="editar"><br>
    </form>
    </body>
    </html>