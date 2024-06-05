<?php
require('fpdf/fpdf.php');

// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "herramientas_pañol");

// Verificar la conexión
if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Crear instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Consulta a la base de datos
$query = "SELECT id_herramientas,descripcion,cantidad_disponible FROM herramientas";
$result = $mysqli->query($query);

// Si hay resultados, imprimir en el PDF
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(30, 10, ' ID:  ' . $row['id_herramientas'], 1);
        $pdf->Cell(90, 10, ' Descripcion:  ' . $row['descripcion'], 1);
        $pdf->Cell(40, 10, ' Stock:  ' . $row['cantidad_disponible'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No se encontraron resultados', 1, 1, 'C');
}

// Cerrar conexión a la base de datos
$mysqli->close();

// Salida del PDF
$pdf->Output();
?>
