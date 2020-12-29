<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div><img src="{{asset("res/home-logoHackathon.png")}}" alt="logo-hackathon" height="130px" class="navbar-logo"></div>
        <ul class="list-container">
            <li>Home</li>
            <li>Champion Prizes</li>
            <li>About</li>
            <li>FAQ</li>
            <li>Timeline</li>
            <li class="login">Login</li>
        </ul>
    </div>
    <div class="section-login">
        <div class="login-panel">
            <div class="login-upper">
                <img src="{{asset("res/login-line.svg")}}" alt="Line 1" class="login-line1 line">
                <h1 class="login-title">LOGIN</h1>
                <img src="{{asset("res/login-line.svg")}}" alt="Line 1" class="login-line2 line">
            </div>
            <div class="login-inner-panel">
                <form action="{{route("login")}}" method="POST" enctype="application/x-www-form-urlencoded">
                    @csrf
                    <!-- Login Form -->
                    <div class="login-form">
                        <input type="text" placeholder="Group Name" id="group-name" name="name" required class="login-inputform">
                        <input type="password" placeholder="Password" id="password" name="password" required class="login-inputform">
                        <!-- Login Lower -->
                        <div class="login-lower">
                            <div class="login-slider">
                                <label class="switch">
                                    <input type="checkbox" name="remember">
                                    <span class="slider round"></span>
                                </label>
                                <div class="login-rememberme">
                                    Remember Me
                                </div>
                            </div>
                           <div class="login-register">
                                Not yet have an account? <a href="{{route("view_register")}}" class="login-redirect-register"> Click here</a>
                           </div>
                        </div>
                        <!-- Button -->
                        <button type="submit" id="login-submit" class="submit-button">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($errors->all() as $err)
    <!-- {{$err}} -->
    @endforeach
</body>
</html>
