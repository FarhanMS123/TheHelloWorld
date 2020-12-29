$(document).ready(function () {
    $("#user-home").click(function () {
      $("#user-home-container").show();
      $("#user-payment-container").hide();
      $("#user-timeline-container").hide();
      $("#user-home").removeClass("navbar-not-active").addClass("navbar-active");
      $("#user-payment")
        .removeClass("navbar-active")
        .addClass("navbar-not-active");
      $("#user-timeline")
        .removeClass("navbar-active")
        .addClass("navbar-not-active");
    });
  });
  $(document).ready(function () {
    $("#user-payment").click(function () {
      $("#user-home-container").hide();
      $("#user-payment-container").show();
      $("#user-timeline-container").hide();
      $("#user-home").removeClass("navbar-active").addClass("navbar-not-active");
      $("#user-payment")
        .removeClass("navbar-not-active")
        .addClass("navbar-active");
      $("#user-timeline")
        .removeClass("navbar-active")
        .addClass("navbar-not-active");
    });
  });
  $(document).ready(function () {
    $("#user-timeline").click(function () {
      $("#user-home-container").hide();
      $("#user-payment-container").hide();
      $("#user-timeline-container").show();
      $("#user-home").removeClass("navbar-active").addClass("navbar-not-active");
      $("#user-payment")
        .removeClass("navbar-active")
        .addClass("navbar-not-active");
      $("#user-timeline")
        .removeClass("navbar-not-active")
        .addClass("navbar-active");
    });
  });
  