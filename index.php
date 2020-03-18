<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <form action="main.php" method="post">
        <input type="text" name="nombre" value="" placeholder="nombre"><br>
        <input type="text" name="apellido" value="" placeholder="apellido"><br>
        <input type="text" name="edad" value="" placeholder="edad"><br>
        <input type="submit" value="Añadir" id="boton">

    </form>

    <?php
    include ("abrir_conexion.php");
    $obtener = "SELECT * FROM $tabla";
    $datos = mysqli_query($dbconnect,$obtener);
    

    while($consulta= mysqli_fetch_array($datos)){
        
        echo   "<table  id=\"tabla\">
                     
                         <td> ".$consulta['nombre']."</td><td>".$consulta['apellido']."</td><td>".$consulta['edad']."</td>
                     </tr>
                 </table>";
        echo "<br>";
    }
     
    
    ?>

</body>
</html>