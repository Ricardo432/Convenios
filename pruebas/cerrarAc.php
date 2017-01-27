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
$nodo =$_POST['nodo'];
$tr =$_POST['tipoRo'];
$com=$_POST['comentarios'];
$fecha = date('y-m-d');

$query = "UPDATE Cliente_VC SET Sectorial = '$sec', IP_Radio='$ipr', IP_Mikrotik ='$ipm', Revisado='1', User_Cierra='$usuario', Nodo_Raiz='$nodo', Fecha_Instalacion= '20$fecha', Tipo_router='$tr', Comentario_Tec='$com' WHERE Id_ClienteVC = $idcliente";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header('location:formTecnico.php');
?>