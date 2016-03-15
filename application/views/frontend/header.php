<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">

		<title>Steinadler | <?php echo $info_page[PAGE_TITLE] ?></title>
		<meta name="Description" content="<?php echo $info_page[PAGE_DESCRIPTION] ?>" />
		<meta name="Keywords" content="<?php echo $info_page[PAGE_TAGS] ?>" />
		
		<!-- Favicon -->
		<?php echo link_tag('assets/images/frontend/favicon.png', 'shortcut icon', 'image/ico'); ?>		
		<!-- Favicon End-->
		
		<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		
		<?php

		echo link_tag('assets/js/fancybox/jquery.fancybox-1.3.4.css');
		echo link_tag('assets/js/datepicker/css/datepicker.css');
		echo link_tag('assets/css/grid-bootstrap.css');
		echo link_tag('assets/css/bootstrap.css');
		echo link_tag('assets/css/jquery.mCustomScrollbar.css');
		echo link_tag('assets/css/style.css');
		
		echo script_tag('assets/js/jquery-1.9.1.js');
		echo script_tag('assets/js/jquery-ui.js');
		echo script_tag('assets/js/fancybox/jquery.mousewheel-3.0.4.pack.js');
		echo script_tag('assets/js/fancybox/jquery.fancybox-1.3.4.js');
		echo script_tag('assets/js/bootstrap.min.js');
		echo script_tag('assets/js/raphael-min.js');
		echo script_tag('assets/js/datepicker/js/bootstrap-datepicker.js');
		echo script_tag('assets/js/jquery.lazylinepainter-1.4.1.min.js');
		
		echo script_tag('assets/js/jquery.mCustomScrollbar.min.js');
		echo script_tag('assets/js/jquery.mousewheel.min.js');
		echo script_tag('assets/js/jquery.ui.touch-punch.min.js.js');
		
		
		
		
		
		?>
</head>  
<body id="<?php echo $page_type?>" >
	
	<div class="container">
		
		<?php if ($page_id == HOME_PAGE){ ?>
			
   <!-- Fixed navbar -->
	    <div class="navbar navbar-inverse" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Options</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	
	        </div> 
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	           	<li><?php echo anchor(base_url('construction'),$this->lang->line('menu_construction'))	?>	</li>
				<li><?php echo anchor(base_url('industrial'),$this->lang->line('menu_industrial'))?>	</li>
				<li><?php echo anchor(base_url('agribussines'),$this->lang->line('menu_agribussines'))	?>	</li>
				<li><?php echo anchor(base_url('services'),$this->lang->line('menu_services'))	?>	</li>
	          </ul>
	         </div><!--/.nav-collapse -->
	      </div>
	    </div>
			
			
		<div id="nav-large" class="nav row col-md-5 col-sm-8 col-xs-8 col-centered">
			<ul class=" main-menu col-centered nopadding">
				<li><?php echo anchor(base_url('construction'),$this->lang->line('menu_construction'))	?>	</li>
				<li><?php echo anchor(base_url('industrial'),$this->lang->line('menu_industrial'))?>	</li>
				<li><?php echo anchor(base_url('agribussines'),$this->lang->line('menu_agribussines'))	?>	</li>
				<li><?php echo anchor(base_url('services'),$this->lang->line('menu_services'))	?>	</li>
			</ul>
		</div>
		<?php }else{ ?>
			
			   <!-- Fixed navbar -->
	    <div class="navbar navbar-inverse" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Options</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	
	        </div> 
	        <div class="navbar-collapse collapse">
	          <ul class="nav  navbar-nav">
				<li><?php echo anchor(base_url(''),$this->lang->line('menu_home'))	?>	</li>
	           	<li><?php echo anchor(base_url('construction'),$this->lang->line('menu_construction'))	?>	</li>
				<li><?php echo anchor(base_url('industrial'),$this->lang->line('menu_industrial'))?>	</li>
				<li><?php echo anchor(base_url('agribussines'),$this->lang->line('menu_agribussines'))	?>	</li>
				<li><?php echo anchor(base_url('services'),$this->lang->line('menu_services'))	?>	</li>
	          </ul>
	         </div><!--/.nav-collapse -->
	      </div>
	    </div>
			
			<div id="nav-large" class="nav nav2 row col-md-5 col-sm-8 col-xs-8 col-centered ">
					<ul class=" main-menu-2 nopadding">
						<li><?php echo anchor(base_url('construction'),$this->lang->line('menu_construction'),'class="'.(($page_id == CONSTRUCTION_PAGE) ? 'active' : ' ').' "' )	?>	</li>
						<li><?php echo anchor(base_url('industrial'),$this->lang->line('menu_industrial'),'class="'.(($page_id == INDUSTRIAL_PAGE) ? 'active' : ' ').' "' )	?>	</li>
					</ul>	
					
					<?php 
					
					if($page_type == ABOUT_US_PAGE){
						echo anchor(base_url(),img('assets/images/frontend/logo2.png'));		
					}else{
						echo anchor(base_url(),img('assets/images/frontend/nav-logo.png'));	
					}
					?>
				
					<ul class=" main-menu-2 nopadding">
						<li><?php echo anchor(base_url('agribussines'),$this->lang->line('menu_agribussines'),'class="'.(($page_id == AGRIBUSINESS_PAGE) ? 'active' : ' ').' "' )	?>	</li>
						<li><?php echo anchor(base_url('services'),$this->lang->line('menu_services'),'class="'.(($page_id == SERVICES_PAGE) ? 'active' : ' ').' "' )	?>	</li>
					</ul>
				
			</div>
		
		<?php } ?>
		
	