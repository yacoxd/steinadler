<?php echo form_open_multipart($this->uri->uri_string())?>

<h1><?php echo @$location[LOCATION_NAME] ?></h1>

<h3><?php echo @$location[LOCATION_NAME] ?></h3>
<div class="well">
	<label>Nombre</label>
	<input type="text" name="name" class="form-control" value="<?php echo @$location[LOCATION_NAME]; ?>"  placeholder="Nombre">
	
	<label>Dirección</label>
	<input type="text" name="address" class="form-control" value="<?php echo @$location[LOCATION_ADDRESS]; ?>"  placeholder="Dirección">
	
	<label>Teléfono 1</label>
	<input type="text" name="phone1" class="form-control" value="<?php echo @$location[LOCATION_PHONE1]; ?>"  placeholder="Teléfono 1">
	
	<label>Teléfono 2</label>
	<input type="text" name="phone2" class="form-control" value="<?php echo @$location[LOCATION_PHONE2]; ?>"  placeholder="Teléfono 2">
	
	<label>Email 1</label>
	<input type="text" name="email1" class="form-control" value="<?php echo @$location[LOCATION_EMAIL1]; ?>"  placeholder="Email 1">
	
	<label>Email 2</label>
	<input type="text" name="email2" class="form-control" value="<?php echo @$location[LOCATION_EMAIL2]; ?>"  placeholder="Email 2">
	
</div>


<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>


<?php echo form_close()?>