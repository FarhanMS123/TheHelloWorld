$(document).ready(function(){
    $(".invalidEmail").hide();

    $("#email").change(function(){
        var VAL = this.value;
        var validEmail = new RegExp('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/');
        if (validEmail.test(VAL)) {
            $(".invalidEmail").hide();
        }
        else{
            $(".invalidEmail").show();
        }
    });

    // $("#email").on("input", function(){
    //     var VAL = $this.val();

    //     var email = new RegExp('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/');

    //     if (email.test(VAL)) {
    //         $(".invalidEmail").hide();
    //     }
    //     else{
    //        $(".invalidEmail").show();
    //     }
    // });

});