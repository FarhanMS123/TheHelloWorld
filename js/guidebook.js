var x = 0;
$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0 && scroll < 2100) {
            $("#guidebook-container").hide();
            $("#guidebook-footer-container").hide();
        } else if (scroll > 2100 && scroll < 9150 && x == 0) {
            $("#guidebook-container").slideDown("slow");
            $("#guidebook-footer-container").hide();
        } else if (scroll > 9150) {
            $("#guidebook-container").hide();
            $("#guidebook-footer-container").show();
        }
    });
});
  
$(document).ready(function(){
    $("#guidebook-close").click(function(){
        $("#guidebook-container").hide();
        x = 1;
    });
});
  
