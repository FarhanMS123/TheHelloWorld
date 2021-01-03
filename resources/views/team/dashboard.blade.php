<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('/css/styleUserHome.css')}}">
    <link rel="stylesheet" href="{{url('/css/styleUserPayment.css')}}">
    <link rel="stylesheet" href="{{url('/css/styleUserTimeline.css')}}">
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
        <li><a href="{{route('view_dashboard')}}" class="navbar-active" id="user-home">Home</a></li>
        <li>
          <a href="{{route('payment')}}" class="navbar-not-active" id="user-payment">Payment</a>
        </li>
        <li>
          <a href="{{route('timeline')}}" class="navbar-not-active" id="user-timeline">Timeline</a>
        </li>
        <form action="{{route("logout")}}" method="post" style="display:inline-block">
            @csrf
            <button type="submit" style="border:none; background:none;">
                <li class="login" type="submit">Logout</li>
            </button>
        </form>
    </ul>
</div>

    <div class="user-home-section" id="user-home-container">
        <!-- Dashboard Title -->
        <div class="user-dashboard-title">
            <img src="{{asset("res/user-line.svg")}}" alt="Line 1" class="user-line1 line">
            <h1 class="user-title">Dashboard</h1>
            <img src="{{asset("res/user-line.svg")}}" alt="Line 1" class="user-line2 line">
        </div>
        <div class="user-content">
            <h3 class="user-subtitle">Home</h3>
            <!-- Leader -->
            @foreach ($team->members as $member)
                <div class="user-content-leader">
                    @if ($member->type=="leader")
                        <h3 class="user-content-subtitle">Leader</h3>
                    @else
                        <h3 class="user-content-subtitle">Member</h3>
                    @endif
                    <div class="user-leader-data">
                        <!-- Left Form -->
                        <div class="user-leader-data-left">
                            <label for="fullname" class="label">Full Name</label>
                            <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="{{($member->fullname)}}" readonly class="data-container">
                            <label for="email" class="label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" value="{{($member->email)}}" readonly class="data-container">
                            <label for="whatsapp" class="label">Whatsapp Number</label>
                            <input type="text" id="whatsapp" name="whatsapp" placeholder="Whatsapp Number" value="{{($member->whatsapp)}}" readonly class="data-container">
                            <label for="lineid" class="label">LINE ID</label>
                            <input type="text" id="lineid" name="lineid" placeholder="LINE ID" value="{{($member->lineid)}}" readonly class="data-container">
                        </div>
                        <!-- Right Form -->
                        <div class="user-leader-data-right">
                            <label for="git_account" class="label">Github/Gitlab ID</label>
                            <input type="text" id="git_account" name="git_account" placeholder="Github/Gitlab ID" value="{{($member->git_account)}}" readonly class="data-container">
                            <label for="place_of_birth" class="label">Birth Place</label>
                            <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Birth Place" value="{{($member->place_of_birth)}}" readonly class="data-container">
                            <label for="date_of_birth" class="label">Birth Date</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" value="{{($member->date_of_birth)}}" readonly class="data-container">
                            <!-- View File Container -->
                            <div class="view-file-container">
                                <!-- This Id Card Leader -->
                                <span class="button-border">ID Card
                                    <a href="#leader-idcard-img" id="leader-button-viewid" rel="modal:open" class="button-viewfile" value="{{($member->id)}}">View</a>
                                </span>
                                <!-- This CV Leader -->
                                <span class="button-border">CV
                                    <a href="#leader-cv" id="leader-button-viewcv" rel="modal:open" class="button-viewfile" value="{{($member->id)}}">View</a>
                                </span>
                                <div id="leader-idcard-img" class="modal-background">
                                    <embed src="{{asset($member->identity)}}" alt="Leader Image" class="image-modal">
                                    <a href="#" rel="modal:close"></a>
                                </div>
                                <div id="leader-cv" class="modal-background">
                                    <embed src="{{asset($member->cv)}}" alt="Leader Image" class="pdf-modal">
                                    <a href="#" rel="modal:close"></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach

            <!-- This is for Button, change the href id to the member yang bersangkutan div -->
             {{-- <div class="view-file-container">
                <span class="button-border">ID Card
                    <a href="#member1-idcard-img" id="leader-button-viewid" rel="modal:open" class="button-viewfile">View</a>
                </span>
                <span class="button-border">CV
                    <a href="#member1-cv" id="leader-button-viewcv" rel="modal:open" class="button-viewfile">View</a>
                </span>
            </div> --}}

            <!-- Image Div -->

            <!-- Leader ID -->

            <!-- Leader CV -->

              {{-- <!-- Member1 ID -->
              <div id="member1-idcard-img" class="modal-background">
                <embed src="/User/Popup/1_w4DxUy0PMoqeq25UXfyL0g@2x.jpeg" alt="Leader Image" class="image-modal">
                <a href="#" rel="modal:close"></a>
            </div>
            <!-- Member1 CV -->
            <div id="member1-cv" class="modal-background">
                <embed src="/User/Popup/Handbook BNCC.pdf" alt="Leader Image" class="pdf-modal">
                <a href="#" rel="modal:close"></a>
            </div>

              <!-- Member2 ID -->
              <div id="member2-idcard-img" class="modal-background">
                <embed src="/User/Popup/1_w4DxUy0PMoqeq25UXfyL0g@2x.jpeg" alt="Leader Image" class="image-modal">
                <a href="#" rel="modal:close"></a>
            </div>
            <!-- Member2 CV -->
            <div id="member2-cv" class="modal-background">
                <embed src="/User/Popup/Handbook BNCC.pdf" alt="Leader Image" class="pdf-modal">
                <a href="#" rel="modal:close"></a>
            </div>

              <!-- Member3 ID -->
              <div id="member3-idcard-img" class="modal-background">
                <embed src="/User/Popup/1_w4DxUy0PMoqeq25UXfyL0g@2x.jpeg" alt="Leader Image" class="image-modal">
                <a href="#" rel="modal:close"></a>
            </div>
            <!-- Member3 CV -->
            <div id="member3-cv" class="modal-background">
                <embed src="/User/Popup/Handbook BNCC.pdf" alt="Leader Image" class="pdf-modal">
                <a href="#" rel="modal:close"></a>
            </div> --}}


            @if (count($team->members)<=3)
            <!-- Add Member -->
            <div class="user-add-member">
                <input type="button" id="addmember" class="add-member-button" value="+ ADD MEMBER">
            </div>
            <!-- Member -->
            <form action="{{route('add_member')}}" name="addmemberform" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-content-member" id="member-registration">
                <h3 class="user-content-subtitle">Member</h3>

                <div class="user-leader-data">
                    <!-- Left Form -->
                    <div class="user-leader-data-left">
                        <label for="fullname" class="label">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Full Name" class="data-container" required>
                        <label for="email" class="label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" class="data-container" required>
                        <label for="whatsapp" class="label">Whatsapp Number</label>
                        <input type="text" id="whatsapp" name="whatsapp" placeholder="Whatsapp Number" class="data-container" required>
                        <label for="lineid" class="label">LINE ID</label>
                        <input type="text" id="lineid" name="lineid" placeholder="LINE ID" class="data-container" required>
                    </div>

                    <!-- Right Form -->
                    <div class="user-leader-data-right">
                        <label for="git_account" class="label">Github/Gitlab ID</label>
                        <input type="text" id="git_account" name="git_account" placeholder="Github/Gitlab ID"class="data-container" required>
                        <label for="place_of_birth" class="label">Birth Place</label>
                        <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Birth Place"  class="data-container" required>
                        <label for="date_of_birth" class="label">Birth Date</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="data-container" required>
                        <!-- Input File Container -->
                        <div class="view-file-container">
                            <span class="button-border">
                                <label for="identity" id="id-card-label" class="id-card">
                                    <div> Upload ID Card (KTP/Binusian ID)</div>
                                    <img src="/Resources/register-icon.svg" alt="">
                                </label>
                                <input type="file" id="identity" name="identity">
                            </span>

                            <span class="button-border">
                                <label for="cv" id="cv-label" class="cv">
                                    <div >Upload CV</div>
                                    <img src="{{asset("res/register-icon.svg")}}" alt="">
                                </label>
                                <input type="file" id="cv" name="cv">
                            </span>

                        </div>
                    </div>
                </div>
                <span class="button-container"><button id="submit" type="submit">SUBMIT</button></span>
            </div>
            </form>

            @endif

            <!-- Contact Us -->
            <div class="user-contactus">
                <div class="user-contactus-content">
                    <span class="contactus-top">Jika ada informasi yang ingin diubah, silahkan hubungi Contact Person berikut:</span>
                    <!-- lefright container -->
                    <div class="contactus-leftright-container">
                        <!-- Left -->
                        <div class="user-contactus-left">
                            <p style="color:#39BEFF;">John Doe</p>
                            <div class="contactus-info">
                               <img src="{{asset("res/user-whatsapplogo.svg")}}" alt="Whatsapp Logo" class="contactus-logo"> 0812 3456 7890
                               <br>
                               <img src="{{asset("res/user-linelogo.svg")}}" alt="Line Logo" class="contactus-logo"> john.doe
                            </div>
                        </div>
                       <!-- Right -->
                        <div class="user-contactus-right">
                            <p style="color:#39BEFF;">Jane Doe</p>
                            <div class="contactus-info">
                                <img src="{{asset("res/user-whatsapplogo.svg")}}" alt="Whatsapp Logo" class="contactus-logo">0898 7654 3210
                                <br>
                                <img src="{{asset("res/user-linelogo.svg")}}" alt="Line Logo" class="contactus-logo"> jane.doe
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="{{url('/js/scriptUser.js')}}"></script>
    <!-- Modal CSS -->
    <link rel="stylesheet" href="{{url('/css/styleUserModal.css')}}">
</body>
</html>
