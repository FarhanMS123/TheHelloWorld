$(document).ready(function(){

    $(".linkPayment").click(function(){
        window.location.href='/index-payment-admin.html';
    });

    $(".linkParticipant").click(function(){
        window.location.href='/html/participant-data-admin.html';;
    });

    $("#viewData").click(function(){
        window.location.href='/html/view-data-admin.html';
    });

    $("#editData").click(function(){
        window.location.href='/html/edit-data-admin.html';
    });

});