
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ordenes de Trabajo</title>
		
		<script type="text/javascript" charset="utf-8" src="inc/jQuery.js"></script>
		<script type="text/javascript" charset="utf-8" src="inc/ajax.js"></script>

		<link href="js/select2.css" rel="stylesheet" />
		<script type="text/javascript" src="js/select2.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


	</head>
	<body>
	<form method="post" action="ods.php">
		<label>Familia:</label>
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

		<label>Cliente:</label>
		
		<select name="clientes" class="js-example-basic-single">
			<option value="x">Seleccione</option>
		</select><br/>

		<label>Servicio:</label>
		<select name="servicio" class="js-example-basic-single">
			<option value="0">Seleccione</option>
				
		</select><br />

		<label>Fecha del servicio:</label>
		<input type="date" name="fecha"><br>

		<label>Observaciones:</label>
		<textarea name="obs" cols='33' rows='8'></textarea><br>
		<input class="but" width="100%" type="submit" name="">
</form>
	</body>
</html>
