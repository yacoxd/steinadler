<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		
		<!-- Favicon -->
		<?php echo link_tag('assets/images/frontend/favicon.png', 'shortcut icon', 'image/ico'); ?>		
		<!-- Favicon End-->

		<title>CMS</title>
		<?php

		echo link_tag('assets/js/fancybox/jquery.fancybox-1.3.4.css');
		echo link_tag('assets/js/datepicker/css/datepicker.css');
		echo link_tag('assets/css/bootstrap.css');
		echo link_tag('assets/css/style-admin.css');
		
		
		echo script_tag('assets/js/jquery-1.9.1.js');
		echo script_tag('assets/js/jquery-ui.js');
		echo script_tag('assets/js/fancybox/jquery.mousewheel-3.0.4.pack.js');
		echo script_tag('assets/js/fancybox/jquery.fancybox-1.3.4.js');
		echo script_tag('assets/js/bootstrap.min.js');
		echo script_tag('assets/js/datepicker/js/bootstrap-datepicker.js');
		
		//TyneMC
		echo script_tag('assets/js/tinymce/tinymce.min.js');
		?>
	</head>  
<body>
	
   <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Options</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url().'admin' ?>">CMS -<?php $src = array(
				'src' => base_url() . 'assets/images/admin/' . $this->session->userdata('lang_name_admin') . '.jpg',
				'class' => 'flag-header'
			);
			echo img($src);
 ?> </a>
        </div> 
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo (@$active == 'home') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/home-editar') ?>">Home</a></li>
            <li class="<?php echo (@$active == 'about') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/about-us') ?>">About Us</a></li>
            <li class="<?php echo (@$active == 'construction') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/construction') ?>">Construction</a></li>
            <li class="<?php echo (@$active == 'industrial') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/industrial') ?>">Industrial</a></li>
            <li class="<?php echo (@$active == 'agribusiness') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/agribusiness') ?>">Agribusiness</a></li>
            <li class="<?php echo (@$active == 'services') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/services') ?>">Services</a></li>
            <li class="<?php echo (@$active == 'locations') ? 'active' : '' ?>"><a href="<?php echo base_url('admin/locations') ?>">Locations</a></li>
            
            <li class="dropdown">
              <a href="http://getbootstrap.com/examples/theme/#" class="dropdown-toggle" data-toggle="dropdown">Lang<b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="<?php echo base_url().'lang/admin/1' ?>"><?php $src = array(
					'src' => base_url() . 'assets/images/admin/english.jpg',
					'class' => 'flag'
				);
				echo img($src);
 ?>EN</a></li>
                <li><a href="<?php echo base_url().'lang/admin/2' ?>"><?php $src = array(
		'src' => base_url() . 'assets/images/admin/spanish.jpg',
		'class' => 'flag'
	);
	echo img($src);
 ?>ES</a></li>
                <li><a href="<?php echo base_url().'lang/admin/3' ?>"><?php $src = array(
		'src' => base_url() . 'assets/images/admin/chinese.jpg',
		'class' => 'flag'
	);
	echo img($src);
 ?>CH</a></li>
                
              </ul>
            </li>
           
          </ul>
          <ul class="nav navbar-nav pull-right">
          	<li><a class="navbar-brand" href="<?php echo base_url().'admin' ?>"> Welcome! <?php echo $this->session->userdata('username') ?></a></li>
          	<li><a  href="<?php echo base_url().'login/logout' ?>">Logout</a></li>
          		
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
	

    <div class="container theme-showcase">
    	
    	<div class="row spacer-40 "> </div>
    	
    	 <div class="breadcrumbs">
    		<p><?php echo anchor ('admin', 'Home'); ?>  
			<?php
                    if (isset($breadcrumb_lv1)) {
                        echo ' > '.$breadcrumb_lv1;
                    }
					if (isset($breadcrumb_lv2)) {
                        echo ' > '.$breadcrumb_lv2;
                    }
					
					
			?>
    		</p> 
		</div>
    	
    	
    	
    	<?php if($this->session->flashdata('message_pa_error')){?>
    	<div class="alert alert-danger fade in">
    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <h4>Oh!! </h4>
	       	 <?php echo $this->session->flashdata('message_pa_error'); ?>
	       
	     </div>
	     <?php } ?>
	     
	     <?php if($this->session->flashdata('message_pa')){?>
    	<div class="alert alert-success fade in">
    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <h4>:) </h4>
	       	 <?php echo $this->session->flashdata('message_pa'); ?>
	       
	     </div>
	     <?php } ?>
      
     
    	
    	
    		<!-- Error messages -->
    		
    		<!-- Error messages End -->
    	


	