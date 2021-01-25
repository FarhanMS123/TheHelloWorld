<?php
function checkVerified($team){
    if(is_null($team->status)) return "unverified";
        else if($team->status === 0) return "rejected";
        else if($team->status === 1) return "verified";
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
        <a href="{{route("index_payment")}}"><li class="linkPayment">Payment Confirmation</li></a>
        <a href="{{route("index_teams")}}"><li class="linkParticipant"  style="color: #39BEFF;">Participant Data</li></a>
        <form action="{{route("logout")}}" method="post" style="display:inline-block">
            @csrf
            <button type="submit" style="border:none; background:none;">
                <li class="login" type="submit">Logout</li>
            </button>
        </form>
    </ul>
</div>

<div class="admin-data">
        <div class="top">
            <div class="line1"></div>
            <div class="title">Dashboard</div>
            <div class="line2"></div>
        </div>

    <div class="participantContainer">
        <div class="title">Participant Data</div>
        <div class="main-container">
            @foreach($teams as $team)
            @if(preg_match("/^(binusian|non\-binusian)$/i", $team->type))
            <div class="section">
                <div class="box">
                    <div class="groupName {{checkVerified($team)}}">{{$team->name}}</div>
                    <div class="buttons">
                        <a href="{{route("view_team", $team->id)}}"><button id="viewData">View Data</button></a>
                        <a href="{{route("view_edit_team", $team->id)}}"><button id="editData">Edit Data</button></a>
                        <form action="{{route("delete_team", $team->id)}}" method="POST">
                            @csrf
                            @method("delete")
                            <button type='submit' class="delete" id="deleteData" name="del">X</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
    <script src="{{asset("js/admin/javascript-data-admin.js")}}"></script>

</body>
</html>
