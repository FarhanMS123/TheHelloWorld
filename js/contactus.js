$(document).ready(function(){
    $(".invalidEmail").hide();
    $(".invalidName").hide();
    $(".invalidSubject").hide();
    $(".invalidMessage").hide();

    $(".requireName").hide();
    $(".requireEmail").hide();
    $(".requireSubject").hide();
    $(".requireMessage").hide();


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

    $("#submit").click(function(){
        if($("#name").val()==""){
            $(".requireName").show();
        }
        else{
            $(".requireName").hide();
        }
        if($("#email").val()==""){
            $(".requireEmail").show();
        }
        else{
            $(".requireEmail").hide();
        }
        if($("#subject").val()==""){
            $(".requireSubject").show();
        }
        else{
            $(".requireSubject").hide();
        }
        if($("#message").val()==""){
            $(".requireMessage").show();
        }
        else{
            $(".requireMessage").hide();
        }

        if($("#name").val()!="" && $("#email").val()!="" && $("#subject").val()!="" && $("#message").val()!=""){
            alert("Your message has been succesfully submitted.")
            $("#name").val("");
            $("#email").val("");
            $("#subject").val("");
            $("#message").val("");
        }
    });

});