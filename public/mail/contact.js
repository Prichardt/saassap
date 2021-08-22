$(document).ready(function() {
    $('.contact_form').on('submit',function(){

    // Add text 'loading...' right after clicking on the submit button. 
    $('.contact__msg').text('Loading...'); 

    var form = $(this);
         $.ajax({
         url: form.attr('action'),
         method: form.attr('method'),
         data: form.serialize(),
         success: function(result){
     if (result == 'success'){
        $('.contact__msg').fadeIn().removeClass('alert-danger').addClass('alert-success');
        $('.contact__msg').text('Message Sent!');
                setTimeout(function () {
                    $('.contact__msg').fadeOut();
                }, 92000);
        
     } else {
        $('.contact__msg').fadeIn().removeClass('alert-success').addClass('alert-success');
                 $('.contact__msg').text('Error Sending email!');
        setTimeout(function () {
            $('.contact__msg').fadeOut();
        }, 92000);
        
     }
 }
});

// Prevents default submission of the form after clicking on the submit button. 
return false;   
});
});