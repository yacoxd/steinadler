<?php echo form_open_multipart($this->uri->uri_string())?>

<h1><?php echo @$product[PRODUCT_NAME] ?></h1>

<h3><?php echo @$product[PRODUCT_NAME] ?></h3>
<div class="well">
	<label>Nombre</label>
	<input type="text" name="name" class="form-control" value="<?php echo @$product[PRODUCT_NAME]; ?>"  placeholder="Primer Texto">
	<label>Descripción</label>
	<textarea name="description" class="form-control" ><?php echo @$product[PRODUCT_DESCRIPTION]; ?></textarea>
</div>

<h3>Imagen</h3>
<div class="well">
	<label>Título</label>
	<input type="text" name="title" class="form-control" value="<?php echo @$product[PRODUCT_TITLE_IMAGE]; ?>"  placeholder="Primer Texto">
	<label>Texto Alternativo</label>
	<input type="text" name="alt" class="form-control" value="<?php echo @$product[PRODUCT_ALT_IMAGE]; ?>"  placeholder="Segundo Texto">
	<label>Cátalogo</label>
	<input type="file" name="catalog" class="form-control" >
	<?php 
	
	if(file_exists(PATH_PRODUCTS_FILES.'/'.@$product[PRODUCT_CATALOG]) && $product[PRODUCT_IMAGE] != ''){
		echo anchor(base_url(PATH_PRODUCTS_FILES.'/'.@$product[PRODUCT_CATALOG]), @$product[PRODUCT_CATALOG],'target="_BLANK" class="file"');
	}
	?>	
	
	
	<div class="row spacer-10 "> </div>
	<label>Imagen</label>
	<input type="file" name="image" class="form-control" >
	<?php 
	if(file_exists(PATH_PRODUCTS_FILES.'/'.@$product[PRODUCT_CATALOG]) && $product[PRODUCT_IMAGE] != ''){
	echo anchor(base_url(PATH_PRODUCTS_FILES.'/'.@$product[PRODUCT_IMAGE]),img(base_url(PATH_PRODUCTS_FILES.'/'.@$product[PRODUCT_IMAGE])),' class="view_image_preview"');
	} ?>
</div>

<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>


<?php echo form_close()?>