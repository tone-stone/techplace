<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("conexion.php");
$nombre= $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];



$sql = "INSERT INTO $tbl_name (nombre,correo,telefono,comentario) VALUES ('$nombre','$correo',$telefono, '$comentario')";
if(mysqli_query($conexion, $sql)){
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
//Cerrar Base de Datos
mysqli_close($conexion); 
?>

 <a href=" /TechPlace/index.html">Regresar al Inicio</a></br>  

</body>
</html>