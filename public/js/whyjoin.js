var a = 0;
var b = 0;
var c = 0;
$(document).ready(function () {
  $("#whyjoin-onclick1").click(function () {
    if (b == 1) {
      $("#whyjoin-content-drop2").animate({
        height: 'toggle'
      });
      b = 0;
    }
    if (c == 1) {
      $("#whyjoin-content-drop3").animate({
        height: 'toggle'
      });
      c = 0;
    }
    if (a == 0) {
      a = 1;
    } else if (a == 1) {
      a = 0;
    }
    $("#whyjoin-content-drop1").animate({
      height: 'toggle'
    });
    });
});

$(document).ready(function(){
  $("#whyjoin-onclick2").click(function () {
    if (a == 1) {
      $("#whyjoin-content-drop1").animate({
        height: 'toggle'
      });
      a = 0;
    }
    if (c == 1) {
      $("#whyjoin-content-drop3").animate({
        height: 'toggle'
      });
      c = 0;
    }
    if (b == 0) {
      b = 1;
    } else if (b == 1) {
      b = 0;
    }
    $("#whyjoin-content-drop2").animate({
      height: 'toggle'
    });
  });
});

$(document).ready(function(){
  $("#whyjoin-onclick3").click(function () {
    if (a == 1) {
      $("#whyjoin-content-drop1").animate({
        height: 'toggle'
      });
      a = 0;
    }
    if (b == 1) {
      $("#whyjoin-content-drop2").animate({
        height: 'toggle'
      });
      b = 0;
    }
    if (c == 0) {
      c = 1;
    } else if (c == 1) {
      c = 0;
    }
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
        $("#whyjoin-content-drop2").slideDown();
        y = 1;
      b = 1;
      }
  });
});
