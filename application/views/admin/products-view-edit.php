<?php echo form_open($this->uri->uri_string())?>

<h1><?php echo @$breadcrumb_lv1 ?></h1>

<h3 class="seo" >Información SEO</h3>
<div class="well seo">
	<label>Título de la Pagina</label>
	<input type="text" name="page_title" class="form-control" value="<?php echo @$info_page[PAGE_TITLE] ?>" placeholder="Título de la Pagina">
	<label>Tags de la Pagina</label>
	<input type="text" name="page_tags" class="form-control" value="<?php echo @$info_page[PAGE_TAGS] ?>" placeholder="Tags de la Pagina">
	<label>Descripción de la Pagina</label>
	<input type="text" name="page_description" class="form-control" value="<?php echo @$info_page[PAGE_DESCRIPTION] ?>" placeholder="Descripción de la Pagina">
</div>

<h3>Textos</h3>
<div class="well">
	<label>Título</label>
	<input type="text" name="text_1" class="form-control" value="<?php echo @$text_info[0][TEXT_DESCRIPTION]; ?>"  placeholder="Título">
	<label>Texto</label>
	<textarea type="text" name="text_2" class="form-control" ><?php echo @$text_info[1][TEXT_DESCRIPTION]; ?></textarea>
</div>

<h3>Productos</h3>

<div class="well">
	<label>Texto</label>
	<input type="text" name="text_3" class="form-control" value="<?php echo @$text_info[2][TEXT_DESCRIPTION]; ?>"  placeholder="Texto">
	
	<table class="table">
		<thead>
			<tr>
				<th>Producto</th>
				<th width="5%">Editar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($products as $product) {	?>
			
			<tr>
				<td><?php echo $product[PRODUCT_NAME] ?></td>
				<td><?php echo anchor(base_url('admin/'.$this->uri->segment(2).'/editar-producto/'.$product[PRODUCT_ID]), 'Editar') ?></td>
			</tr>
				
		<?php } ?>
		</tbody>
	</table>
</div>


<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>

<?php echo form_close()?>