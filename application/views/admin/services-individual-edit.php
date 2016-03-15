<?php echo form_open_multipart($this->uri->uri_string())?>

<h1><?php echo @$service[SERVICE_TITLE] ?></h1>

<h3><?php echo @$service[SERVICE_TITLE] ?></h3>
<div class="well">
	<label>Nombre</label>
	<input type="text" name="name" class="form-control" value="<?php echo @$service[SERVICE_TITLE]; ?>"  placeholder="Nombre">
	
	<label>Texto</label>
	<textarea type="text" name="description" class="form-control" ><?php echo @$service[SERVICE_DESCRIPTION]; ?></textarea>
	

	
</div>


<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>


<?php echo form_close()?>