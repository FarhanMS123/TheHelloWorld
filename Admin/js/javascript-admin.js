
// window.onload = function () {
//     document.getElementById("view").onclick = function () {
//         var overlay = document.getElementById("overlay");
//         var popup = document.getElementById("popup");
//         overlay.style.display = "block";
//         popup.style.display = "block";
//     };

//     document.getElementById("closepopup").onclick = function () {
//         var overlay = document.getElementById("overlay");
//         var popup = document.getElementById("popup");
//         overlay.style.display = "none";
//         popup.style.display = "none";
//     }
// };

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
        




        // var ok = confirm('Verify Payment for Nama Team ' + $(this).parents(".box").find(".groupName").val());
        // if(ok){
        //     $(this).parents(".box").find(".status").hide();
        //     $(this).parents(".box").find(".verified").show();
            
        // }
        // else{
        //     $(this).parents(".box").find(".status").hide();
        //     $(this).parents(".box").find(".rejected").show();
        // }

    });
    

});