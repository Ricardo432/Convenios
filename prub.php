
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ordenes de Trabajo</title>
		<link href="js/select2.css" rel="stylesheet" />
		<script type="text/javascript" src="js/select2.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="./zelect.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

	

	</head>
	<body> 
		<label>País:</label>
		<script type="text/javascript">
$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>

<select name="familia" class="js-example-basic-single">
			<option value="0">Seleccione</option>
			<?php include('conexion.php');
			$query ='SELECT * FROM familia';
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
				echo "<option value=".$line[0].">".$line[1]."</option>";
			}

			?>
			
		</select><br />
		<label>Ciudades:</label>
		<select name="clientes" >
			<option value="x">Seleccione</option>
		</select>
	</body>
</html>
