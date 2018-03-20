<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
		</tr>
		<?php foreach ($categorias as $cate): ?>
			<tr>
				<td><?= $cate->nombre?></td>
			</tr>
		<?php endforeach;?>
		</table>
	</div>	
				