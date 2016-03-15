<div class="col-centered col-md-7 col-sm-7 services">

<div class="col-md-8 col-sm-8 fadein">
	<?php echo heading($text_info[0][TEXT_DESCRIPTION],2)?>
	<?php echo $text_info[1][TEXT_DESCRIPTION]; ?>
	<?php echo heading($text_info[4][TEXT_DESCRIPTION],2, 'class="margin-top"')?>
	
</div>

<div class="col-md-4 col-sm-4 fadein">
	<?php echo heading($text_info[2][TEXT_DESCRIPTION],2)?>
	<?php echo $text_info[3][TEXT_DESCRIPTION]; ?>
	
</div>
	
</div>



</div>

<div class="wrapper-contruction services">

	<div id="services" class="container ">
		
		<div class="row nopadding col-md-7 col-sm-7 col-centered fadein">
			<div class="col-md-4 col-sm-4">
				<?php echo heading($services[0][SERVICE_TITLE],3)?>
				<?php echo $services[0][SERVICE_DESCRIPTION]; ?>
				
				<?php echo heading($services[1][SERVICE_TITLE],3)?>
				<?php echo $services[1][SERVICE_DESCRIPTION]; ?>
			</div>
			<div class="col-md-4 col-sm-4">
				<?php echo heading($services[2][SERVICE_TITLE],3)?>
				<?php echo $services[2][SERVICE_DESCRIPTION]; ?>
				
				<?php echo heading($services[3][SERVICE_TITLE],3)?>
				<?php echo $services[3][SERVICE_DESCRIPTION]; ?>
				
			</div>
			<div class="col-md-4 col-sm-4">
				<?php echo heading($services[4][SERVICE_TITLE],3)?>
				<?php echo $services[4][SERVICE_DESCRIPTION]; ?>
				
				<?php echo heading($services[5][SERVICE_TITLE],3)?>
				<?php echo $services[5][SERVICE_DESCRIPTION]; ?>
			</div>
				
		</div>

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
		                "path": "M1921.006,586.36  c0,0-760.474-539.495-1292.386-539.495c-531.911,0-627.208,229.08-627.208,229.08",
		                "duration": 600
		            },
		            {
		                "path": "M1.411,3.135  c0,0,769.046-44.089,1004.518,205.221c235.471,249.309,94.055,464.048,94.055,464.048",
		                "duration": 600
		            },
		            {
		                "path": "M1922.416,579.461  c0,0-285.635-605.501-897.295-387.978C413.461,409.008,0.005,389.932,0.005,389.932",
		                "duration": 600
		            },
		            {
		                "path": "M0.874,112.014  c632.478-69.311,1297.26,371.719,1525.188,134.526c125.886-131.001,245.319-256.671,399.298-226.727",
		                "duration": 600
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
				"strokeColor" : "#F2AD1C"
			}).lazylinepainter('paint');

			$('.scroll-bar').mCustomScrollbar({
				scrollButtons : {
					enable : true
				}
			});

			$('.hover-catalog').mouseover(function() {
				var uid = $(this).attr('uid');
				$('#catalog_' + uid).css('display', 'block');

			});

			$('.hover-catalog').mouseout(function() {

				var uid = $(this).attr('uid');
				$('#catalog_' + uid).css('display', 'none').delay(500000000000);

			});

		});

	</script>
