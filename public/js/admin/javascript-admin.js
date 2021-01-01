
$(document).ready(function(){

  

    $(".bukti").hide();
    $(".rejected").hide();
    $(".verified").hide();

    $(".view").click(function(){ 
        $(this).parents(".box").find(".bukti").addClass("popup").show();
        $(".overlay").css("display", "block");
    });
        
    $(".overlay").click(function(){
        $(".bukti").css("display", "none");
        $("img").removeClass("popup");
        $(".overlay").css("display", "none");
        $(".cd-popup").css("display", "none");
    });
   
    $(".verify").click(function(){
        let thisVerify = this;

        $(".alertText").text("Verify Payment for " + $(this).parents(".box").find(".groupName").html());
        $(".cd-popup").css("display", "block");
        $(".overlay").css("display", "block");

        $(".yes").click(function(){
            $(thisVerify).parents(".box").find(".status").hide();
            $(thisVerify).parents(".box").find(".verified").show();
            $(".overlay").trigger("click");
            thisVerify=null;
        })
        $(".no").click(function(){
            $(thisVerify).parents(".box").find(".status").hide();
            $(thisVerify).parents(".box").find(".rejected").show();
            $(".overlay").trigger("click");
            thisVerify=null;
        })


    });

    

});