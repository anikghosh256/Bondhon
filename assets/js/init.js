(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.materialboxed').materialbox();



    //form submit function


    $("#bondhon_contact_form").submit(function(e) {

	    e.preventDefault(); // avoid to execute the actual submit of the form.

	    var form = $(this);
	    var url = form.attr('action');

	   	var form_v = document.forms["bondhon_contact_form"];
		  if (form_v['full_name'].value == "") {
		    document.getElementById("full_name").focus();
		    return false;
		  }
		  if (form_v['email'].value == "") {
		    document.getElementById("email").focus();
		    return false;
		  }
		  if (form_v['message'].value == "") {
		    document.getElementById("message").focus();
		    return false;
		  }
	    
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: form.serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	                if( data == 'true') {
	                	M.toast({html: 'Message sent successfuly :)', classes: 'rounded'});
	                	document.forms["bondhon_contact_form"].reset();
	                	window.scrollTo(0, 0);
	                }else {
	                	M.toast({html: 'Something wrong :(', classes: 'rounded'});
	                }
	           }
	         });

	    
	});


  }); // end of document ready
})(jQuery); // end of jQuery name space
