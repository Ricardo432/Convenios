<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/table2.css">
	<title></title>
</head>
<body>

<center><header>Listado de Instalaciones Realizadas</header></center>
<div class="datagrid">
<?php
include('menu.html');
session_start();
if($_SESSION['tipo'] == 'venta' || $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
include('conexion.php');
if($_GET['bus']==0){
$query = 'SELECT * FROM clientes WHERE (Revisado="1" AND Alta="1"  )ORDER BY Fecha_Instalacion DESC' ;
}else{
$busc = $_POST['buscar'];
$query = "SELECT * FROM clientes WHERE (Revisado='1' AND Alta='1' AND Nombre LIKE  '%" .$busc. "%' ) ORDER BY Fecha_Instalacion DESC" ;
}
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
// Imprimir los resultados en HTML
echo "<table  border='1'>";
echo "<tr>";
?>
   <thead><th>Cliente</th>
   <th>Direccion</th>
   <th>Telefono</th>
   <th>E-mail</th>
   <th>Zona</th>
   <th>Tipo de Instalacion</th>
   <th>Paquete</th>
   <th >Comparte con:</th>
   <th >Sectorial</th>
   <th >IP Radio</th>
   <th >Tipo de Router</th>
   <th >IP Router</th>
   <th >Nodo Raiz</th>
   <th >Fecha de Instalacion</th>
   <td><form id="buscador" name="buscador" method="post" action="clientes.php?bus=1"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar cliente..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form></td>
   </tr></thead>
   <tbody>
  <?
while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
    echo "<tr>";
    echo "<td>$line[1]</td>";
    echo "<td>$line[2]</td>";
    echo "<td>$line[4]</td>";
    echo "<td>$line[5]</td>";
    echo "<td>$line[6]</td>";
    echo "<td>$line[7]</td>";
    echo "<td>$line[8]</td>";
  if($line[12]!="0"){
  	$query2 = "SELECT * FROM clientes WHERE Id_cliente=$line[12]";
  	$result2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
  	while ($li = mysql_fetch_array($result2, MYSQL_NUM)) {
  		echo "<td>$li[1]: $li[2]</td>";
  	}

  }else{
  	echo "<td></td>";
  }

    echo "<td>$line[13]</td>";
    echo "<td>$line[14]</td>";
    echo "<td>$line[23]</td>";
    echo "<td>$line[15]</td>";
    echo "<td>$line[17]</td>";
    echo "<td>$line[21]</td>";

}
echo "</tbody>";
echo "</table>";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>

</div>
</body>
</html>