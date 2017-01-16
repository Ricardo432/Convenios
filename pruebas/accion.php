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
$posible=$_GET['fecha'];
echo $comparte;
$referencia = $_GET['ref'];
$iden = $_GET['identi'];
echo $_SESSION['user'];
$query ="INSERT INTO Cliente (Nombre, Direccion, Numero, Email, Referencias)  VALUES('$nombre','$direccion','$telefono','$email','$referencia')";

mysql_query($query) or die('Consulta fallida: ' . mysql_error());

$query="SELECT * FROM `Cliente` WHERE Id_cliente = (SELECT MAX(Id_cliente) from Cliente)";
$result3 = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($li2 = mysql_fetch_array($result3, MYSQL_NUM)) {
  $query2 ="INSERT INTO Cliente_VC (Id_ClienteVC, Zona, Tipo_Ins, Tipo_paquete, Ide, Pago, Fecha_Sol,Comparte, Comentarios, Revisado, User_Reg, Fecha_Pos)  VALUES('$li2[0]','$zona','$tipoIns','$paq','','$pago','20$fecha','$comparte','$comentarios','0','$usuario','$posible')";
  echo $query2;
  mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
  }
header('Location: formVentas.php?Li=1');

$mensaje ="Instalacion nueva";

mail('ricar2_26@hotmail.com', 'Instalacion', "mensaje" ,"From: david_jonsdj@hotmail.com");
?>