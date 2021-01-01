<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Participant Data</title>

    <!-- logo favicon -->
    <link rel="shortcut icon" href="{{asset("res/home-logoHackathon.png")}}" type="image/x-icon">
    <!-- font : poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- jquery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- CSS links: -->
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/style-admin.css")}}">
    <link rel="stylesheet" href="{{asset("css/register.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/style-data-admin.css")}}">

</head>
<body>



<!--Navbar -->
<div class="navbar">
    <div><a href="{{route("home")}}"><img src="{{asset("res/home-logoHackathon.png")}}" alt="logo-hackathon" height="130px"></a></div>
    <ul class="list-container">
        <a href="{{route("index_payment")}}"><li class="linkPayment">Payment Confirmation</li></a>
        <a href="{{route("index_teams")}}"><li class="linkParticipant"  style="color: #39BEFF;">Participant Data</li></a>
        <form action="{{route("logout")}}" method="post" style="display:inline-block">
            @csrf
            <button type="submit" style="border:none; background:none;">
                <li class="login">Logout</li>
            </button>
        </form>
    </ul>
</div>

<div class="admin-edit-data">

    <div class="top">
        <div class="line1"></div>
        <div class="title">Dashboard</div>
        <div class="line2"></div>
    </div>

    <div class="overlay"></div>
    <div class="dataContainer">
        <div class="title">{{$team->name}}</div>
        <form action="{{route("edit_team", $leader->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("patch")
            {{-- <input type="hidden" name="id" value="{{$leader->id}}"> --}}
        <div class="section">
            <div class="subtitle">Leader</div>
            <div class="dataBiodata">
                <div class="left">
                    <label for="fullname">Name</label>
                    <input id="fullname" name="fullname" value="{{$leader->fullname}}">
                    <label for="email">Email</label>
                    <input id="email" name="email" value="{{$leader->email}}">
                    <label for="whatsapp">Whatsapp Number</label>
                    <input id="whatsapp" name="whatsapp" value="{{$leader->whatsapp}}">
                    <label for="lineid">Line ID</label>
                    <input id="lineid" name="lineid" value="{{$leader->lineid}}">
                </div>
                <div class="right">
                    <label for="git_account">GitLab ID</label>
                    <input id="git_account" name="git_account" value="{{$leader->git_account}}">
                    <label for="place_of_birth">Birth Place</label>
                    <input id="place_of_birth" name="place_of_birth" value="{{$leader->place_of_birth}}">
                    <label for="date_of_birth">Birth Date</label>
                    <input id="date_of_birth" name="date_of_birth" value="{{$leader->date_of_birth}}">
                    <div class="dataUpload">
                        <label for="identity" id="id-card-label" class="id-card">
                            <div>ID Card</div>
                            <button class="view viewIdentity" type="button">View</button>
                            <!-- DEAR BACKEND: ini image bukti nya?? -->
                            <div class="bukti"><img src="{{asset($leader->identity)}}" alt=""></div>
                        </label>
                        <input type="file" id="identity" name="identity">

                        <label for="cv" id="cv-label" class="cv">
                            <div>CV</div>
                            <button class="view viewCV" type="button">View</button>
                            <!-- DEAR BACKEND: ini image bukti nya -->
                            <div class="bukti"><img src="{{asset($leader->cv)}}" alt=""></div>
                        </label>
                        <input type="file" id="cv" name="cv">
                    </div>
                </div>
            </div>

            <button id="submitData" type="submit">Submit</button>
        </div>
        </form>

        @foreach($team->members as $member)
        @if(preg_match("/^member$/i", $member->type))
        <form action="{{route("edit_team", $member->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("patch")
        <div class="section">
            <div class="subtitle">Member</div>
            <div class="dataBiodata">
                <div class="left">
                    <label for="fullname">Name</label>
                    <input id="fullname" name="fullname" value="{{$member->fullname}}">
                    <label for="email">Email</label>
                    <input id="email" name="email" value="{{$member->email}}">
                    <label for="whatsapp">Whatsapp Number</label>
                    <input id="whatsapp" name="whatsapp" value="{{$member->whatsapp}}">
                    <label for="lineid">Line ID</label>
                    <input id="lineid" name="lineid" value="{{$member->lineid}}">
                </div>
                <div class="right">
                    <label for="mgit_account">GitLab ID</label>
                    <input id="mgit_account" name="git_account" value="{{$member->git_account}}">
                    <label for="mplace_of_birth">Birth Place</label>
                    <input id="mplace_of_birth" name="place_of_birth" value="{{$member->place_of_birth}}">
                    <label for="mdate_of_birth">Birth Date</label>
                    <input id="mdate_of_birth" name="date_of_birth" value="{{$member->date_of_birth}}">
                    <div class="dataUpload">
                        <label for="midentity" class="id-card">
                            <div>ID Card</div>
                            <button class="view" type="button">View</button>
                            <!-- DEAR BACKEND: ini image bukti nya -->
                            <div class="bukti"><img src="{{asset($member->identity)}}" alt=""></div>
                        </label>
                        <input type="file" id="midentity" name="identity">

                        <label for="mcv" class="cv">
                            <div>CV</div>
                            <button class="view" type="button">View</button>
                            <!-- DEAR BACKEND: ini image bukti nya -->
                            <div class="bukti"><img src="{{asset($member->cv)}}" alt=""></div>
                        </label>
                        <input type="file" id="mcv" name="cv">
                    </div>
                </div>
            </div>
            <button id="submitData" type="submit">Submit</button>
        </div>
        </form>
        @endif
        @endforeach
    </div>
</div>

<script src="{{asset("js/admin/javascript-data-admin.js")}}"></script>

</body>
</html>
