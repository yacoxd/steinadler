<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Renicio de Contraseña</title>
	<style type="text/css">
		p {	margin:0 !important;
			margin-bottom:0 !important;}
	</style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0; padding: 0; background-color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
		<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin: 0; padding: 0; background-color: #fff; height: 100%; width: 100%;">
			<tr>
				<td align="center" valign="top" >
					<table table border="0" cellpadding="0" cellspacing="0" width="650" style="background-color: #fff; border: 0; padding-top: 20px;">
						
						<tr>
							<td valign="top" style="padding-right: 50px; padding-left: 50px; padding-top: 35px; padding-bottom: 0; margin: 0;">
								<p style="text-align: justify; font-family: Arial, sans-serif; font-size: 18px; font-weight: bold; line-height: 18px !important; margin: 0 !important;">
								<?php echo $this->lang->line('email_fp_request_password') ?>
								</p>
								<p style="text-align: justify; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px; margin: 0px !important; padding: 0;">
									<?php echo $this->lang->line('email_description_forgot_password') ?> 
								</p>
							</td>
						</tr>
						<tr>
							<td valign="top" style="padding-right: 0; padding-left: 50px; padding-top: 30px; padding-bottom: 30px; margin: 0;">
								<table width="250px">
									<tr>
										<td valign="center" width="90px" style="text-align: left; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px; width: 90px;"><?php echo $this->lang->line('email_title_username') ?>:</td>
										<td valign="center" style="text-align: left; font-family: 'Times New Roman', Times, Georgia, serif; font-size: 18px; font-weight: bold; line-height: 18px;"><?php echo @$username?></td>
									</tr>
									<tr>
										<td valign="center" width="90px" style="text-align: left; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px; width: 90px;"><?php echo $this->lang->line('email_title_email') ?>:</td>
										<td valign="center" style="text-align: left; font-family: 'Times New Roman', Times, Georgia, serif; font-size: 18px; font-weight: bold; line-height: 18px;"><?php echo @$email ?></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font: Arial;padding:5px 0;background-color:#e7f4f6; margin-bottom: 100px;">
								<h3 style="color:#3c3e4b;font-size:13px;font-weight:normal;padding:10px 10px 30px 10px; margin: 0 20px 0 0;"> <?php echo $this->lang->line('email_link_error') ?></h3>
             					   <a href="<?php echo @$pwd_url;  ?>" style="color:#1a6cdc;font-style:italic;" title="<?php echo @$pwd_url;  ?>">
               						 <?php echo @$pwd_url;  ?></a>
							</td>
						</tr>
						
					</table>
				</td>
			</tr>
		</table>
</body>
</html>