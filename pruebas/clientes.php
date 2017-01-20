<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/table2.css">
	<title></title>
</head>
<body>

<center><header>Listado de Instalaciones Realizadas</header></center>
<div class="datagrid">
<table  border='1'>
<tr>
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
   <th >Comentario Ventas</th>
   <th >Comentario Instalacion</th>
   <td><form id="buscador" name="buscador" method="post" action="clientes.php?bus=1"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar cliente..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form></td>
   </tr></thead>
   <tbody>
<?php
include('menu.html');
session_start();
if($_SESSION['tipo'] == 'venta' || $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
include('conexion.php');
if($_GET['bus']==0){
$query = 'SELECT * FROM Cliente_VC WHERE (Revisado="1" AND Alta="1"  )ORDER BY Fecha_Instalacion DESC' ;
}

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
// Imprimir los resultados en HTML


while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
  
    echo "<tr>";
$query3 = "SELECT * FROM Cliente WHERE Id_cliente=$line[0]";
    $result3 = mysql_query($query3) or die('Consulta fallida: ' . mysql_error());
    while ($li2 = mysql_fetch_array($result3, MYSQL_NUM)) {
    echo "<td>$li2[1]</td>";
    echo "<td>$li2[2]</td>";
    echo "<td>$li2[4]</td>";
    echo "<td>$li2[5]</td>";
}
    echo "<td>$line[1]</td>";
    echo "<td>$line[2]</td>";
    echo "<td>$line[3]</td>";
    
    
  if($line[7]!="0"){
    $query2 = "SELECT * FROM Cliente WHERE Id_cliente=$line[7]";
    $result2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
    while ($li = mysql_fetch_array($result2, MYSQL_NUM)) {
      echo "<td>$li[1]: $li[2]</td>";
    }
  }else{
    echo "<td></td>";
  }
    echo "<td>$line[8]</td>";
    echo "<td>$line[9]</td>";
    echo "<td>$line[10]</td>";
    echo "<td>$line[12]</td>";
    echo "<td>$line[16]</td>";
    echo "<td>$line[13]</td>";
    echo "<td>$line[19]</td>";
    echo "<td>$line[26]</td>";
}
echo "</tbody>";
echo "</table>";
else{
$busc = $_POST['buscar'];
$query = "SELECT * FROM Cliente WHERE (Nombre LIKE  '%" .$busc. "%' ) " ;
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
// Imprimir los resultados en HTML


while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
  $query2 = 'SELECT * FROM Cliente_VC WHERE (Revisado="1" AND Alta="1"  AND Id_ClienteVC=".$")' ;
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>

</div>
</body>
</html>