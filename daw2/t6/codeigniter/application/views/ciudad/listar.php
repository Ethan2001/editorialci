 <div class="container">

	<form action="<?=base_url()?>lenguajes/listarfiltro" method ="post">
	  <label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>
 <table class="table table-bordered">
	   <tr><th>nombre</th><th>accion</th></tr>
		<?php foreach ($ciu as $cius): ?>
			<tr>
			 <td><?=$cius->nombre ?></td>
			 <form action="<?=base_url()?>ciudad/editar" method ="post">
			 <input type="hidden" name="idciu" value="<?=$cius->id?>"/>
			 <input type="hidden" name="filtro" value="<?=$filtro ?>" />
			 <td><button class=" glyphicon glyphicon-edit" type="submit"/>
			 </form>
			 
			 <form action="<?=base_url()?>ciudad/borrar" method ="post">
			 <input type="hidden" name="idciu" value="<?=$cius->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			 </tr>
			 
         <?php endforeach; ?>
		 </table>

	</div>