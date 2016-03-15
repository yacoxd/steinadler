<?php 
	$this->load->view(@$header);
	if ( isset($submenu_teaching_materials) ){
	   $this->load->view($submenu_teaching_materials);
	}
	$this->load->view($content);
	
	if ( isset ($associate_primary_materials) ){
 		$this->load->view($associate_primary_materials);
 	}
	
	if ( isset ($associate_secundary_materials) ){
 		$this->load->view($associate_secundary_materials);
 	}
	
	$this->load->view(@$footer);
	if ( isset ($sidebar) ){
 		$this->load->view($sidebar);
 	}
	if ( isset ($moderation_comments) ){
 		$this->load->view($moderation_comments);
 	}
?>

