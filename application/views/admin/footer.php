	<hr class="featurette-divider">
	<div class="footer">
		   <p>Development by Abner Tellez</p>
		</div>
	</div>
	</body>
</html>

<script>
       $(document).ready(function(e) {
       	
       	$('.datepicker').datepicker(
       		
       		
       	);
       	
			$("a.view_image_preview").fancybox();
		});

	tinymce.init({
		selector: "textarea",
		language : 'es',
		resize: false,
		statusbar : false,
		maxLength : 50,
		plugins: [
			"advlist wordcount autolink lists link image charmap anchor",
			"searchreplace visualblocks code ",
			"insertdatetime media table contextmenu paste maxchars"
		],
		wordcount_target_id: 'word-count',
	
	});
</script>