<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<th>Telefono</th>
			<th>ciudad de nacimiento</th>
			<th>lenguajes de programacion</th>
			
		</tr>
		
		<?php foreach ($empleados as $empleado): ?>
			<tr>
				<td><?= $empleado->nombre?></td>
				<td><?= $empleado->ap1?></td>
				<td><?= $empleado->ap2?></td>
				<td><?= $empleado->tlf?></td>
				<td><?= $empleado->ciudad?></td>
				<td><?= $empleado->lenguaje?></td>
			</tr>
		<?php endforeach;?>
	</table>
</div>

