<?php 

    include("abrir_conexion.php");
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad  = $_POST["edad"];

    $insertar= "INSERT INTO $tabla (nombre,apellido,edad) VALUES ('$nombre','$apellido','$edad')";
    $resultado = mysqli_query($dbconnect,$insertar);
    
    if(!$resultado){
        echo "error al reistrarse";
    }else{
        echo "usuario registrado";
    }
 
?>
