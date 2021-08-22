
// var total = 1; // Our default for how many qualifiactions we have


//  $( document ).on( 'click', '#add-fields', function() {

//         var addBlockId = total = total + 1;



//          var addBlock1q = document.createElement('div');
//         $(addBlock).addClass('form-group'); 
//         $(addBlock).addClass('col-md-3');  

//         var inputUni = document.createElement('input');
//         $(inputUni).attr('type','text');
//         $(inputUni).attr('class','form contol');
//         $(inputUni).attr('name','institution-' + addBlockId);
//         $(inputUni).attr('id','institution-' + addBlockId);
//         $(inputUni).attr('placeholder','Tertiary Institution / School:');
//         $(inputUni).appendTo($(addBlock1q));

//         var addBlock2q = document.createElement('div');
//         $(addBlock).addClass('form-group'); 
//         $(addBlock).addClass('col-md-3'); 


//         var inputLocation = document.createElement('input');
//         $(inputLocation).attr('type','text');
//         $(inputLocation).attr('name','institution-location-' + addBlockId);
//         $(inputLocation).attr('id','institution-location-' + addBlockId);
//         $(inputLocation).attr('placeholder','Location');
//         $(inputLocation).appendTo($(addBlock2q));

//         var addBlock3q = document.createElement('div');
//         $(addBlock).addClass('form-group'); 
//         $(addBlock).addClass('col-md-3'); 

//         var inputQualification = document.createElement('input');
//         $(inputQualificatione).attr('type','text');
//         $(inputQualification).attr('name','qualification-' + addBlockId);
//         $(inputQualification).attr('id','qualification-' + addBlockId);
//         $(inputQualification).attr('placeholder','Phone');
//         $(inputQualification).appendTo($(addBlock));

//         var addBlock4q = document.createElement('div');
//         $(addBlock).addClass('form-group'); 
//         $(addBlock).addClass('col-md-3'); 

//         var inputYearCompleted = document.createElement('input');
//         $(inputYearCompleted).attr('type','number');
//         $(inputYearCompleted).attr('name','year-completed-' + addBlockId);
//         $(inputYearCompleted).attr('id','year-completed-' + addBlockId);
//         $(inputYearCompleted).attr('placeholder','Phone');
//         $(inputYearCompleted).appendTo($(addBlock));

//         $(addBlock).appendTo($('.row'));
//         $('#qualificationField').val(total);

//     });

(function ($) {
    $(document).ready(function () {

        $('#add-fieldsQ').on('click', function () {
            let n = $("#educational-fields .row").length;
            let newFields = `<div class='row'>
                                    <div class='form-group col-md-3'>
                                        <input type='text' class='form-control' required name='qualifications[${n + 1}][institution]' id='institution-1' placeholder='Tertiary Institution / School:'>
                                    </div>

                                    <div class='form-group col-md-3'>
                                        <input type='text' class='form-control' required name='qualifications[${n + 1}][institution-location]' id='institution-location-1' placeholder='Location'>
                                    </div>

                                    <div class='form-group col-md-3'>
                                        <input type='text' class='form-control' required name='qualifications[${n + 1}][qualification]' id='qualification-1' placeholder='Qualification'>
                                    </div>

                                    <div class='form-group col-md-3'>
                                        <input type='number' class='form-control' required name='qualifications[${n + 1}][year-completed]' id='year-completed' placeholder='Year Completed'>
                                    </div>
                               
                                </div>`;
            $('#educational-fields').append(newFields);
          
        });

        $('#remove-fieldsQ').on('click', function (){
            $('#educational-fields').children().last().remove();
        });

    });
})(jQuery);