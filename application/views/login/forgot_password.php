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
			<?php echo form_open($this -> uri -> uri_string(), 'class="form-signin" role="form" ');
		echo heading($this -> lang -> line('login_forgot_password_button'), 1, 'class="text-center"');
			?>
			
			<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email') ?>"required="" autofocus="">
			<div class="row spacer-10 "> </div>
			<?php 
				echo form_error('email', '<div class="alert alert-danger">', '</div>');
			?>
			
			
			
			
			<div class="row top-buffer spacer-10"> </div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Restaurar Contraseña
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
	
	
</body>
</html>