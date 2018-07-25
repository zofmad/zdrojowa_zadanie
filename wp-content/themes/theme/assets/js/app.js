function sendFormAfterValidation(form) {
    if ($(form).valid()) {
        $('.form_spacer').text('');
        $.ajax({
            type: $(form).attr('method'),
            url: ajax_url + '?action=contact',
            data: $(form).serialize(),
            dataType: "JSON",
            success: function (data) {
               
                $('.form_spacer').text(data.message);
                if(data.message = "Message sent."){
                    $(form)[0].reset();
                }
                
            },
            error: function (error) {
                console.log(error);
             
                
            }
        });

    } else {
        $('.form_spacer').text('Wypełnij zaznaczone pola poprawnie.');
    }
}
;
jQuery(document).ready(function ($) {
 $('.contact-form').on('submit', function () {
                  console.log('aaaa');
        $(this).validate({
            errorPlacement: function (error, element) {
                return true;
            },
            errorClass: "invalid",
            rules: {
                name: {
                    pattern: /^[a-zA-ZżźćńółęąśŻŹĆĄŚĘŁÓŃ]+$/
                },
                surname: {
                    pattern: /^[a-zA-ZżźćńółęąśŻŹĆĄŚĘŁÓŃ]+$/
                },
               
                email: {
                    required: true,
                    //                            xxxx@yyyy.zzz
                    pattern: /.+\@.+\..+/
                },
                message: {
                    required: true                   
                }
            }
        });
        
       console.log('aa');
        sendFormAfterValidation($(this));


    
    });


console.log('works');
});


