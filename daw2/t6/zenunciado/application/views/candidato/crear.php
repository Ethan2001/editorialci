<html>
<head>
<title>Crear nuveo candidato</title>
</head>
<body>
<form name="crear">
	<fieldset><legend>Introduce datos del candidato</legend>
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" required="required"/>
		
		<fieldset><legend>Nivel de inglés</legend>
			<input type="radio" id="nulo" name="nivel" value="Nulo"  />
			<label for="nulo">Nulo</label>
			<br/>
			<input type="radio" id="bajo" name="nivel" value="Bajo" />
			<label for="bajo">Bajo</label>
			<br/>
			<input type="radio" id="medio" name="nivel" value="Medio" checked="checked"/>
			<label for="medio">Medio</label>
			<br/>
			<input type="radio" id="alto" name="nivel" value="Alto" />
			<label for="alto">Alto</label>
			<br/>
			<input type="radio" id="bil" name="nivel" value="Biling" />
			<label for="bil">Bilingüe</label>
		</fieldset>
		<br/>
		<input type="button" value="Registrar" onclick="enviar();"/>
	</fieldset>
</form>
<div id="info"></div>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
var conexion;

function enviar(){

	document.getElementById("info").innerHTML='';

	var nombre =  crear.nombre.value;
	var nivel = crear.nivel.value;

	if (nombre.length>1){
		var datos = { 'nombre':nombre , 'nivel':nivel };
		var direccion = '<?=base_url()?>candidato/crearPOST';
		respuestaAjax(datos, direccion);
		crear.nombre.value='';
		crear.nivel.value='Medio';
	} else {
		document.getElementById("info").innerHTML="Debes introducir un nombre";
		crear.nivel.value='Medio';
	}
	
	return true;
}

function mostrarResultado(){
	var textoRecibido = conexion.responseText;
	document.getElementById("info").innerHTML=textoRecibido;
}

</script>
</body>
</html>