$(document).on("ready",function(){

	$("select[name='familia']").change(function(){

		id = $(this).val();

		$.post("inc/model.php","id="+id,function(datos){
			$("select[name='clientes']").html("");
			options = "<option>Seleccione</option>";
			$("select[name='clientes']").append(options);
			for(i = 0; i < datos.length; i++){
				$("select[name='clientes']").append("<option value="+datos[i]+">"+datos[(i+1)]+"</option>");
				i++;
			}
		},'json');

		$.post("inc/model2.php","id="+id,function(datos){
			$("select[name='servicio']").html("");
			options = "<option>Seleccione</option>";
			$("select[name='servicio']").append(options);
			for(i = 0; i < datos.length; i++){
				$("select[name='servicio']").append("<option value="+datos[i]+">"+datos[(i+1)]+"</option>");
				i++;
			}
		},'json');

	});

});
