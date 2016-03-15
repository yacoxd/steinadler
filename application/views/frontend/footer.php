</div>

<script>
	$(document).ready(function() {
		var fadein = $('div.fadein, .footer');
		$.each(fadein, function(i, item) {
		     setTimeout(function() {
		          $(item).fadeIn(700);
		           
		          
		          $( ".scroll-bar" ).each(function( index ) {
  					$(this).mCustomScrollbar('update');
				});
		     }, 200 * i); // duration between fadeins
		});
		// duration of fadein
		
		var html = $('body').height();  
		var size = screen.height;
		$('.footer').css('min-height', html - size + 58);  
		
		
	}); 
	 
</script>

<div class="footer">
	<div class="container" >
		<div class="row">
			<div class="col-md-3 col-sm-4 row_a text-center" >
				<?php echo $this->lang->line('pt_footer_text_1'); ?>
			</div>

			<div class="col-md-6 col-sm-4 text-center row_a" >
				<?php echo anchor('contact', $this->lang->line('pt_footer_text_2')); ?>
			</div>

			<div class="col-md-3  col-sm-4 language text-center row_a" >

				<?php echo anchor('lang/frontend/1', $this->lang->line('pt_footer_lang_1')); ?>
				<?php echo anchor('lang/frontend/2', $this->lang->line('pt_footer_lang_2')); ?>
				<?php echo anchor('lang/frontend/3', $this->lang->line('pt_footer_lang_3')); ?>
			</div>
		</div>

	</div>
</div>
<div id="svgothers"></div>
</body>
</html>