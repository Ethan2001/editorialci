<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>candidato/crearpost" method="post">
		<fieldset>
			<legend>
				<label for="idcandidato"> introducir los datos del candidato</label>
			</legend>
			<label for="nombre">Nombre</label> <input type="text" name="idnombre"
				id="idnombre"></input>
			<fieldset>
				<legend>nivel de ingles</legend>
 <input type="radio" name="opcion" value="nulo" id="nulo"> <label
					for="nulo">nulo</label> <br> <input type="radio" name="opcion"
					value="bajo"> <label for="bajo">bajo</label><br> <input
					type="radio" name="opcion" value="medio" checked="checked"> <label
					for="medio">medio</label><br> <input type="radio" name="opcion"
					value="alto"> <label for="alto">alto</label><br> <input
					type="radio" name="opcion" value="bilingue"> <label for="bilingue">bilingue</label><br>
			</fieldset>
			<input type="submit" value="registrar">
		</fieldset>
	</form>
	<div id="mensaje" class="row"> hola</div>
</div>
