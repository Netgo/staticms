Aloha.ready(function() {
	Aloha.require( ['aloha', 'aloha/jquery'], function( Aloha, jQuery) {
		
		// save all changes after leaving an editable
		Aloha.bind('aloha-editable-deactivated', function(){
			var content = Aloha.activeEditable.getContents();
			var id = Aloha.activeEditable.obj[0].id;
			//var pageId = window.location.pathname;
			
			// textarea handling -- html id is "xy" and will be "xy-aloha" for the aloha editable
			if ( id.match(/-aloha$/gi) ) {
				id = id.replace( /-aloha/gi, '' );
			}

			var request = jQuery.ajax({
				url: "_cms_user/_cms_save.php",
				type: "POST",
				data: {
					content : content,
					id : id
				},
				dataType: "html"
			});

			request.done(function(msg) {
				jQuery("#log").html( msg ).show().delay(20000).fadeOut();
			});

			request.error(function(jqXHR, textStatus) {
				alert( "Request failed: " + textStatus );
			});
		});
		
	});
});
