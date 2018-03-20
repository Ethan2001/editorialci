<div class="container">
	<form class="form" action="<?=base_url() ?>ciudad/editarPost" method="post">
		<fieldset>
			<legend>Datos del lenguaje</legend>
			
			<label for="idNombre">Nombre</label>
			<input class="form-control" type="text" id="idNombre" name="nombre" value="<?= $lp->nombre ?>" />
			<input type="hidden" name="idciu" value="<?= $lp->id ?>">
			<input type="hidden" name="filtro" value="<?=$filtro ?>">
			<input type="submit" class="btn btn-default" value="Guardar"/>

		</fieldset>
	</form>
</div>

