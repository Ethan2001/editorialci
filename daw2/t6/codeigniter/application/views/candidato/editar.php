
<form  action="<?=base_url()?>candidato/modificarpost" method="post">
nombre nuevo
<input type="text" id="nnombre" name="nnombre" value=<?=$cand->nombre ?>></input>
<input type="hidden" name="idnombre" value="<?= $cand->id ?>"/>

<input type="submit" value="Guardar"/>

</form>
</div>