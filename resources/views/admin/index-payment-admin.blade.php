<?php
function getPriceConfig($team){
    if(time() < config("hackathon.end_time_early_bid")){
        return config("hackathon.price_early_bid");
    }else if(preg_match("/^non-binusian$/i", $team->type)){
        return config("hackathon.price_non_binusian");
    }else if(preg_match("/^binusian$/i", $team->type)){
        return config("hackathon.price_binusian");
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- logo favicon -->
    <link rel="shortcut icon" href="{{asset("res/home-logoHackathon.png")}}" type="image/x-icon">
    <!-- font : poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- jquery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CSS links: -->
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/style-admin.css")}}">
    <link rel="stylesheet" href="{{asset("css/register.css")}}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div><a href="{{route("home")}}"><img src="{{asset("res/home-logoHackathon.png")}}" alt="logo-hackathon" height="130px"></a></div>
    <ul class="list-container">
        <a href="{{route("index_payment")}}"><li class="linkPayment"  style="color: #39BEFF;">Payment Confirmation</li></a>
        <a href="{{route("index_teams")}}"><li class="linkParticipant">Participant Data</li></a>
        <form action="{{route("logout")}}" method="post" style="display:inline-block">
            @csrf
            <button type="submit" style="border:none; background:none;">
                <li class="login" type="submit">Logout</li>
            </button>
        </form>
    </ul>
</div>

<div class="cd-popup box" role="alert">
    <div class="popupTitle">Verify Payment</div>
    <div class="cd-popup-container">
        <p class="alertText"></p>
        <form action="{{route("verify")}}" method="POST" enctype="application/x-www-form-urlencoded">
            @csrf
            @method("patch")
            <input type="hidden" name="id" value="-1">
            <ul class="cd-buttons button">
                <button type="submit" class="yes" name="status" value="1">Approve</button>
                <button type="submit" class="no" name="status" value="0">Reject</button>
            </ul>
        </form>
    </div>
</div>

<!-- Admin Payment -->
<div class="admin-payment">
    <div class="top">
        <div class="line1"></div>
        <div class="title">Dashboard</div>
        <div class="line2"></div>
    </div>

    <div class="overlay"></div>
    <div class="paymentContainer">
        <div class="title">Payment Confirmation</div>
        <div class="main-container">
            @foreach ($teams as $team)
            <div class="section" data-id="{{$team->id}}">
                <div class="box">
                    <div class="groupName">{{$team->name}}</div>
                    <!-- DEAR BACKEND: src img nya itu source buat bukti trf yass -trid-->
                    <div class="bukti"><img src="{{asset($team->payment)}}" alt=""></div>
                    <div class="content">
                        <div class="left">
                            <div>Price</div>
                            <div>Status</div>
                        </div>
                        <div class="middle">
                            <div>:</div>
                            <div>:</div>
                        </div>
                        <div class="right">
                            <!-- DEAR BACKEND: ini ya buat price sm status nya klo bingung tell me ya -trid -->
                            <div>Rp. {{ getPriceConfig($team) }}</div>
                            <div class="unverified status" @if(!is_null($team->status)) style="display:none;" @endif>Unverified</div>
                            <div class="verified status" @if($team->status !== 1) style="display:none;" @endif>Verified</div>
                            <div class="rejected status" @if($team->status !== 0) style="display:none;" @endif>Rejected</div>
                        </div>
                    </div>
                    <div class="button">
                        <button class="verify" data-id="{{$team->id}}">Verify</button>
                        <button class="view">View</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
    <script src="{{asset("js/admin/javascript-admin.js")}}"></script>
</body>
</html>
