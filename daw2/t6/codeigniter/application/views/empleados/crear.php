<div class="container">
<h1>hoola usuario</h1>
<form action="<?= base_url()?>empleados/crearpost" method="post">

nombre <input type="text" id="nombre" name="nombre"><br/>
fecha <input type="date" id="fecha" name="fecha"><br/>

<h1>ciudades</h1>
<select id="idciudades">
<?php foreach ($ciu as $cius):?>
<option value="<?=$cius->id ?>"><?=$cius->nombre ?></option>
<?php endforeach;?>
</select>


<?php foreach ($leng as $lengs):?>
<input type="checkbox"  value='<?=$lengs->id?>' id='<?=$lengs->id?>'  name="idleng[]"><?=$lengs->nombre ?></input>
<?php endforeach;?>




<input type="submit">

</form>



</div>