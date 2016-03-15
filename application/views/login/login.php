<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">

		<title>Login</title>
		<?php
		echo link_tag('assets/css/signin.css');
		echo link_tag('assets/css/bootstrap.css');
		echo script_tag('assets/js/jquery-1.9.1.js');
		echo script_tag('assets/js/jquery-ui.js');
		echo script_tag('assets/js/bootstrap.min.js');
		?>
	</head>

	<body>

		<div class="container">
			<?php echo form_open($this -> uri -> uri_string(),'class="form-signin" role="form" ' )
			?>
			<h2 class="form-signin-heading">Administrador de Contenidos</h2>
			<input type="text" class="form-control" name="user" placeholder="Usuario" required="" autofocus="">
			<input type="password"  name="pass" class="form-control" placeholder="Password" required="">
			
			<a class="spacer-10 text-center" href="<?php echo base_url().$this->lang->line('login_forgot_password_url') ?>"> <?php echo $this->lang->line('login_forgot_password_button')
			?></a>
			<div class="row top-buffer"> </div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Ingresar
			</button>
			<div class="row spacer-10 "> </div>
				<?php
				if ($this -> session -> flashdata('message_login')) {
					echo '<div class="alert alert-danger">';
					echo '<ul>';
					echo $this -> session -> flashdata('message_login');
					echo validation_errors('<li>', '</li>');
					echo '</ul>';
					echo '</div>';
				}
				?>
			</form>

			

			

		</div>
		<!-- /container -->
<script>

$(document).ready(function(){
	$(".alert").alert();
	
	
});
	
	
	
</script>
		
	</body>
</html>