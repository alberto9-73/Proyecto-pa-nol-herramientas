<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilo.css">
<?php
error_reporting(0);
include("conexion.php");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  
} 

$sql = "SELECT id_herramientas,descripcion, cantidad_disponible  FROM herramientas";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Recorrer cada fila de resultados
    echo"<body class='fondo'>";
   echo"<div class='inv'> <center>";
    echo"<h3>Inventario de herramientas</h3>   ";
    echo"  <a href='reporte_inventario.php'type='button' class='btn btn-secondary'> Descargar Reporte</a> <br><br>";
    echo"</center></div>";
    while($row = $result->fetch_assoc()) {
        // Imprimir los datos de cada fila
        //echo" ID_Herramienta:  ".$row["id_herramientas"]." Descripcion:  ".$row["descripcion"]."  Disponible:  ".$row["cantidad_disponible"]."<br>";
    echo"<div class='tabla' >";
    echo"<center>";
    echo"<table class='table table-columns table-sm' border=3>";
    echo"<tbody>";
    echo"<tr>";
    echo"<td>ID_Herramienta:  ".$row["id_herramientas"]."</td> ";
    echo"</tr>";
    echo"<tr>";
    echo"<td> Descripcion:  ".$row["descripcion"]."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>   Disponible:  ".$row["cantidad_disponible"]."</td> " ;
    echo"</tr>";
    echo"<tbody>";
    echo"</table>";
    echo"</center>";
    echo"</div>";
   

    }

   // echo"<a href='reporte_inventario.php'type='button' class='btn btn-outline-secondary'> Descargar Reporte</a>";

}






?>