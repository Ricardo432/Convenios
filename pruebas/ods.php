<?php
/*include('conexion.php');
session_start();
$usuario = $_SESSION['ide'];
if( $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
  $cliente =$_POST['clientes'];
  $servicio =$_POST['servicio'];
  $fecha =$_POST['fecha'];
  $obs =$_POST['obs'];

  $query = "INSERT INTO odt (Id_cliente,Id_servicio,Fecha,Observaciones) VALUES('$cliente','$servicio','$fecha','$obs')";
  mysql_query($query) or die('Consulta fallida: ' . mysql_error());
  $query="SELECT * FROM `servicio` WHERE Id = (SELECT MAX(Id) from servicio)";*/
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" type="text/css" href="ods.css">
    	<title>Orden de Servicio</title>
    </head>
    <body>
    
    <img  class ="im" src="img/logointekra.jpg">
    <div class="datosItk">
    	Intekra, Seguridad y TI<br>
    	Agustin Beltran N°121 Col, Atasta <br>
    	Villahermosa, Tab. <br>
    	C.P. 86100
    </div>
    <div class="datosItk">
    	ODT<br>
    	
    </div>
        <br>
    </body>
    </html>