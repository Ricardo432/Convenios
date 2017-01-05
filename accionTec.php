 <!DOCTYPE html>
 <html>
 <head>

     <title></title>
 </head>
 <link rel="stylesheet" type="text/css" href="css/table2.css">
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
       <table><tr><td rowspan="2" colspan="2" >
<?php
include('conexion.php');

session_start();
$id_cliente = $_GET['id'];

$query = "SELECT * FROM clientes WHERE Id_cliente='$id_cliente'";

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
    //echo"<table><tr><td>";
  $nom = $line[1];
echo "<div class ='datagrid'><table width='100%' border=1><thead><tr><th colspan='2'>Datos del Cliente</th></tr></thead>";
echo "<tbody><tr> <td colspan='3'>Nombre del cliente </td> <td>$line[1]</td></tr>";
echo "<tr> <td colspan='3'>Direccion </td> <td>$line[2]</td></tr>";
echo "<tr> <td colspan='3'>-Referencia </td> <td>$line[3]</td></tr>";
echo "<tr> <td colspan='3'>Telefono </td> <td>$line[4]</td></tr>";
echo "<tr> <td colspan='3'>Email </td> <td>$line[5]</td></tr>";
echo "<tr> <td >Zona </td> <td>$line[6]</td>";
echo " <td>Tipo de Instalacion</td> <td>$line[7]</td></tr>";
echo "<tr> <td>Tipo de paquete</td> <td>$line[8]</td>";
echo " <td>Pago/Adelanto</td> <td>$ $line[10]</td></tr>";
echo "<tr> <td colspan='3'>Comentarios</td> <td>";

echo " $line[18]</td></tr></tbody>";
}

echo "</table>";
?>
</td><td><div class ='datagrid'><table border="1"><tr><td colspan="2"><b>Lista de materiales a utilizar</b> </td></tr>
<tr><td>UTP</td><td>Patch Cord</td></tr>
<tr><td colspan="2">PoE</td></tr><?php if ($line[6]!="Zona 1"){
  if ($line[7]!='Completa') {
    echo "<tr><td colspan='2'>Mastil blindado</td></tr>
    <tr><td>Radio</td><td>Herrajes</td></tr>
    <tr><td>Candado Grande</td><td>Gabinete</td></tr>
    <tr><td>Candado para Gabinete</td><td>switch</td></tr>
    <tr><td>TP-Link</td><td>Clavija</td></tr>
    <tr><td>Contacto</td><td >Cable de corriente</td></tr>
";
  } else {
    echo "<tr><td>Mastil blindado</td></tr>
    <tr><td>Radio</td><td>Herrajes</td></tr>
    <tr><td>Candado Grande</td></tr><td>Router MikroTik</td></tr>";
  }
  
} else {
  if ($line[7]!='Completa') {
    echo "<tr><td>Mastil </td></tr>
    <tr><td>Antena</td><td>Tornillos y Taquetes</td></tr>
    <tr><td>Gabinete</td><td>Candado para Gabinete</td></tr>
    <tr><td>switch</td><td>Router TP-Link</td></tr>
    <tr><td>Clavija</td><td>Contacto</td></tr>
    <tr><td colspan='2'>Cable de corriente</td></tr>
";
  } else {
    echo "<tr><td>Mastil blindado</td></tr>
    <tr><td>Radio</td><td>Herrajes</td></tr>
    <tr><td>Candado Grande</td><td>Router MikroTik</td></tr>";
  }
}
 ?></table></div></td></tr></table>
<div class='datagrid'><table border =1><thead><th >Datos de la Instalacion</th></thead>
<tbody><tr> <td class='alt'>Nodo conectado:</td>
 <td class='alt'>IP de la antena:</td>
 <td class='alt'>IP del Router:</td>
 <td class='alt'># de serie de la antena:</td>
 <td class='alt'># de serie del Router:</td></tr>
</table></div>
 <?php
echo "<h6>Orden de trabajo impresa por: $_SESSION[user]</h6>";

?>
<div class='datagrid'>
<table ><tr><td>Nombre y firma del cliente:__________________________</td><td >Nombre y firma del técnico:______________________________</td></tr></table></div>

<p>Firmo de conformidad esta orden de instalación, aceptando los trabajos como realizados a mi entera satisfacción y me doy por enterad@ de las clausulas que se me entregan junto con la firma de esta orden de instalación.</p>
---------------------------------------------------------------------------------------------------------------------------------------
<p>El Cliente se da por enterado que:</p>
<p>
Objetivo de los grupos de WHATS APP:<br>
• Generar una dinámica que mantenga un ambiente de cordialidad y respeto.<br>
• Su uso es exclusivo para reportes de fallas en el servicio de datos.<br>
• Que esta prohibido el envío de cadenas y de imágenes de contenido inapropiado. <br>
• Que esta prohibida la promoción o publicidad de particulares, negocios, empresas ajenas a Intekra. <br>
• Que esta prohibido el uso de palabras altisonantes que generen un ambiente incómodo para los integrantes.<br>

PORTAL DEL CLIENTE:<br>
• Que se da por enterado que existe un portal del cliente en el cual entre otras cosas podrá consultar sus datos consumidos, sus facturas pendientes, reportes de pago, reportes de servicios tecnicos que no tengan que ver con la falla del servicio de datos.<br>
• Que deberá proporcionar a Intekra, un correo electrónico por medio del cual se le enviaran los accsesos para el ingreso a su portal del cliente. <br>
• Que se da por enterado que el unico medio por el cual se podrán reportar pagos es atraves de su portal del cliente y no por los grupos de whatsapp<br>
• Que se dá por enterado que todo reporte de pago fuera de horario de oficina se aplicará al día siguiente hábil.<br>

HORARIOS DE ATENCION AL PÚBLICO.<br>
• Oficinas Generales: de Lunes a Viernes en horario corrido de 8:00am a 6:00pm. <br>
Sábado: de 8:00am a 2:00pm. <br>
• Servicio técnico: Lunes a Viernes en horario corrido de 8:00am a 5:00pm. <br>
Sábado: de 8:00am a 1:00pm. <br>
• Que se dá por enterado que el tiempo de respuesta para la solución de cualquier falla tecnica es de hasta 72 horas hábiles.<br>
• Que se dá por enterado que no contamos con soporte técnico de 24 horas ni guardias de fin de semana.<br>
• Que se dá por enterado que el servicio de datos quedará suspendido a los 2 dias posteriores a la fecha de corte que el técnico le indicó el día de su instalación.<br>
• Que se dá por enterado que no desconectará los equipos por ningun motivo salvo que se les indique.</p>

</body>