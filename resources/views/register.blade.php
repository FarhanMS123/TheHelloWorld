<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNCC Hackathon 4.0</title>

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
    <link rel="stylesheet" href="{{asset("css/register.css")}}">
    <link rel="stylesheet" href="{{asset("css/contactus.css")}}">

</head>
<body>

    <!-- Navbar -->
<div class="navbar">
    <div><img src="{{asset("res/home-logoHackathon.png")}}" alt="logo-hackathon" height="130px"></div>
    <ul class="list-container">
        <li>Home</li>
        <li>Champion Prizes</li>
        <li>About</li>
        <li>FAQ</li>
        <li>Timeline</li>
        <li class="login">Login</li>
    </ul>
</div>


<!-- Register form -->
<div class="register">
    <div class="register-container">
        <form action="{{route("register")}}" name="registration" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="top">
                <div class="line1"></div>
                <div class="title">REGISTER</div>
                <div class="line2"></div>
            </div>

            <!-- Group form -->
            <div class="group subcontainer">
                <div class="subtitle">Group</div>

                <input type="text" id="name" name="name" placeholder="Group Name"@error('name')
                 class="error" aria-describedby="name-error" aria-invalid="true" @enderror>
                @error('name')
                <div id="name-error" class="error">{{$message}}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="Password"@error('password')
                class="error" aria-describedby="password-error" aria-invalid="true" @enderror>
                @error('password')
                <div id="password-error" class="error">{{$message}}</div>
                @enderror
                {{-- <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password"> --}}
                <input type="password" id="confirmpassword" name="password_confirmation" placeholder="Confirm Password"@error('password_confirmation')
                class="error" aria-describedby="password_confirmation-error" aria-invalid="true" @enderror>
                @error('password_confirmation')
                <div id="password_confirmation-error" class="error">{{$message}}</div>
                @enderror

                <div class="radio-parent">
                    <div class="radio-container">
                        <input type="radio" id="binusian" name="type" value="binusian"@error('type')
                        class="error" aria-describedby="type-error" aria-invalid="true" @enderror>
                        <label for="binusian">Binusian</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" id="non-binusian" name="type" value="non-binusian"@error('type') class="error" @enderror>
                        <label for="non-binusian">Non-Binusian</label>
                    </div>
                    @error('type')
                    <div id="type-error" class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <!-- Leader form -->
            <div class="leader subcontainer">
                <div class="subtitle">Leader</div>
                <input type="text" id="fullname" name="fullname" placeholder="Full Name"@error('fullname')
                class="error" aria-describedby="fullname-error" aria-invalid="true" @enderror>
                @error('fullname')
                <div id="fullname-error" class="error">{{$message}}</div>
                @enderror
                <input type="email" id="email" name="email" placeholder="Email"@error('email')
                class="error" aria-describedby="email-error" aria-invalid="true" @enderror>
                @error('email')
                <div id="email-error" class="error">{{$message}}</div>
                @enderror
                <input type="text" id="whatsapp" name="whatsapp" placeholder="Whatsapp Number"@error('whatsapp')
                class="error" aria-describedby="whatsapp-error" aria-invalid="true" @enderror>
                @error('whatsapp')
                <div id="whatsapp-error" class="error">{{$message}}</div>
                @enderror
                <input type="text" id="lineid" name="lineid" placeholder="LINE ID"@error('lineid')
                class="error" aria-describedby="lineid-error" aria-invalid="true" @enderror>
                @error('lineid')
                <div id="lineid-error" class="error">{{$message}}</div>
                @enderror
                <input type="text" id="git_account" name="git_account" placeholder="Github/Gitlab ID"@error('git_account')
                class="error" aria-describedby="git_account" aria-invalid="true" @enderror>
                @error('git_account')
                <div id="git_account-error" class="error">{{$message}}</div>
                @enderror
                <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Birth Place"@error('place_of_birth')
                class="error" aria-describedby="place_of_birth" aria-invalid="true" @enderror>
                @error('place_of_birth')
                <div id="place_of_birth-error" class="error">{{$message}}</div>
                @enderror
                <input type="date" id="date_of_birth" name="date_of_birth"@error('date_of_birth')
                class="error" aria-describedby="date_of_birth" aria-invalid="true" @enderror>
                @error('date_of_birth')
                <div id="date_of_birth-error" class="error">{{$message}}</div>
                @enderror


                    <label for="identity" id="id-card-label" class="id-card">
                        <div> Upload ID Card (KTP/Binusian ID)</div>
                        <img src="{{asset("res/register-icon.svg")}}" alt="">
                    </label>
                    <input type="file" id="identity" name="identity"@error('identity')
                    class="error" aria-describedby="identity" aria-invalid="true" @enderror>
                    @error('identity')
                    <div id="identity-error" class="error">{{$message}}</div>
                    @enderror

                    <label for="cv" id="cv-label" class="cv">
                        <div>Upload CV</div>
                        <img src="{{asset("res/register-icon.svg")}}" alt="">
                    </label>
                    <input type="file" id="cv" name="cv"@error('cv')
                    class="error" aria-describedby="cv" aria-invalid="true" @enderror>
                    @error('cv')
                    <div id="cv-error" class="error">{{$message}}</div>
                    @enderror

            </div>

            <button id="submit" type="submit">Submit</button>
        </form>
    </div>

</div>
@foreach ($errors->all() as $err)
<!-- {{$err}} -->
@endforeach
<script src="{{asset("js/register.js")}}"></script>

</body>
</html>
