<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/table.css">
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
$query = 'SELECT * FROM Cliente_VC WHERE (Revisado="1"AND Alta="0") ORDER BY Fecha_Instalacion DESC' ;
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
// Imprimir los resultados en HTML
echo "<table  border='1'>";
echo "<tr>";
    echo "<thead><th>Cliente</th>";
    echo "<th>Direccion</th>";
    echo "<th>Telefono</th>";
    echo "<th>E-mail</th>";
    echo "<th>Zona</th>";
    echo "<th>Tipo de Instalacion</th>";
    echo "<th>Paquete</th>";
    echo "<th >Comparte con:</th>";
    echo "<th >Sectorial</th>";
    echo "<th >IP Radio</th>";
    echo "<th >IP Router</th>";
    echo "<th >Nodo Raiz</th>";
    echo "<th >Fecha de Instalacion</th>";
    echo "<th >Comentarios</th>";
    echo "<th >Comentarios Tecnico</th>";
    echo "<th >Vendedor</th>";
    echo "</tr></thead>";
    echo "<tbody>";
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
    echo "<td><input type='button' value='Alta' name='$line[0]' onclick = \"location='/odi/accionAdmin.php?id=$line[0]'\"/></td>";

}
echo "</tbody>";
echo "</table>";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>
<input type='button' value='Consultar todos los clientes' onclick = "location='/odi/clientes.php?bus=0'"/>
</div>
</body>
</html>