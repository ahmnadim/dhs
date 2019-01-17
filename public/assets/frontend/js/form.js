
$(document).ready(function() {
jQuery(function($) {
 $("#btn_submit").on("click",function() {
        //get input field values
        var user_name       = $('input[name=name]').val();
		var user_phone      = $('input[name=phone]').val();
        var user_email      = $('input[name=email]').val();
  var user_message    = $('textarea[name=message]').val();
        var post_data, output;

        //simple validation at client's end
        var proceed = true;
        if(user_name==""){
            proceed = false;
        }
		if(user_phone==""){
            proceed = false;
        }
        if(user_email==""){
            proceed = false;
        }
  if(user_message=="") {
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed)
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userPhone':user_phone, 'userEmail':user_email, 'userMessage':user_message};

            //Ajax post data to server
            $.post('contact-submit.php', post_data, function(response){

                //load json data from server and output message
    if(response.type == 'error')
    {
     output = '<div class="alert-danger" style="padding:10px 0px 10px 5px;">'+response.text+'</div>';
    }else{
        output = '<div class="alert-success"  style="padding:10px 0px 10px 5px;">'+response.text+'</div>';

     //reset values in all input fields
     $('#contact-form input').val('');
     $('#contact-form textarea').val('');
    }

    $("#result").hide().html(output).slideDown();
            }, 'json');

        }
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact-form input, #contact-form textarea").keyup(function() {
        $("#result").slideUp();
     });
});
});
