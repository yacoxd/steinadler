<?php
/*
 |---------------------------------------------
 | Plataforma Administrativa Language file
 | @author Abner Tellez
 |
 | Used to Backend pages
 |---------------------------------------------
 */

 /*
 |---------------------------------------------
 Login
 |---------------------------------------------
 */
 
 
 
 $lang['login_user_no_active'] = 'Usuario Inactivo.';
 $lang['login_user_no_match_password'] = 'Usuario y/o contraseña incorrecta.';
 
 $lang['login_user_usuario'] = 'Usuario';
 $lang['login_user_password'] = 'Contraseña';
 $lang['login_confirm_password'] = 'Confirmar Contraseña';
 
 $lang['login_button'] = 'Iniciar sesión';
 
 $lang['login_forgot_password_button'] = 'Olvide mi contraseña';
 
$lang['login_register_button'] = 'Regístrate en Zunun';
 
$lang['login_msg_title'] = 'Información';
$lang['login_forgot_password_button'] = '¿Olvidaste tu Contraseña?';

$lang['login_reset_password'] = 'Cambiar Contraseña';
$lang['login_reset_password_description'] = '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>';

$lang['login_forgot_password_description'] = '<p>Ingrese el correo que utiliza en la plataforma para que le enviemos las instrucciones para reiniciar su contraseña</p>';

$lang['login_error_forgot_password'] = '<p>No fue posible enviar la información para reiniciar su contraseña, verifique la cuenta de usuario e intentalo nuevamente.</p>';
$lang['login_success_forgot_password'] = '<p>Se enviaron las instrucciones para reiniciar la contraseña al email relacionado con el usuario.</p>';

$lang['login_error_reset_password'] = '<p>No fue posible cambiar la contraseña, verifique la validez del key.</p>';
$lang['login_error_register_user'] = '<p>No se pudo realizar el registro en la plataforma.</p>';
$lang['login_success_reset_password'] = '<p>Se cambio satisfactoriamente la contraseña.</p>';




//Register

$lang['login_register_description'] = '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>';

$lang['login_register_email'] ='Email';
$lang['login_register_name'] ='Nombres';
$lang['login_register_last_names'] ='Apellidos';
$lang['login_register_username'] ='Usuario';
$lang['login_register_password'] ='Password';
$lang['login_register_password2'] ='Confirmar';
$lang['login_register_type'] ='Tipo de usuario';
$lang['login_register_captcha'] ='Captcha';

$lang['login_register_captcha_error'] ='Captcha incorrecto';

$lang['login_register_type_parent'] ='Tutor';
$lang['login_register_type_student'] ='Estudiante';

/*
 * Emails Login
 * 
 * */
 
 //Forgot Password 

$lang['auth_subject_forgot_password'] = '¿Olvidaste la contraseña?';

$lang['email_fp_request_password']             = 'Reinicia la Contraseña';
$lang['email_description_forgot_password']   		= "A continuación encontrarás un link para cambiar tu contraseña. Al clickearlo serás llevado a una página donde podrás ingresar tu nueva contraseña. <br><br>";
$lang['email_link_error'] = '¿No te funciona el link? copia este texto en tu navegador: ';

//Reset Password

$lang['email_title_reset_password'] = 'Reinicio de Contraseña';
$lang['email_description_reset_password'] = 'Este es parte del procedimiento para crear una nueva contraseña en el sistema. Si tu NO solicitaste una nueva contraseña entonces por favor contacta al administrador.';

$lang['email_title_username'] = 'Usuario';
$lang['email_title_email'] = 'Correo';

 //Activate account

$lang['auth_subject_activate_account'] = 'Activar Cuenta';

$lang['auth_subject_activate_account_title']          = 'Activar cuenta';
$lang['auth_subject_activate_account_description']   = "A continuación encontrarás un botón para finalizar tu registro. Al clickear el botón tu usuario será activado y podrás ingresar a la plataforma. ";



$lang['month_Jan'] = 'Enero';
$lang['month_Feb'] = 'Febrero';
$lang['month_Mar'] = 'Marzo';
$lang['month_Apr'] = 'Abril';
$lang['month_May'] = 'Mayo';
$lang['month_Jun'] = 'Junio';
$lang['month_Jul'] = 'Julio';
$lang['month_Aug'] = 'Agosto';
$lang['month_Sep'] = 'Septiembre';
$lang['month_Oct'] = 'Octubre';
$lang['month_Nov'] = 'Noviembre';
$lang['month_Dec'] = 'Diciembre';


/*
 |---------------------------------------------
 URL
 |---------------------------------------------
 */
 
 //Login
 $lang['login_forgot_password_url'] = 'admin/olvide-mi-contrasenia';
 $lang['login_register_url'] = 'admin/registro';
 $lang['login_active_url'] = 'admin/activar';
 $lang['login_reset_password_url'] = 'admin/reiniciar-contrasenia';
 $lang['login_information_url'] = 'admin/informacion';
 