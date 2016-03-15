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
			<div class="col-md-4 col-centered" >
			<?php

			echo heading($this -> lang -> line('login_msg_title'), 1);
			echo $this -> session -> flashdata('message_login');
				?>
			</div>
		</div>

	</body>
</html>

