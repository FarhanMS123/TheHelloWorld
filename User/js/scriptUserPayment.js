/* Countdown Timer */
// Set the date we're counting down to
var countDownDate = new Date("Sept 15, 2021 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("earlybird").innerHTML = days + " hari " + hours + " jam "
  + minutes + " menit " + seconds + " detik ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("earlybird").innerHTML = "Waktu Early Bird Sudah Selesai";
  }
}, 1000);

/* Payment Tutorial Toggle */
/* 1 */
$(document).ready(function(){
  $("#toggle1").click(function () {
    $("#toggle1-content").animate({
      height: 'toggle'
    });
  });
});
$(document).ready(function(){
  $("#toggle1").click(function(){
      $("#tutorial1").toggleClass("tutorial-subtitle");
    });
});
/* 2 */
$(document).ready(function(){
  $("#toggle2").click(function () {
    $("#toggle2-content").animate({
      height: 'toggle'
    });
  });
});
$(document).ready(function(){
  $("#toggle2").click(function(){
      $("#tutorial2").toggleClass("tutorial-subtitle");
    });
});

/* 3 */
$(document).ready(function(){
  $("#toggle3").click(function () {
    $("#toggle3-content").animate({
      height: 'toggle'
    });
  });
});
$(document).ready(function(){
  $("#toggle3").click(function(){
      $("#tutorial3").toggleClass("tutorial-subtitle");
    });
});
/* 4 */
$(document).ready(function(){
  $("#toggle4").click(function () {
    $("#toggle4-content").animate({
      height: 'toggle'
    });
  });
});
$(document).ready(function(){
  $("#toggle4").click(function(){
      $("#tutorial4").toggleClass("tutorial-subtitle");
    });
});


$(document).ready(function(){

  $(function() {

      $("form[name='uploadbuktipembayaran']").validate({

      rules: {
          name: {
              required: true,
              minlength: 3,
              letters: true,
              remote: 'App\Team,name'
              // remote untuk unique KAYAKNYA SI GINI gue g bs trials and errors sih
          },
          password: {
              pass: true,
              minlength: 8,
              required: true,
          },
          confirmpassword: {
              equalTo: "#password"
          },
          type:{
              required: true
          },
          fullname: {
              letters: true,
              required: true
          },
          email: {
              required: true,
              email: true,
              remote: 'App\Member,email'
              // remote untuk unique KAYAKNYA SI GINI gue g bs trials and errors sih
          },
          whatsapp: {
              required: true,
              minlength: 9,
              telephone: true,
              remote:'App\Member,whatsapp'
              // remote untuk unique KAYAKNYA SI GINI gue g bs trials and errors sih
          },
          lineid: {
              required: true,
              remote:'App\Member,lineid'
              // remote untuk unique KAYAKNYA SI GINI gue g bs trials and errors sih
          },
          git_account: {
              required: true
          },
          place_of_birth: {
              required: true,
              letters: true
          },
          date_of_birth: {
              required: true,
              date: true
          },
          identity: {
              required: true,
              extension:"pdf|jpg|jpeg|png"
          },
          cv:{
              required: true,
              extension:"pdf|jpg|jpeg|png"
              },
          bukti: {
              required: true,
              extension:"pdf|jpg|jpeg|png"
          }
      },

      messages: {
          name:{
              required: "*Please specify your group name. Only letters and spaces are allowed and minimum 3 characters.", 
              minlength: "*Please specify your group name. Only letters and spaces are allowed and minimum 3 characters.",
              letters: "*Please specify your group name. Only letters and spaces are allowed and minimum 3 characters.",
              remote: "*This group name is already taken."
          } ,
          password: "*Please specify a valid password. Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character.",
          confirmpassword: "*Password dont match.",
          type: "*Please specify whether your group are binusians or non-binusians.",
          fullname: "*Please specify your leader name. Only letters and spaces are allowed.",
          email: {
              required: "*Please specify your email. For example: someone@example.com.",
              email:  "*Please specify your email. For example: someone@example.com.",
              remote: "*This email is already taken."
          } ,
          whatsapp: {
              required: "*Please specify your Whatsapp number. Only numbers and starts with '+62', '08', or '8'. ", 
              minlength: "*Please specify your Whatsapp number. Only numbers and starts with '+62', '08', or '8'. ", 
              telephone: "*Please specify your Whatsapp number. Only numbers and starts with '+62', '08', or '8'. ",
              remote: "*This Whatsapp number is already taken."
          } ,
          lineid: {
              required:"*Please specify your LINE ID.",
              remote: "*This LINE ID is already taken"
          } ,
          git_account: "*Please specify your Github/Gitlab ID. ",
          place_of_birth: "*Please specify your place of birth. Only letters and spaces are allowed.",
          date_of_birth: "*Please specify your date of birth. In format DD/MM/YYYY",
          identity: "*Please upload your identity card. In format pdf,jpg,jpeg, or png.",
          cv: "*please upload your CV. In format pdf,jpg,jpeg, or png.",
          bukti: "*please upload your payment receipt. In format pdf,jpg,jpeg, or png."
      },

      //for error css div.error
      errorElement : 'div',

      //location for error message radio button
      errorPlacement: function(error, element) 
      {
          if ( element.is(":radio") ) 
          {
              error.appendTo( element.parents('.radio-parent') );
          }
          else 
          {  
              error.insertAfter( element );
          }
       },

      // button submit
      submitHandler: function(form) {
          form.submit();
      }
      });
  });
   
  //to display uploaded file name
   $("#cv").change(function(){
      $('.cv div').text(this.value.replace(/C:\\fakepath\\/i, ''))
   });
   $("#identity").change(function(){
      $('.id-card div').text(this.value.replace(/C:\\fakepath\\/i, ''))
   });
  
   $("#bukti").change(function(){
    $('#upload-text').text(this.value.replace(/C:\\fakepath\\/i, ''))
  });

});
/* Are You Sure??? */

/* function myFunction() {
    var txt;
    var r = confirm("Are you sure?");
    if (r == true) {
      $(document).ready(function () {
          $("#before-submit").hide();
          $("#after-submit").show();
      });
    } else {
    }
}
  
 */