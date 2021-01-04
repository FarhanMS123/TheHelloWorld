$(document).ready(function(){
    $("#whyjoin-onclick1").click(function () {
      $("#whyjoin-content-drop1").animate({
        height: 'toggle'
      });
    });
});

$(document).ready(function(){
  $("#whyjoin-onclick2").click(function () {
    $("#whyjoin-content-drop2").animate({
      height: 'toggle'
    });
  });
});

$(document).ready(function(){
  $("#whyjoin-onclick3").click(function () {
    $("#whyjoin-content-drop3").animate({
      height: 'toggle'
    });
  });
});

var y = 0;
$(document).ready(function () {
  $(window).scroll(function () {
      var scroll = $(window).scrollTop();
    if (scroll > 0 && scroll < 2100 && y == 0) {
        $("#whyjoin-content-drop1").hide();
        $("#whyjoin-content-drop2").hide();
        $("#whyjoin-content-drop3").hide();
      } else if (scroll > 2100 && scroll < 9150 && y == 0) {
        $("#whyjoin-content-drop1").slideDown();
        $("#whyjoin-content-drop2").slideDown();
        $("#whyjoin-content-drop3").slideDown();
        y = 1;
      }
  });
});
