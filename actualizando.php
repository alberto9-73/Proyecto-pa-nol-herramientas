<?php

include("conexion.php");
$id_herramientas=$_POST['id_herramientas'];
$descripcion=$_POST['descripcion'];
$cantidad_disponible=$_POST['cantidad_disponible'];

$sql = "SELECT * FROM herramientas where id_herramientas = '$id_herramientas'";

$consulta=mysqli_query($conn,$sql);
$cuantos=mysqli_num_rows($consulta);

if($cuantos>0)
{
	$sql2 = "UPDATE herramientas SET cantidad_disponible='$cantidad_disponible'  WHERE id_herramientas='$id_herramientas'";
	$consulta2 = mysqli_query($conn,$sql2);
	if($consulta2)
	{
	echo "Datos actualizados correctamente";
	echo "<center><br><a href='admin.php'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>" ;
    }
   

}
else
{
	echo "Hubo un error en la actualizacion";
}
