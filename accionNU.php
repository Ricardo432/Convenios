<?php 
$nom = $_POST['nombre'];
$usuario = $_POST['user'];
$pass = $_POST['password'];
$conpass = $_POST['confpassword'];
$tuse = $_POST['tuser'];
$query = "INSERT INTO usuarios (User,Password,Nombre,Tipo) VALUES('$usuario','$pass','$nom','$tuse')";

mysql_query($query) or die('Consulta fallida: ' . mysql_error());
header('location:newUser.php');

?>