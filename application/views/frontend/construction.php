<div class="col-centered col-md-8 colum-container">
	<div class="fadein">
		<div id ="columna" >
			
				<?php echo anchor(base_url(),img('assets/images/frontend/'.$icon));
				
				
				echo heading($text_info[0][TEXT_DESCRIPTION],1);
				echo $text_info[1][TEXT_DESCRIPTION];
		
				?>
			</div>
		</div>
</div>

</div>

<div class="wrapper-contruction">

	<div id="products" class="container fadein">
		<div class="row col-md-5 col-centered nopadding">
			<?php echo heading($this->lang->line('pt_page_title_products'),4)?>
			<p><?php echo $text_info[2][TEXT_DESCRIPTION]; ?></p>

		</div>

		<div class="row product-columns fadein">
			<div class="col-md-4 col-sm-4">
				<div class="col-md-6 col-sm-6 nopadding">
					<?php

					$image = array(
						'src' => base_url(PATH_PRODUCTS_FILES.'/'.@$products[0][PRODUCT_IMAGE]),
						'title' => @$products[0][PRODUCT_TITLE_IMAGE],
						'alt' => @$products[0][PRODUCT_ALT_IMAGE],
						'class' => 'img-responsive col-centered',
					);

									echo img($image);
					?>
				</div>
				<div class="col-md-6 col-sm-6 nopadding">
					
					<?php if (file_exists(PATH_PRODUCTS_FILES.'/'.@$products[0][PRODUCT_CATALOG]) && @$products[0][PRODUCT_CATALOG]!= ''){ ?>
					<a href="<?php echo PATH_PRODUCTS_FILES.'/'.@$products[0][PRODUCT_CATALOG] ?>"  id="catalog_0" target="_Blank" class="download_file"> </a>
					
					<a href="<?php echo PATH_PRODUCTS_FILES.'/'.@$products[0][PRODUCT_CATALOG] ?>"  target="_Blank" >				
						<?php echo heading(@$products[0][PRODUCT_NAME],5, 'class="hover-catalog" uid="0"')?>
					</a>
					<?php }else{ ?>
						<?php echo heading(@$products[0][PRODUCT_NAME],5)?>
					<?php
					}
					?>
					<div class="scroll-bar">
						<?php echo @$products[0][PRODUCT_DESCRIPTION]; ?>
					</div>
				</div>

			</div>
			<div class="col-md-4 col-sm-4 center-colum">
				<div class="col-md-6 col-sm-6 nopadding">
					<?php

					$image = array(
						'src' => base_url(PATH_PRODUCTS_FILES.'/'.@$products[1][PRODUCT_IMAGE]),
						'title' => @$products[1][PRODUCT_TITLE_IMAGE],
						'alt' => @$products[1][PRODUCT_ALT_IMAGE],
						'class' => 'img-responsive col-centered',
					);

					echo img($image);
					?>
				</div>
				<div class="col-md-6 col-sm-6 nopadding">
					
					<?php if (file_exists(PATH_PRODUCTS_FILES.'/'.@$products[1][PRODUCT_CATALOG]) && @$products[1][PRODUCT_CATALOG]!= ''){ ?>
					<a href="<?php echo PATH_PRODUCTS_FILES.'/'.@$products[1][PRODUCT_CATALOG] ?>"  id="catalog_1" target="_Blank" class="download_file"> </a>
					
					<a href="<?php echo PATH_PRODUCTS_FILES.'/'.@$products[1][PRODUCT_CATALOG] ?>"  target="_Blank" >				
						<?php echo heading(@$products[1][PRODUCT_NAME],5, 'class="hover-catalog" uid="1"')?>
					</a>
					<?php }else{ ?>
						<?php echo heading(@$products[1][PRODUCT_NAME],5)?>
					<?php
					}
					?>
					<div class="scroll-bar">
						<?php echo @$products[1][PRODUCT_DESCRIPTION]; ?>
					</div>
				</div>

			</div>
			<div class="col-md-4 col-sm-4">
				<div class="col-md-6 col-sm-6 nopadding">
					<?php

					$image = array(
						'src' => base_url(PATH_PRODUCTS_FILES.'/'.@$products[2][PRODUCT_IMAGE]),
						'title' => @$products[2][PRODUCT_TITLE_IMAGE],
						'alt' => @$products[2][PRODUCT_ALT_IMAGE],
						'class' => 'img-responsive col-centered',
					);

					echo img($image);
					?>
				</div>
				<div class="col-md-6 col-sm-6 nopadding">
					
					<?php if (file_exists(PATH_PRODUCTS_FILES.'/'.@$products[2][PRODUCT_CATALOG]) && @$products[2][PRODUCT_CATALOG]!= ''){ ?>
					<a href="<?php echo PATH_PRODUCTS_FILES.'/'.@$products[2][PRODUCT_CATALOG] ?>"  id="catalog_2" target="_Blank" class="download_file"> </a>
					
					<a href="<?php echo PATH_PRODUCTS_FILES.'/'.@$products[2][PRODUCT_CATALOG] ?>"  target="_Blank" >				
						<?php echo heading(@$products[2][PRODUCT_NAME],5, 'class="hover-catalog" uid="2"')?>
					</a>
					<?php }else{ ?>
						<?php echo heading(@$products[2][PRODUCT_NAME],5)?>
					<?php
					}
					?>
					<div class="scroll-bar">
						<?php echo @$products[2][PRODUCT_DESCRIPTION]; ?>
					</div>
				</div>


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

		<?php 
		
		switch ($page_id) {
			case CONSTRUCTION_PAGE:
				
		?>
		var pathObj = {
		    "svgothers": {
		        "strokepath": [
		            {
		                "path": "M1919.856,512.189  c0,0-876.66-134.161-1407.817-134.161C-19.116,378.027,1.589,28.197,1.589,28.197",
		                "duration": 600
		            },
		            {
		                "path": "M0.074,506.213  c0,0,1422.792-506.088,1254.034-368.279c-411.494,336.03,665.641,212.377,665.641,212.377",
		                "duration": 600
		            },
		            {
		                "path": "M1601.516,0.125  C1316.415,9.564,575.63,346.379,412.901,173.443C323.027,77.931,56.249,562.209,0.074,603.411",
		                "duration": 600
		            },
		            {
		                "path": "M1.48,350.311  c0,0,17.957-345.481,588.479-220.664c811.795,177.601,1329.788-13.234,1329.788-13.234",
		                "duration": 600
		            }
		        ],
		        "dimensions": {
		            "width": 1920,
		            "height": 600
		        }
		    }
		}; 
		
		<?php
				
			break;
				
			case INDUSTRIAL_PAGE:
		?>
		var pathObj = {
	    "svgothers": {
        "strokepath": [
            {
                "path": "M1936.275-1.51  c0,0-884.783,141.239-1420.86,141.239c-536.076,0-515.181,368.286-515.181,368.286",
                "duration": 600
            },
            {
                "path": "M1920.76,571.688  c0,0-1435.974-566.057-1265.651-411.917c415.306,375.846-671.81,237.542-671.81,237.542",
                "duration": 600
            },
            {
                "path": "M321.414,0.125  c287.743,9.362,1035.394,343.432,1199.627,171.906c90.709-94.734,359.957,385.596,416.652,426.461",
                "duration": 600
            },
            {
                "path": "M0.234,347.456  c0,0,18.124-342.665,593.933-218.865c819.315,176.154,1342.108-13.125,1342.108-13.125",
                "duration": 600
            }
        ],
        "dimensions": {
            "width": 1920,
            "height": 600
        }
	    }
	}; 
		<?php	
			break;
					
			case AGRIBUSINESS_PAGE:
		?>
		
		
		var pathObj = {
	    "svgothers": {
	        "strokepath": [
	            {
	                "path": "M1919.902,484.046  c0,0-876.66-134.161-1407.817-134.161C-19.07,349.884,1.635,0.055,1.635,0.055",
	                "duration": 900
	            },
	            {
	                "path": "M1928.535,566.628  C1625.608,409.434,709.704,297.183,610.349,38.33C555.475-104.633,75.923,199.21,0.01,205.551",
	                "duration": 900
	            },
	            {
	                "path": "M1.526,322.168  c0,0,17.957-345.481,588.479-220.664c811.795,177.601,1329.788-13.234,1329.788-13.234",
	                "duration": 900
	            }
	        ],
	        "dimensions": {
	            "width": 1920,
	            "height": 600
	        }
	    }
	}; 
 
		
		<?php		
			break;
			
			
		}
		
		
		?>
		
		
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
				scrollButtons:{
          			enable:true
			        }
			  	});
			  	
			  	$('.hover-catalog').mouseover(function(){
			  		var uid = $(this).attr('uid');
			  		$('#catalog_'+uid).css('display','block');
			  		
			  	});
			  	
			  
			  	
			  	$('.hover-catalog').mouseout(function(){
			  		
			  		var uid = $(this).attr('uid');
			  		$('#catalog_'+uid).css('display','none').delay(500000000000);
			  		
			  	});
			  	
			});

	</script>
