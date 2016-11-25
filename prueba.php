<?php
include('conexion.php');
require('fpdf.php');

include('conexion.php');
$id_cliente = $_GET['id'];

$query = "SELECT * FROM clientes WHERE Id_cliente='$id_cliente'";

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Nombre del cliente: $line[1]');
$pdf->Output();
}
mysql_free_result($result);


mysql_close($link);

?>