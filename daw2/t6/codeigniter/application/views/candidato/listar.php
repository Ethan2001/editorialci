
<table>
  <tr>
    <th>nombre</th>
    <th>?bilingue?</th>
    <th>opcion</th>
  </tr>
  
   <?php foreach ($can as $cans):?>
  <tr>
    <td><?=$cans->nombre ?></td>
    <td><?=$cans->opcion ?></td>
    <td>
    <form action="<?= base_url()?>candidato/modificar" method="post">
    <input type="hidden" name="idnombre" value="<?=$cans->id ?>">
    <input value="modificar" type="submit"/>
   </form>
   <form action="<?=base_url()?>candidato/borrar" method="post">
   <input type="hidden" name="idnombre" value="<?=$cans->id ?>">
    <input value="borrar" type="submit"/>
   </form>
 
   
    </td>
  </tr>
   <?php endforeach;?>
</table>

</div>