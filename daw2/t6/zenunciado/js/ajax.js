var conexion;

function respuestaAjax(datos, direccion) {
	//PREPARACIÓN DE LOS DATOS A ENVIAR
	var datosURI = '';
	for ( atributo in datos ){
		datosURI+=atributo+"="+datos[atributo]+"&";
	}
	datosURI = datosURI.substr(0, (datosURI.length-1)); //Para quitar el último &
	console.log('Datos URI: '+datosURI); //DEBUG
	console.log('Direccion: '+direccion); //DEBUG
	
	//CONEXIÓN
	conexion = new XMLHttpRequest();
	conexion.open('POST', direccion, true);
	conexion.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	conexion.send(datosURI);
	
	conexion.onreadystatechange = function() {
		if (conexion.readyState==4 && conexion.status==200) {
			mostrarResultado();
		}
	}
}


