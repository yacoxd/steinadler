<?php echo form_open($this->uri->uri_string())?>

<h1>Services</h1>

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
	<label>Primer Texto</label>
	<input type="text" name="text_1" class="form-control" value="<?php echo @$text_info[0][TEXT_DESCRIPTION]; ?>"  placeholder="Primer Texto">
	
	<label>Texto</label>
	<textarea type="text" name="text_2" class="form-control" ><?php echo @$text_info[1][TEXT_DESCRIPTION]; ?></textarea>
	
	<label>Segundo Texto</label>
	<input type="text" name="text_3" class="form-control" value="<?php echo @$text_info[2][TEXT_DESCRIPTION]; ?>"  placeholder="Primer Texto">
	
	<label>Texto</label>
	<textarea type="text" name="text_4" class="form-control" ><?php echo @$text_info[3][TEXT_DESCRIPTION]; ?></textarea>
	
	<label>Tercer Texto</label>
	<input type="text" name="text_5" class="form-control" value="<?php echo @$text_info[4][TEXT_DESCRIPTION]; ?>"  placeholder="Primer Texto">
	
	
</div>

<h3>Services</h3>

<div class="well">
	<table class="table">
		<thead>
			<tr>
				<th>Service</th>
				<th width="5%">Editar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($services as $service) {	?>
			
			<tr>
				<td><?php echo $service[SERVICE_TITLE] ?></td>
				<td><?php echo anchor(base_url('admin/'.$this->uri->segment(2).'/editar-service/'.$service[SERVICE_ID]), 'Editar') ?></td>
			</tr>
				
		<?php } ?>
		</tbody>
	</table>
</div>

<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>

<?php echo form_close()?>