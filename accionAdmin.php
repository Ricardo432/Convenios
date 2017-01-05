<?php
session_start();
if($_SESSION['tipo'] == 'venta' || $_SESSION['tipo'] == ""){
  header('location:index.html');
  }
include('conexion.php');
$idcliente = $_GET['id'];
echo $idcliente;
$query = "UPDATE clientes SET Alta=\"1\" WHERE Id_cliente=$idcliente";

mysql_query($query) or die('Consulta fallida: ' . mysql_error());
header('location: Consulta.php')
?>