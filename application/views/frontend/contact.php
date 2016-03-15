<div class="row text-center">
	<?php  echo heading($this->lang->line('pt_contact_title'),1) ?>
</div>

<div class="row col-md-10 col-centered contact-address">
	<?php for ($i=0; $i< 4; $i++) {?>
	<div class ="col-md-3 col-sm-3 fadein" >
		<?php echo heading($locations[$i][LOCATION_NAME],4)?>
		<p>
			<?php echo $locations[$i][LOCATION_ADDRESS] ?>
		</p>
		<?php if ($locations[$i][LOCATION_PHONE1] != '') {?>
			<span class="phone"><?php echo $locations[$i][LOCATION_PHONE1] ?></span>
		<?php } ?>
		<?php if ($locations[$i][LOCATION_PHONE2] != '') {?>
			<span class="phone"><?php echo $locations[$i][LOCATION_PHONE2] ?></span>
		<?php } ?>
		
		
		<?php if ($locations[$i][LOCATION_EMAIL1] != '') {?>
			<span class="email"><?php echo $locations[$i][LOCATION_EMAIL1] ?></span>
		<?php } ?>
		<?php if ($locations[$i][LOCATION_EMAIL2] != '') {?>
			<span class="email"><?php echo $locations[$i][LOCATION_EMAIL2] ?></span>
		<?php } ?>
		
	</div>
	
	<?php  } ?>
	
</div>

</div>

<div class="wrapper-contruction">
	
	<div class="container contact-form fadein">
		<div class="col-md-3 col-sm-6 col-centered" >
			<?php echo heading($this->lang->line('pt_contact_title_form'),3);
			
			echo form_open($this->uri->uri_string()); ?>
			
			<div class="field-one">
				
				<label><?php echo $this->lang->line('pt_contact_label_name') ?></label>
				<input type="text" value="" name="name" placeholder="<?php echo $this->lang->line('pt_contact_label_placeholder_name') ?>"/>
			</div>
			<div class="field">
				<label><?php echo $this->lang->line('pt_contact_label_country') ?></label>
				<input type="text" value="" name="country" placeholder="<?php echo $this->lang->line('pt_contact_label_placeholder_country') ?>"/>
			</div>
			<div class="field">
				<label><?php echo $this->lang->line('pt_contact_label_email') ?></label>
				<input type="text" value="" name="email" placeholder="<?php echo $this->lang->line('pt_contact_label_placeholder_email') ?>"/>
			</div>
			<div class="field">
				<label><?php echo $this->lang->line('pt_contact_label_message') ?></label>
				<textarea name="message" placeholder="<?php echo $this->lang->line('pt_contact_label_placeholder_message') ?>"></textarea>
			</div>
			
			<input type="submit" class="send-form col-centered" value=""/>
				
			
		</div>
		
		<?php 
		
		echo form_close();
		echo heading($this->lang->line('pt_contact_label_developer_team'),6); ?>
	
	</div>	
</div>



<div class="container">




		<script>
			/*
			 * Lazy Line Painter - Path Object
			 * Generated using 'SVG to Lazy Line Converter'
			 *
			 * http://lazylinepainter.info
			 * Copyright 2013, Cam O'Connell
			 *
			 */

		var pathObj = {
		    "svgothers": {
        "strokepath": [
            {
                "path": "M1919.797,578.994  c0,0-761.257-493.136-1293.717-493.136C93.619,85.858-1.777,295.254-1.777,295.254",
                "duration": 900
            },
            {
                "path": "M1922.431,595.238  c0,0-285.634-574.893-897.294-368.365S0.021,415.29,0.021,415.29",
                "duration": 900
            },
            {
                "path": "M1087.296,0.125  c285.507,10.895,440.135,515.208,603.096,315.6c90.003-110.244,175.784-216.164,232.039-168.607",
                "duration": 900
            },
            {
                "path": "M0.021,542.472  c0,0,924.091-168.075,384.03-392.45C233.821,87.607,1714.974,356.377,1921.022,4.493",
                "duration": 900
            }
        ],
        "dimensions": {
            "width": 1920,
            "height": 600
        }
		    }
		}; 

			/*
			 Setup and Paint your lazyline!
			 */

			$(document).ready(function() {
				$('#svgothers').lazylinepainter({
					"svgData" : pathObj,
					"strokeWidth" : 1,
					"strokeColor" : "#F2E0B3"
				}).lazylinepainter('paint');

				$('.scroll-bar').mCustomScrollbar({
					scrollButtons : {
						enable : true
					}
				});
			});

	</script>
