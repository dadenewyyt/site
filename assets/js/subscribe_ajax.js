/*
subscribe_ajax.js - client side email subscriber
© 2014-2015 daniel adenew http://daniel-ethiopia.rhcloud.com
*/

function subscribe_using_ajax(url) {
	    
	 var csrf = $('input[name="madebyus4u_csrf_test_name"]').val();  // <- get token value from hidden form input
     var server_url = url;
     var sEmail = $('#subscribe_email_input').val();
        $('#btn_subscribe').click(function() {

           var sEmail = $('#subscribe_email_input').val();
            // Checking Empty Fields

           if ((sEmail==='')) {
                $("#notification_bar").css('display','block');
                $("#notification_bar").css('background-color','red');
                $("#notification_bar").html("email is empty!").fadeOut(10000);
                $('#subscribe_email_input').css('border','red 1px solid');
                return false;

            }
            
            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            
           

            if (filter.test(sEmail)) {
                $('#subscribe_email_input').css('border','none');
            }

            else {
                $("#notification_bar").css('display','block');
                $("#notification_bar").css('background-color','red');
                $("#notification_bar").html("Invalid email format used !").fadeOut(10000);
                $('#subscribe_email_input').css('border','red 1px solid');
                return false;
            }

            //if validation is OK! then call ajax
            $.ajax({
                type:"POST",
                url:server_url,
                data:{madebyus4u_csrf_test_name:csrf,email_address:$("#subscribe_email_input").val()},
                dataType: "json",
                cache:false,
                success:
                    function(data){

                         $("html, body").animate({ scrollTop: 0 }, "slow");
                         $('#subscribe_email_input').val("");
                          $("#notification_bar").css('background-color',' #1a689f;');
                         $("#notification_bar").css('display','block');
                         $("#notification_bar").html(data.message).fadeOut(15000);
                    },
                error:
                    function(data) {
                     if(data.error_message) {
                         $("html, body").animate({ scrollTop: 0 }, "slow");
                          $('#subscribe_email_input').val("");
                         $("#notification_bar").css('display','block');
                         $("#notification_bar").css('background-color','red');
                         $("#notification_bar").fadeOut( 10000, function() {
                         $("#notification_bar").html(data.error_message).fadeOut( 150000 );
                         });
                       }
                }

            });
            return false;
        });//end of ajax block
        $("#notification_bar").css('display','block');
        $('#subscribe_email_input').val("");
}