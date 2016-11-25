<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.5">
<link rel="stylesheet" type="text/css" href="css/form.css">
	<title>Formulario de ventas</title>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function()
{
	$('#comp').hide();
	
     $("select[name=tIns]").click(function () {  
        	
            if($("#tIns option:selected").html()== "Completa"){
        	$('#comp').hide();
        	
        }
        else{
        	$('#comp').show();
        }
    });
});

</script>
<?php 
session_start();
if($_SESSION['tipo'] == ""){
  header('location:index.html');
  }
$listo = $_GET['Li'];
if($listo == '1'){
echo"<script type='text/javascript'>
	alert('Cliente Agregado');
</script>";}?>

<div class="re">

<form name"insta" method="get" action="accion.php">
	<table>
		<tr><th colspan="2">Generar Nueva ODI</th></tr>
		<tr>
			<td>Nombre del cliente</td>
			<td><input type="text" name="nombre" size="35"></td>
  		</tr>
  		<tr>
			<td>Dirección</td>
			<td><textarea name="direccion" cols='33' rows='2'></textarea></td>
  		</tr>
  		<tr>
			<td>Referencia</td>
			<td><textarea name="ref" cols='33' rows='2'></textarea></td>
  		</tr>
  		<tr>
			<td>Correo Electronico</td>
			<td><input type="email" name="email" size="35"></td>
  		</tr>
  		<tr>
			<td>Telefono</td>
			<td><input type="phone" name="telefono" size="35"></td>
  		</tr>
  		<tr>
			<td>Zona de recidencial</td>
			<td><select name="zona" >
			<option value="Zona 1"> Zona 1</option>
			<option value="Zona 2"> Zona 2</option>
			<option value="Zona 3"> Zona 3</option>
			<option value="Zona 4"> Zona 4</option>
			<option value="Zona 5"> Zona 5</option></select></td>
  		</tr>
  		<tr>
			<td>Tipo de paquete</td>
			<td><select name="paquete">
			<option value="2 mb $200"> 2 mb $200</option>
			<option value="5 mb $350"> 5 mb $350</option>
			<option value="8 mb $500"> 8 mb $500</option>
			<option value="5 mb $200"> 5 mb $200</option></select> </td>
  		</tr>
  		<tr>
			<td>Tipo de instalación</td>
			<td><select name="tIns">
			<option value="Compartida"> Compartida</option>
			<option value="Completa"> Completa</option></select> </td>
  		</tr>
  		<?php
  		include('conexion.php');
  		$query = "SELECT * FROM clientes WHERE NodoRaiz='1'";

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo "<tr><td>Compartir con: </td><td><select id='comp' name ='comp'><option value''></option>";
while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
		echo "<option value='$line[0]'>$line[2]</option>";
  		 } echo "</td></tr>";?>
  		<tr>
			<td>Pago/Adelanto</td>
			<td><input type="text" name="pago"></td>
  		</tr>
  		<tr>
			<td>Comentarios</td>
			<td><textarea name="comentarios" cols='33' rows='3'></textarea></td>
  		</tr>
  		<tr>
			<td>Identificación oficial</td>
			<td><input name="identi" accept="image/*"  type="file" capture/></td>
  		</tr>
  		
  		<tr><td align="center" colspan="2"><input class="but" width="100%" type="submit" name=""></td></tr>
	</table>
	</div>
</form>
</body>
</html>