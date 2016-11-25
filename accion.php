<?php
include('conexion.php');
echo date ('y-m-d');
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
$comentarios = $GET['comentarios'];
$referencia = $_GET['ref'];
$query ="INSERT INTO clientes (Nombre, Direccion, Telefono, Email, Zona, Tipo_Instalacion, TIpo_paquete, Identificacion, Pago, Fecha_Solicitud,ComparteCon,Comentarios,Referencia, Revisado)  VALUES('$nombre','$direccion','$telefono','$email','$zona','$tipoIns','$paq','','$pago','20$fecha','$comparte','$comentarios','referencia','0')";
echo $query;
$result=mysql_query($query);
header('Location: formVentas.php');

//$mensaje ="Instalacion nueva"+"\r\n"+$nombre+"\r\n"+$direccion+"\r\n"+$email+"\r\n"+$telefono+"\r\n"+$zona+"\r\n"+$paq+"\r\n"+$tipoIns;

//mail('ricar2_26@hotmail.com', 'Instalacion', $mensaje,"From: david_jonsdj@hotmail.com");
?>