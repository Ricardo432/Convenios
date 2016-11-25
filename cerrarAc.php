<?php 
include('conexion.php');
$idcliente = $_GET['id'];
$sec = $_POST['sec'];
$ipr= $_POST['radio'];
$ipm = $_POST['mikrotik'];


$query = "UPDATE clientes SET Sectorial = '$sec', IPRadio='$ipr', IPMikrotik ='$ipm', Revisado='1' WHERE Id_cliente=$idcliente";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header('location:formTecnico.php');
?>