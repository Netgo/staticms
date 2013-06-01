
$(document).ready(function() {


	$("#haslo").click(function () {
		$("p.logmsg").html("<br />");
	});

    $('#myform').submit(function() {
        $.ajax({
            type: "POST",
            url: '_cms_user/_cms_auth.php',
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
		    $('p.logmsg').html("Złe hasło");
                }
            }
        });
return(false);

    });


});