<?php echo form_open($this->uri->uri_string())?>

<h1>Locations</h1>

<h3 class="seo" >Información SEO</h3>
<div class="well seo">
	<label>Título de la Pagina</label>
	<input type="text" name="page_title" class="form-control" value="<?php echo @$info_page[PAGE_TITLE] ?>" placeholder="Título de la Pagina">
	<label>Tags de la Pagina</label>
	<input type="text" name="page_tags" class="form-control" value="<?php echo @$info_page[PAGE_TAGS] ?>" placeholder="Tags de la Pagina">
	<label>Descripción de la Pagina</label>
	<input type="text" name="page_description" class="form-control" value="<?php echo @$info_page[PAGE_DESCRIPTION] ?>" placeholder="Descripción de la Pagina">
</div>

<h3>Locations</h3>

<div class="well">
	<table class="table">
		<thead>
			<tr>
				<th>Location</th>
				<th width="5%">Editar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($locations as $location) {	?>
			
			<tr>
				<td><?php echo $location[LOCATION_NAME] ?></td>
				<td><?php echo anchor(base_url('admin/'.$this->uri->segment(2).'/editar-location/'.$location[LOCATION_ID]), 'Editar') ?></td>
			</tr>
				
		<?php } ?>
		</tbody>
	</table>
</div>

<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>

<?php echo form_close()?>