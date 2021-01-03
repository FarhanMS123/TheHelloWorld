<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- CSS -->
      <link rel="stylesheet" href="{{asset('css/styleUserHome.css')}}">
      <link rel="stylesheet" href="{{asset('css/styleUserPayment.css')}}">
      <link rel="stylesheet" href="{{asset('css/styleUserTimeline.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div><a href="index.html"><img src="{{asset("res/home-logoHackathon.png")}}" alt="logo-hackathon" height="130px"></a></div>
        <ul class="list-container">
            <li><a href="{{route('view_dashboard')}}" class="navbar-not-active" id="user-home">Home</a></li>
            <li>
              <a href="{{route('payment')}}" class="navbar-not-active" id="user-payment">Payment</a>
            </li>
            <li>
              <a href="{{route('timeline')}}" class="navbar-active" id="user-timeline">Timeline</a>
            </li>
            <form action="{{route("logout")}}" method="post" style="display:inline-block">
                @csrf
                <button type="submit" style="border:none; background:none;">
                    <li class="login" type="submit">Logout</li>
                </button>
            </form>
        </ul>
    </div>
    <!-- Timeline -->
    <div class="user-timeline-section" id="user-timeline-container">
           <!-- Dashboard Title -->
           <div class="user-dashboard-title">
            <img src="{{asset("res/user-line.svg")}}" alt="Line 1" class="user-line1 line">
            <h1 class="user-title">Dashboard</h1>
            <img src="{{asset("res/user-line.svg")}}" alt="Line 1" class="user-line2 line">
        </div>
        <!-- Content -->
        <div class="user-content">
            <h3 class="user-subtitle">Timeline</h3>
        </div>
        <div class="section-timeline">
            <div class="timeline-content">
                <div class="timeline-content-icons">
                    <img src="{{asset("res/timeline-pic1.svg")}}" alt="Open Registration Icon" class="timeline-icons" id="timeline-pic1">
                    <img src="{{asset("res/timeline-pic2.svg")}}" alt="Close Registration Icon" class="timeline-icons" id="timeline-pic2">
                    <img src="{{asset("res/timeline-pic3.svg")}}" alt="Technical Meeting Icon" class="timeline-icons" id="timeline-pic3">
                    <img src="{{asset("res/timeline-pic4.svg")}}" alt="Competition Day Icon" class="timeline-icons" id="timeline-pic4">
                </div>
                <div class="timeline-content-line">
                    <img src="{{asset("res/timeline-line.svg")}}" alt="Line" class="timeline-line">
                </div>
                <div class="timeline-content-text-container">
                    <div class="timeline-content-text">
                        <h6 class="timeline-subtitle">Open Registration</h6>
                        <h6 class="timeline-subtext"> 24 August 2021</h6>
                    </div>
                    <div class="timeline-content-text">
                        <h6 class="timeline-subtitle">Close Registration</h6>
                        <h6 class="timeline-subtext"> 3 October 2021</h6>
                    </div>
                    <div class="timeline-content-text">
                        <h6 class="timeline-subtitle">Technical Meeting</h6>
                        <h6 class="timeline-subtext"> 7 October 2021</h6>
                    </div>
                    <div class="timeline-content-text">
                        <h6 class="timeline-subtitle">Competition Day</h6>
                        <h6 class="timeline-subtext"> 10-12 August 2021</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="{{asset('js/scriptUser.js')}}"></script>
    <!-- Modal CSS -->
    <link rel="stylesheet" href="{{asset('css/styleUserModal.css')}}">
</body>
</html>
