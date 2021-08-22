$(document).ready(function() {
    $('.inventory_form').on('submit',function(){

    // Add text 'loading...' right after clicking on the submit button. 
    $('.inventory__msg').text('Loading...'); 

    var form = $(this);
         $.ajax({
         url: form.attr('action'),
         method: form.attr('method'),
         data: form.serialize(),
         success: function(result){
     if (result == 'success'){
        $('.inventory__msg').fadeIn().removeClass('alert-danger').addClass('alert-success');
        $('.inventory__msg').text('Message Sent!');
                setTimeout(function () {
                    $('.inventory__msg').fadeOut();
                }, 92000);
        
     } else {
        $('.inventory__msg').fadeIn().removeClass('alert-success').addClass('alert-success');
                 $('.inventory__msg').text('Message Sent!');
                //  $('.quote__msg').text(form.serializeArray() );
        setTimeout(function () {
            $('.inventory__msg').fadeOut();
        }, 92000);
        
     }
 }
});

// Prevents default submission of the form after clicking on the submit button. 
return false;   
});
});