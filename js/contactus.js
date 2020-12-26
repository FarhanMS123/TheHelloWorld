$(document).ready(function(){
    $(".invalidEmail").hide();
    $(".invalidName").hide();
    $(".invalidSubject").hide();
    $(".invalidMessage").hide();

    $("#email").change(function(){
        var VALemail = this.value;
        var validEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

        if (validEmail.test(VALemail)) {
            $(".invalidEmail").hide();
        }
        else{
            $(".invalidEmail").show();
        }

    });
    $("#name").change(function(){
        var VALname = this.value;
        var validName = /^[a-zA-Z\s]{3,}$/;

        if (validName.test(VALname)) {
            $(".invalidName").hide();
        }
        else{
            $(".invalidName").show();
        }

    });
    $("#message").change(function(){
        var VALmessage = this.value;
        var validMessage = /^.{15,}$/;

        if (validMessage.test(VALmessage)) {
            $(".invalidMessage").hide();
            $("#message").removeClass("invalid-active");
        }
        else{
            $(".invalidMessage").show();
            $("#message").addClass("invalid-active");
        }

    });

});