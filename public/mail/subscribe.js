$(document).ready(function() {
    $('.subscribe_form').on('submit',function(){

    // Add text 'loading...' right after clicking on the submit button. 
    $('.subscribe__msg').text('Loading...'); 

    var form = $(this);
         $.ajax({
         url: form.attr('action'),
         method: form.attr('method'),
         data: form.serialize(),
         success: function(result){
     if (result == 'success'){
        $('[type="email"]').val('');
        $('.subscribe__msg').fadeIn().removeClass('alert-danger').addClass('alert-success');
        $('.subscribe__msg').text('Thank You For Subscribing!');
        // form.reset();
      
                setTimeout(function () {
                    $('.subscribe__msg').fadeOut();
                }, 92000);
        
     } else {
        $('.subscribe__msg').fadeIn().removeClass('alert-success').addClass('alert-success');
                 $('.subscribe__msg').text('Thank You For Subscribing!');
                //  $('.quote__msg').text(form.serializeArray() );
        setTimeout(function () {
            $('.subscribe__msg').fadeOut();
        }, 92000);
        
     }
 }
});

// Prevents default submission of the form after clicking on the submit button. 
return false;   
});
});