jQuery(document).ready(function($) {

    $(".submit_button").click(function() {
        
        var name = $(".name").val();
            email = $(".email").val();
            email_validation = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            message = $(".message").val();
 
        if (name == "") {
            $(".name").focus();
            return false;
        }else if(email == "" || !email_validation.test(email)){
            $(".email").focus();    
            return false;
        }else if(message == ""){
            $(".message").focus();
            return false;
        }else{
            var data = 'name='+ name + '&email=' + email + '&message=' + message;
            $.ajax({
                type: "POST",
                url:  "ajax.php",
                data: data,
                          
                success: function() {
                    $('.msg').text(name+': Success');  
                },
                error: function() {
                    $('.msg').text(name+': Failure');                                 
                }
            });
            return false;
        }
 
    });
});


