<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.5">
<link rel="stylesheet" type="text/css" href="css/form.css">
	<title></title>
</head>
<body>
<?php 
include('menu.html');
session_start();
if($_SESSION['tipo'] == 'venta' || $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
include('conexion.php');
$idcliente = $_GET['id'];

echo "<form method='post' action='cerrarAc.php?id=$idcliente'>";
?>
<div class="re">
<table>
<tr><th colspan="2">Cerrar Instalación</th></tr>
	<tr><td>Sectorial</td><td><select name="sec">
	<option value="BBA">BBA</option>
	<option value="BBB">BBB</option>
	<option value="RA(privadas)">RA(privadas)</option>
	<option value="RB">RB</option>
	<option value="Avicola">Avicola</option>
	</select></td></tr>
	<tr><td>IP del Radio</td><td><input type="text" name="radio"></td></tr>
	<tr><td>Tipo de Router</td><td><select name="tipoRo">
	<option value="TP-Link">TP-Link</option>
	<option value="MikroTik">Mikrotik</option>
	</select></td></tr>
	<tr><td>IP del Router</td><td><input type="text" name="mikrotik"></td></tr>
	<tr><td>Cliente Nodo Antena Compartida</td><td><input type="checkbox" name="nodo" value="1"></td></tr>
	<tr>
			<td>Comentarios</td>
			<td><textarea name="comentarios" cols='33' rows='3'></textarea></td>
  		</tr>
	<tr><td><input class="but" type="submit" name="Enviar" ></td></tr>
</table>
</div>
</form>
</body>
</html>