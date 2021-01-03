<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BNCC Hackathon 4.0</title>

        <!-- logo favicon -->
        <link rel="shortcut icon" href="/Resources/home-logoHackathon.png" type="image/x-icon">
        <!-- font : poppins -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- jquery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- CSS links: -->
        <link rel="stylesheet" href="{{url('/css/home.css')}}">
        <link rel="stylesheet" href="{{url('/css/aboutus.css')}}">
        <link rel="stylesheet" href="{{url('/css/championPrizes.css')}}">

        <link rel="stylesheet" href="{{url('/css/contactus.css')}}">
    </head>
<body>
    @if(Session::has('success'))
        <p class="alert {{ Session::get('success-class', 'alert alert-success') }}">{{ Session::get('success') }}</p>
    @endif
    <!-- contact us -->
    <div class="contactus">
        <div class="contactus-left">
            <div class="title">Contact Us</div>
            <div class="box">
                <form action="{{route('send')}}" method="POST">
                @csrf
                    <label for="name">Name</label>
                    {{-- <div class="invalidName invalid">Invalid name. Minimum 3 character and letters only.</div> --}}
                    <input type="text" id="name" name="name" placeholder="Type here...">

                    <label for="email">Email</label>
                    {{-- <div class="invalidEmail invalid">Invalid email address. Valid entries include: someone@example.com</div> --}}
                    <input type="text" id="email" name="email" placeholder="Type here...">

                    <label for="subject">Subject</label>
                    {{-- <div class="invalidSubject invalid">Invalid subject.</div> --}}
                    <input type="text" id="subject" name="subject" placeholder="Type here...">

                    <label for="message">Message</label>
                    {{-- <div class="invalidMessage invalid">Invalid message. Minimum 15 characters.</div> --}}
                    <input type="text" id="message" name="text" placeholder="Type here...">

                    <button id="submit" onclick="submit()">Submit</button>
                </form>
            </div>
        </div>

        <div class="contactus-right">
            <div class="image"><img src="/Resources/contactus-pic.png" alt="" height="250px"></div>
            <div class="socmed">
                <div class="line">
                    <div class="icon"><img src="/Resources/contactus-icon1.png" alt=""></div>
                    <div class="text">@bnccbinus</div>
                </div>
                <div class="line">
                    <div class="icon"><img src="/Resources/contactus-icon2.png" alt=""></div>
                    <div class="text">technoscape@bncc.net</div>
                </div>
                <div class="line">
                    <div class="icon"><img src="/Resources/contactus-icon3.png" alt=""></div>
                    <div class="text">@BNCC_Binus</div>
                </div>
                <div class="line">
                    <div class="icon"><img src="/Resources/contactus-icon4.png" alt=""></div>
                    <div class="text">Bina Nusantara Computer Club</div>
                </div>
                <div class="line">
                    <div class="icon"><img src="/Resources/contactus-icon5.png" alt=""></div>
                    <div class="text">Bina Nusantara Computer Club</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('/js/contactus.js')}}"></script>
    <script src="/js/app.js"></script>
</body>
</html>

