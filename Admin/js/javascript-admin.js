$(document).ready(function(){

    $(".linkPayment").click(function(){
        window.location.href='/Admin/index-payment-admin.html';
    });

    $(".linkParticipant").click(function(){
        window.location.href='/Admin/html/participant-data-admin.html';;
    });

    $("#viewData").click(function(){
        window.location.href='/Admin/html/view-data-admin.html';
    });

    $("#editData").click(function(){
        window.location.href='/Admin/html/edit-data-admin.html';
    });

});