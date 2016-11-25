<?php 
session_start();
$usuario = $_SESSION['id'];
if($_SESSION['tipo'] == 'venta' || $_SESSION['tipo'] == ""){
	header('location:index.html');
}
include('conexion.php');
$idcliente = $_GET['id'];
$sec = $_POST['sec'];
$ipr= $_POST['radio'];
$ipm = $_POST['mikrotik'];


$query = "UPDATE clientes SET Sectorial = '$sec', IPRadio='$ipr', IPMikrotik ='$ipm', Revisado='1', UserCierra='$usuario' WHERE Id_cliente=$idcliente";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header('location:formTecnico.php');
?>