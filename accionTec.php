 <!DOCTYPE html>
 <html>
 <head>

     <title></title>
 </head>
 <link rel="stylesheet" type="text/css" href="css/table.css">
  <body onload="imprimir();">
        
    
  <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>
       <center><header>Departamento de Ingeniería</header></center> 
<?php
include('conexion.php');

session_start();
$id_cliente = $_GET['id'];

$query = "SELECT * FROM clientes WHERE Id_cliente='$id_cliente'";

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
    //echo"<table><tr><td>";
echo "<div class ='datagrid'><table width='50%' border=1><thead><tr><th colspan='2'>Datos del Cliente</th></tr></thead>";
echo "<tbody><tr> <td>Nombre del cliente </td> <td>$line[1]</td></tr>";
echo "<tr> <td>Direccion </td> <td>$line[2]</td></tr>";
echo "<tr> <td>-Referencia </td> <td>$line[3]</td></tr>";
echo "<tr> <td>Telefono </td> <td>$line[4]</td></tr>";
echo "<tr> <td>Email </td> <td>$line[5]</td></tr>";
echo "<tr> <td>Zona de residencia </td> <td>$line[6]</td></tr>";
echo "<tr> <td>Tipo de Instalacion</td> <td>$line[7]</td></tr>";
echo "<tr> <td>Tipo de paquete</td> <td>$line[8]</td></tr>";
echo "<tr> <td>Pago/Adelanto</td> <td>$ $line[10]</td></tr>";
echo "<tr> <td>Fecha de solicitud</td> <td>$line[11]</td></tr><tr> <td>Comentarios</td> <td>";
if ($line[6]!="Zona 1"){
  echo "La antena debe de ser blindada<br>";
} echo " $line[18]</td></tr></tbody>";
echo "</table>";

echo "<div class='datagrid'><table border =1><thead><th >Datos de la Instalacion</th></thead>";
echo "<tbody><tr> <td class='alt'>Nodo conectado:</td></tr>";
echo "<tr> <td class='alt'>IP de la antena:</td></tr>";
echo "<tr> <td class='alt'>IP del MikroTik:</td></tr>";
echo "<tr> <td class='alt'># de serie de la antena:</td></tr>";
echo "<tr> <td class='alt'># de serie del MikroTik:</td></tr></tbody>";
echo "</table></div>";
 //echo"</table></tr></td>";
echo "<h4>Orden de trabajo impresa por: $_SESSION[user]</h4>";
}

?>


</body>