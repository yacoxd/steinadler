<?php echo form_open_multipart($this->uri->uri_string())?>



<h1><?php echo $breadcrumb_lv2 ?></h1>

<h3>News</h3>
<div class="well">
	<label>New</label>
	<input type="text" name="name" class="form-control" value="<?php echo @$new[NEW_DESCRIPTION]; ?>"  placeholder="New">
	
	<label>Date</label>
	<input type="text" name="date" class="datepicker form-control" data-date-format="d-m-yyyy" value="<?php echo (@$new[NEW_DATE] != '') ? date('d-m-Y', strtotime(@$new[NEW_DATE])) : ''; ?>"   placeholder="Date">
	
	
</div>


<button type="submit" class="pull-right btn btn-primary">Guardar Información</button>

<div class="row spacer-40 "> </div>


<?php echo form_close()?>