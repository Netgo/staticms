$(document).ready(function() {

    $('#myform').submit(function() {
	/* alert ("login.js submit 0247"); */
        $.ajax({
            type: "POST",
            url: '/_cms_auth.php',
            data: {
                username: $("#username").val(),
                haslo: $("#haslo").val()
            },
            success: function(data)
            {
                if (data === '1') {
                    window.location.replace('/');
                }
                else {
		$('p.logmsg').replaceWith('Hasło niepoprawne');
                }
            }
        });
return(false);
/*	alert ("login.js submit end"); */

    });

});