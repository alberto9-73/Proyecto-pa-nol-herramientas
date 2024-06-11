<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/estilo.css">
 	<header>
      
          
   </header>
<?php
include("conexion.php");

 $id_herramienta=$_POST['id_herramienta'];
 $cantidad=$_POST['cantidad'];
 $plazo=$_POST['plazo'];
 $estado=$_POST['estado'];
 $id_usuario=$_POST['id_usuario'];

 $sql="INSERT INTO transacciones (id_transaccion, id_herramienta, cantidad, plazo, estado, id_usuario) VALUES ('', '$id_herramienta','$cantidad','$plazo','$estado','$id_usuario')";

$consulta=mysqli_query($conn,$sql);

echo "Transaccion realizada";

if($consulta)
{
	$sql2 = "UPDATE herramientas SET cantidad_disponible='cantidad_disponible' - '$cantidad' WHERE id_herramienta='$id_herramienta'";
	mysqli_query($conn,$sql2);


}
else
{
	echo "Hubo un error en la actualizacion";
}

// Cerrar conexión
$conn->close();

?>