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
    <div><a href="{{route("home")}}"><img src="{{asset("res/home-logoHackathon.png")}}" alt="logo-hackathon" height="130px"></a></div>
    <ul class="list-container">
        <li><a href="{{route('view_dashboard')}}" class="navbar-not-active" id="user-home">Home</a></li>
        <li>
          <a href="{{route('payment')}}" class="navbar-active" id="user-payment">Payment</a>
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
    <!-- Payment -->
    <div class="user-payment-section" id="user-payment-container">
        <!-- Dashboard Title -->
      <div class="user-dashboard-title">
          <img src="{{asset("res/user-line.svg")}}" alt="Line 1" class="user-line1 line">
          <h1 class="user-title">Dashboard</h1>
          <img src="{{asset("res/user-line.svg")}}" alt="Line 1" class="user-line2 line">
      </div>
      <!-- Content -->
      <div class="user-content">
          <h3 class="user-subtitle">Payment</h3>
          <div class="user-payment-container">
              <h3 class="payment-subtitle">Payment Method Instructions</h3>
              <div class="payment-content">
                  <div class="payment-registration">
                      <!-- Content -->
                      <!-- Tutorial 1 -->
                      <div class="tutorial-container">
                          <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial1">
                              <p> 1. Periode Registrasi</p>
                              <input type="image" src="{{asset("res/user-arrow.svg")}}" id="toggle1" class="arrow">
                          </div>
                          <div class="tutorial-content" id="toggle1-content">
                              <p class="text-content">
                              - Early Bird (24 Agustus 2021 hingga 15 September 2021): Rp 60.000
                              <br>
                              - General (16 September 2021 hingga 3 Oktober 2021)
                              <br>
                              &nbsp;&nbsp;
                              &nbsp;&nbsp; - Binusian: Rp 80.000
                              <br>
                              &nbsp;&nbsp;
                              &nbsp;&nbsp; - Non-Binusian: Rp 100.000
                              </p>
                          </div>
                      </div>
                      <!-- Tutorial 2 -->
                      <div class="tutorial-container">
                          <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial2">
                              <p> 2. Pembayaran Biaya Pendaftaran</p>
                              <input type="image" src="{{asset("res/user-arrow.svg")}}" id="toggle2" class="arrow">
                          </div>
                          <div class="tutorial-content" id="toggle2-content">
                              <p class="text-content">
                                  Lakukan pembayaran biaya pendaftaran per tim ke nomor rekening berikut:
                                  <br>
                                  Nomor Rekening : 5271675071
                                  <br>
                                  Bank : BCA
                                  <br>
                                  Atas Nama : ANNISA VINIDYA LARASATI
                                  <br>
                                  <img src="{{asset("res/user-qrcode.svg")}}" alt="Qr code" class="qrcode">
                              </p>
                          </div>
                      </div>
                      <!-- Tutorial 3 -->
                      <div class="tutorial-container">
                          <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial3">
                              <p> 3. Upload Bukti Pembayaran</p>
                              <input type="image" src="{{asset("res/user-arrow.svg")}}" id="toggle3" class="arrow">
                          </div>
                          <div class="tutorial-content" id="toggle3-content">
                              <p class="text-content">
                                  Peserta mengisi data tim dan mengunggah file dengan batas
                                  maksimum 5 mb dalam bentuk .JPG, .JPEG, .PNG, atau .PDF
                                  yang berisi berkas – berkas berikut:
                                  <br>
                                  &nbsp;&nbsp;
                                  &nbsp;&nbsp; a. Identitas peserta, berupa Kartu Tanda Penduduk (KTP) atau kartu
                                  Pelajar bagi yang belum memiliki KTP, Binusian Card bagi Binusian, ataupun berkas lain yang dapat diverifikasi identitas sebagai warga negara yang sah
                                  <br>
                                  &nbsp;&nbsp;
                                  &nbsp;&nbsp;b. Curriculum Vitae (CV)
                                  <br>
                                  &nbsp;&nbsp;
                                  &nbsp;&nbsp;c. Bukti pembayaran
                              </p>
                          </div>
                      </div>
                      <!-- Tutorial 4 -->
                      <div class="tutorial-container">
                          <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial4">
                              <p> 4. Verifikasi Pembayaran</p>
                              <input type="image" src="{{asset("res/user-arrow.svg")}}" id="toggle4" class="arrow">
                          </div>
                          <div class="tutorial-content" id="toggle4-content">
                              <p class="text-content">
                              - Early Bird (24 Agustus 2021 hingga 15 September 2021): Rp 60.000
                              <br>
                              - General (16 September 2021 hingga 3 Oktober 2021)
                              <br>
                              &nbsp;&nbsp;
                              &nbsp;&nbsp; - Binusian: Rp 80.000
                              <br>
                              &nbsp;&nbsp;
                              &nbsp;&nbsp; - Non-Binusian: Rp 100.000
                              </p>
                          </div>
                      </div>
                      <!-- Earlybird Offer -->
                      <div class="tutorial-container">
                          <div class="tutorial-subtitle-notactive">
                              <p>Early Bird Offer</p>
                          </div>
                          <div class="tutorial-content-earlybird">
                              <p class="text-content">
                                  Waktu yang terisa untuk Early Bird:
                                  <br>
                                  {{$date_str}}
                              </p>
                              <p class="text-content" id="earlybird"></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Upload Payment -->
          <form action="{{route('pay')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
          <div class="upload-payment-container">
              <h3 class="upload-payment-subtitle">Upload Payment Receipt</h3>
              <div class="upload-payment-content">

                  <div class="upload-payment-left">
                      <div class="upload-payment-desc">
                          <h3 class="price-subtitle">Price</h3>
                          <input type="text" id="price" value="{{($price)}}" readonly class="payment-details">
                          <input type="text" id="type" value="{{($tipe)}}" readonly class="payment-details">
                      </div>
                  </div>

                  <div class="upload-payment-right">
                      <!-- Before Submit -->
                    @if($team->payment==NULL)
                      <div id="">
                        <!-- Status Paymentnya -->
                    <div class="payment-status">
                        <span class="inline-block"><h3 class="file-details">File Name:</h3> <h6 id="upload-text" class="filechosen">No file chosen</h2></span>
                        <span class="inline-block"><h3 class="file-details">Status:</h3><input type="text" id="paymentstatus" value="Not Verified" readonly class="payment-status"></span>
                    </div>
                    <div class="upload-button-container">
                        <!-- Upload File -->
                        <label for="bukti" id="bukti-label" class="cv">
                            <div class="bukti-upload" >Upload File</div>
                        </label>
                        <input type="file" id="bukti" name="payment" required>
                        <!-- Submit -->
                        <input id="submit-bukti" type="submit" value="Submit"   >
                    </div>
                   </div>
                    @else
                      <!-- After Submit -->
                      <div id="">
                          <div class="payment-status">
                              <span class="inline-block"><h3 class="file-details">Status:</h3><input type="text" id="paymentstatus" value="{{($stats)}}" readonly class="payment-status"></span>
                          </div>
                          <div class="upload-button-container">
                              <a href="#bukti-pic" id="view-bukti" type="submit" class="submit-text" rel="modal:open">View</a>
                          </div>
                      </div>
                      <div id="bukti-pic" class="modal-background">
                        <embed src="{{asset($team->payment)}}" alt="Bukti Image" class="image-modal">
                        <a href="#" rel="modal:close"></a>

                @endif
                </div>
                </div>

              </div>


          </div>
          </form>
      </div>
  </div>
    <!-- JS -->
    <script src="{{url('/js/scriptUser.js')}}"></script>
    <script src="{{url('/js/scriptUserPayment.js')}}"></script>
    <!-- Modal CSS -->
    <link rel="stylesheet" href="{{url('/css/styleUserModal.css')}}">
</body>
</html>

