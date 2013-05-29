		<script type="text/javascript" src="http://cdn.aloha-editor.org/latest/lib/require.js"></script>
		<script type="text/javascript" src="http://cdn.aloha-editor.org/latest/lib/vendor/jquery-1.7.2.js"></script>
		<script src="/js/aloha-config.js"></script>
		<script src="http://cdn.aloha-editor.org/latest/lib/aloha.js" 
			data-aloha-plugins="common/ui,
								common/format,
								common/list,
								common/link,
								common/abbr,
								common/image"></script>
		<link rel="stylesheet" href="http://cdn.aloha-editor.org/latest/css/aloha.css" type="text/css">
		<script src="/js/aloha-save.js"></script>
		<script type="text/javascript">
			Aloha.ready( function() {
				var $ = Aloha.jQuery;
				// Make all elements with class=".editable" editable once Aloha is loaded and ready.
				$('.editable').aloha();
			});
		</script>

