<?
    $direccion="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBase="RegistrarTareas";

     $conexion=new mysqli($direccion,$usuario,$contraseña,$nombreBase);
    if($conexion ->error){
        echo "Hubo un error al conectar la base de datos";

    $sql="SELECT* FROM tareas";
    $resultado=$conexion->query($sql);
    if ($resultado->num_rows>0){
        while($fila-$resultado -> fetch_assoc()){
            echo $fila['id']."<br>".$fila['nombre']."<br>". $fila['descripcion']."<br>".$fila['estado'];
            $idTarea=$fila['id'];
            echo "<a href='tarea.php?id=$id'><button>Mostrar</button></a><br>";
        }
    }

?>