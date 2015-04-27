function formHandle (){
$("#leadcap").submit(function(e){
	e.preventDefault();
	
	var formMessages = $("#form--messages"),
	formData = $(this).serialize();

	$.ajax({
		    type: 'POST',
		    url: $(this).attr('action'),
		    data: formData,
		    beforeSend: function() {
   				$("#loading").fadeToggle();
  			}
		})
		.done(function(response) {
		$("#loading").fadeToggle();
		$("#leadcap").hide();
	    // Make sure that the formMessages div has the 'success' class.
	    $(formMessages).removeClass('error');
	    $(formMessages).addClass('success');

	    // Set the message text.
	    $(formMessages).html(response);
	    
	    $(".close-pop").click(function(e){
	    	e.preventDefault();
	    	$.magnificPopup.close()
	    });

		})
		.fail(function(data) {
	    // Make sure that the formMessages div has the 'error' class.
	    $("#loading").fadeToggle();
	    $("#leadcap").hide();
	    $(formMessages).removeClass('success');
	    $(formMessages).addClass('error');

	    // Set the message text.
	    if (data.responseText !== '') {
	        $(formMessages).html(data.responseText);
	    } else {
	    	$("#loading").fadeToggle();
	        $(formMessages).text('Oops! An error occured and your message could not be sent.');
	    }
		});
	});
}
