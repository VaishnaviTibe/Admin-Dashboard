 $(document).ready(function() {
 alert();

            $('#photoimg').live('change', function()			{
			           $("#preview").html('');
			    $("#preview").html('<img src="" alt=""/>');
			$("#imageform").ajaxForm({

						target: '#preview'
		}).submit();

			});
        });

