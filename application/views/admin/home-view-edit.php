<?php echo form_open($this->uri->uri_string())?>

<h1>Home</h1>

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
	<label>Segundo Texto</label>
	<input type="text" name="text_2" class="form-control" value="<?php echo @$text_info[1][TEXT_DESCRIPTION]; ?>"  placeholder="Segundo Texto">
</div>


<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>

<?php echo form_close()?>