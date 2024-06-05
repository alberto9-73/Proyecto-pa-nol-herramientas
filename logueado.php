<link rel="stylesheet" href="css/estilo.css">
<?php 
include("conexion.php");
session_start();


$_SESSION['nombre']="X";

$id_usuario=$_POST['id_usuario'];
$psw=$_POST['psw'];

$sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario' AND psw = '$psw'";
$resultado = $conn->query($sql);

// Verificar si se encontró algún usuario q coincida en id y en psq
if ($resultado->num_rows > 0) {
    // guarda el resultado el usuario, y el numero de rol.
    $usuario = $resultado->fetch_assoc();
    $rol = $usuario['id_rol'];

    // si el rol es 1 entonces es admin, si el rol es 2 es usuario. y si el rol es otro entonces no sabe a donde llevarlo.
    if ($rol == '1') {
        header("Location: admin.php");
    } elseif ($rol == '2') {
        header("Location: usuario.php");
    } else {
        echo "Rol desconocido";
    }
} else {
    echo "ID de usuario o contraseña incorrectos";
}

// Cerrar la conexión
$conn->close();

 ?>