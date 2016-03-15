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
			echo heading($this -> lang -> line('login_reset_password'), 1, 'class="text-center"');
			?>

			<div class="clear"></div>

			<input type="password" class="form-control" name="password" placeholder="Contraseña" required="" autofocus="">
			<input type="password" class="form-control" name="password_confirm" placeholder="Ingresala Nuevamente" required="" autofocus="">

			<div class="row top-buffer spacer-10"></div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Restaurar Contraseña
			</button>
			<div class="row spacer-10 "></div>
			<?php
			if ($this -> session -> flashdata('message_login') || set_value('password') != '') {
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