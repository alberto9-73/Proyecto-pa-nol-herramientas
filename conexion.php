<link rel="stylesheet" href="css/estilo.css">
<?php  

$servername = "localhost";
$username = "root";
$password = "";
$database = "herramientas_pañol";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
