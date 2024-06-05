<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/estilo.css">
 	<header>
      
          
   </header>
<?php
include("conexion.php");

 $descripcion=$_POST['descripcion'];
 $cantidad_disponible=$_POST['cantidad_disponible'];

 $sql="INSERT INTO herramientas (descripcion, cantidad_disponible) VALUES ('$descripcion','$cantidad_disponible')";

if ($conn->query($sql) === TRUE) {
   echo "<center>Herramienta insertada </center>";
  echo "<center><br><a href='admin.php'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>" ;
} else {
    echo "Error.";
}

// Cerrar conexión
$conn->close();



?>