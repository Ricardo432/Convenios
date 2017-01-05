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

$query = "UPDATE clientes SET Sectorial = '$sec', IPRadio='$ipr', IPMikrotik ='$ipm', Revisado='1', UserCierra='$usuario', NodoRaiz='$nodo', Fecha_Instalacion= '20$fecha', Tipo_router='$tr', ComentarioTec='$com' WHERE Id_cliente = $idcliente";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header('location:formTecnico.php');
?>