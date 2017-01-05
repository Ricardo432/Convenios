<?php
session_start();
$usuario = $_SESSION['ide'];
if( $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
include('conexion.php');
echo $usuario;
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$zona = $_GET['zona'];
$paq = $_GET['paquete'];
$tipoIns = $_GET['tIns'];
$pago = $_GET['pago'];
$fecha = date('y-m-d');
$comparte = $_GET['comp'];
$comentarios = $_GET['comentarios'];
echo $comparte;
$referencia = $_GET['ref'];
$iden = $_GET['identi'];
echo $_SESSION['user'];
$query ="INSERT INTO clientes (Nombre, Direccion, Telefono, Email, Zona, Tipo_Instalacion, TIpo_paquete, Identificacion, Pago, Fecha_Solicitud,ComparteCon, Comentarios, Referencia, Revisado, UserReg)  VALUES('$nombre','$direccion','$telefono','$email','$zona','$tipoIns','$paq','','$pago','20$fecha','$comparte','$comentarios','$referencia','0','$usuario')";
echo $query;
mysql_query($query) or die('Consulta fallida: ' . mysql_error());
header('Location: formVentas.php?Li=1');

$mensaje ="Instalacion nueva";

mail('ricar2_26@hotmail.com', 'Instalacion', "mensaje" ,"From: david_jonsdj@hotmail.com");
?>