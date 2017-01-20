<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=2">
<link rel="stylesheet" type="text/css" href="css/table2.css">
	<title></title>
</head>
<body>

<center><header>Listado de Instalaciones Pendientes</header></center>
<div class="datagrid">
<?php
include('menu.html');
session_start();
if($_SESSION['tipo'] == 'venta' || $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
include('conexion.php');
$query = 'SELECT * FROM Cliente_VC WHERE Revisado="0"';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

echo "<table  border='1'>";
echo "<tr>";
    echo "<thead><th>Cliente</th>";
    echo "<th>Direccion</th>";
    echo "<th>Referencia</th>";
    echo "<th>Telefono</th>";
    echo "<th>E-mail</th>";
    echo "<th>Zona</th>";
    echo "<th>Tipo de Instalación</th>";
    echo "<th>Paquete</th>";
    echo "<th>Pago</th>";
    echo "<th>F/Solicitud</th>";
    echo "<th >Comentarios</th>";
    echo "<th >Fecha Probable de Instalación</th>";
    echo "<th >Comparte con</th>";
    echo "<th colspan='3'></th>";
    echo "</tr></thead>";
    echo "<tbody>";
while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
	
    echo "<tr>";
$query3 = "SELECT * FROM Cliente WHERE Id_cliente=$line[0]";
  	$result3 = mysql_query($query3) or die('Consulta fallida: ' . mysql_error());
  	while ($li2 = mysql_fetch_array($result3, MYSQL_NUM)) {
    echo "<td>$li2[1]</td>";
    echo "<td>$li2[2]</td>";
    echo "<td>$li2[8]</td>";
    echo "<td>$li2[4]</td>";
    echo "<td>$li2[5]</td>";
}
    echo "<td>$line[1]</td>";
    echo "<td>$line[2]</td>";
    echo "<td>$line[3]</td>";
    echo "<td>$line[5]</td>";
    echo "<td>$line[6]</td>";
    echo "<td>$line[13]</td>";
    echo "<td>$line[20]</td>";
  if($line[7]!="0"){
  	$query2 = "SELECT * FROM Cliente WHERE Id_cliente=$line[7]";
  	$result2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
  	while ($li = mysql_fetch_array($result2, MYSQL_NUM)) {
  		echo "<td>$li[1]: $li[2]</td>";
  	}
  }else{
  	echo "<td></td>";
  }
  	
    echo "<td><input type='button' value='ODI' name='$line[0]' onclick = \"location='/odi/accionTec.php?id=$line[0]'\"/></td>";
    echo "<td><input type='button' value='CNV' name='$line[0]' onclick = \"location='/odi/convenio.php?id=$line[0]'\"/></td>";
    echo "<td><input type='button' value='Cerrar ODI' name='$line[0]' onclick = \"location='/odi/cerrar.php?id=$line[0]'\"/></td>";
    echo "</tr>";

}
echo "</tbody>";
echo "</table>";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>
<input type='button' value='Consultar clientes para alta' name='$line[0]' onclick = "location='/odi/Consulta.php'"/>
</div>
</body>
</html>
