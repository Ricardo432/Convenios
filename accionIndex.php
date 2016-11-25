
<?php
include('conexion.php');
$usuario = $_POST['user'];
$pass = $_POST['password'];
$query = 'SELECT * FROM usuarios';
session_start();
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_NUM)) {  
	if ($line[1]==$usuario) {
		$userbool=true;
		if ($line[2]==$pass) {
			$passbool=true;
			if($line[4]=="tecnico"){
				$_SESSION['id']=$line[0];
				$_SESSION['user']=$line[3];
				$_SESSION['tipo']=$line[4];
				header('Location: formTecnico.php');
				break;
			}else{
				$_SESSION['id']=$line[0];
				$_SESSION['user']=$line[3];
				$_SESSION['tipo']=$line[4];
				header('Location: formVentas.php?Li=0');
				break;
			}
		}else{
			$passbool=false;
		}
	}else{
		$userbool=false;
		}
}
if ($userbool == false) {
	header('Location: index.html');
}
if ($passbool == false) {
	header('Location: index.html');
	
}
?>
