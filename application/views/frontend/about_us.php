<div class="row about-us col-md-8 nopadding col-centered">
	<div class="col-md-6 col-sm-6 fadein">
		<?php echo heading($text_info[0][TEXT_DESCRIPTION],1,'class="fadein"')?>
		<?php echo $text_info[1][TEXT_DESCRIPTION] ?>
	</div>
	
	<div class="col-md-6 col-sm-6 news nopadding fadein">
		<?php echo heading($this->lang->line('pt_about_us_title_news'),1)?>
		<div class="scroll-bar fadein">
		<?php foreach($news as $new) { ?>
		<div class="row new">
		
		
			<div class="col-md-3 col-sm-4 date">
				<?php echo date("F jS, Y", strtotime($new[NEW_DATE])); ?>
			</div>
			<div class="col-md-9 col-sm-7">
				<p><?php echo $new[NEW_DESCRIPTION]?></p>
			</div>
		</div>
		<?php }  ?>
		</div>
	</div>

	
</div>	
<div class="row spacer-40"></div>

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
	                "path": "M1929.64,598.695  c0,0-429.365-598.57-963.635-598.57c-534.271,0-965.88,598.57-965.88,598.57",
	                "duration": 600
	            },
	            {
	                "path": "M1931.056,591.709  c0,0,11.332-227.195-608.802-389.142C702.12,40.623,0.125,409.52,0.125,409.52",
	                "duration": 600
	            },
	            {
	                "path": "M1092.218,0.125  c286.772,11.03,442.087,521.627,605.77,319.531c90.402-111.617,176.564-218.856,233.068-170.708",
	                "duration": 600
	            },
	            {
	                "path": "M0.125,409.52  c0,0,39.611-494.708,613.479-348.844C1430.158,268.225,1929.64,33.09,1929.64,33.09",
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
				"strokeColor" : "#AD9F82"
			}).lazylinepainter('paint');
			
			
			$('.scroll-bar').mCustomScrollbar({
				scrollButtons:{
          			enable:true
			        }
			  	});
			});

	</script>
