$(document).ready(function($){

    
    $("form").each(function() {


        //letters format with spaces
        $.validator.addMethod("letters", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
        });

        $(this).validate({
            rules:{
                name:{
                    required: true,
                    minlength: 3,
                    letters: true
                },
                email:{
                    required: true,
                    email: true,
                },
                subject:{
                    required: true,
                    minlength:3
                },
                message:{
                    required: true,
                    minlength: 15
                }
            },
            messages:{
                name: "*Please specify your name. Only letters and spaces are allowed and minimum 3 characters.",
                email: "*Please specify your email. For example(someone@example.com).",
                subject: "*Please specify your subject. Minimum 3 characters.",
                message: "*please specify your message. Minimum 15 characters."
            },

            //for error css div.error
            errorElement : 'div',

            submitHandler: function(form) {
                alert("Your message has been submited successfully.");
                form.submit();
                
            }

        });
    });

});
