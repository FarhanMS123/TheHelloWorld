$(document).ready(function(){

    $(".participantContainer").hide();
    $(".linkPayment").addClass("active");

    $(".linkPayment").click(function(){
        $(".linkPayment").addClass("active");
        $(".linkParticipant").removeClass("active");
        $(".paymentContainer").show();
        $(".participantContainer").hide();
    });

    $(".linkParticipant").click(function(){
        $(".linkParticipant").addClass("active");
        $(".linkPayment").removeClass("active");
        $(".paymentContainer").hide();
        $(".participantContainer").show();
    });
});