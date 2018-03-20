<div class="container">
<h1>hola usuario</h1>
<form action="<?=base_url()?>empleado/crearpost" method="post">
 nombre<input type="text" name="nombre" id="nombre"><br/>
 password<input type="password" name="passwd" id="passwd"><br/>
apellido1	<input type="text" name="ap1" id="ap1"><br/>
	apellido2<input type="text" name="ap2" id="ape2"><br/>
	telefono <input type="text" name="tlf" id="tlf"><br/>

<label for="idciudad">ciudad de nacimiento</label>
<select id="idciudad" name="idciudad">
<?php foreach ($ciu as $cius):?>
<option value="<?=$cius->id ?>"><?=$cius->nombre ?></option>
<?php endforeach;?>
</select>
<label for="idleng">lenguajes de programacion</label>
<select id="idleng" name="idleng">
<?php foreach ($leng as $lengs):?>
<option value="<?=$lengs->id ?>"><?=$lengs->nombre ?></option>
<?php endforeach;?>
</select>

	<input type="submit">
</form>
</div>