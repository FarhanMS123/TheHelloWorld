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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- CSS links: -->
    <link rel="stylesheet" href="{{url('/css/home.css')}}">
    <link rel="stylesheet" href="{{url('/css/aboutus.css')}}">
    <link rel="stylesheet" href="{{url('/css/championPrizes.css')}}">
    <link rel="stylesheet" href="{{url('/css/whyjoin.css')}}">
    <link rel="stylesheet" href="{{url('/css/contactus.css')}}">
    <link rel="stylesheet" href="{{url('/css/sponsor.css')}}">
    <link rel="stylesheet" href="{{url('/css/medpar.css')}}">
    <link rel="stylesheet" href="{{url('/css/timeline.css')}}">
    <link rel="stylesheet" href="{{url('/css/footer.css')}}">
    <link rel="stylesheet" href="{{url('/css/otherevent.css')}}">
    <link rel="stylesheet" href="{{url('/css/faq.css')}}">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div><a href="{{route('home')}}"><img src="{{url('/res/home-logoHackathon.png')}}" alt="logo-hackathon" height="130px"></a></div>
    <ul class="list-container">
        <li>Home</li>
        <li>Champion Prizes</li>
        <li>About</li>
        <li>FAQ</li>
        <li>Timeline</li>
        <li class="login"><a href="{{route('login')}}">Login</a></liv>
    </ul>
</div>

<!-- Home -->
<div class="home">
    <!-- upper text -->
    <div class="title">Hackathon 4.0</div>
    <div class="slogan">Transform ideas, Code Your Solution</div>

    <!-- carousel -->
    <div class="slider">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials">
            <label class="item" for="t-1">
                <img src="{{url('/res/home-carousel1.jpg')}}" alt="picture">
                <h2>Hackhathon 1.0</h2>
            </label>
            <label class="item" for="t-2">
                <img src="{{url('/res/home-carousel2.jpg')}}" alt="picture">
                <h2>Hackathon 2.0</h2>
            </label>
            <label class="item" for="t-3">
                <img src="{{url('/res/home-carousel3.jpg')}}" alt="picture">
                <h2>Hackathon 2.0</h2>
            </label>
            <label class="item" for="t-4">
                <img src="{{url('/res/home-carousel4.jpg')}}" alt="picture">
                <h2>Hackathon 3.0</h2>
            </label>
            <label class="item" for="t-5">
                <img src="{{url('/res/home-carousel5.jpg')}}" alt="picture">
                <h2>Hackathon 3.0</h2>
            </label>
        </div>
        <div class="dots">
            <label for="t-1"></label>
            <label for="t-2"></label>
            <label for="t-3"></label>
            <label for="t-4"></label>
            <label for="t-5"></label>
        </div>
    </div>

    <!-- findoutmore -->
    <a href="#aboutus"><div class="findoutmore">
        <div class="text">Find Out More</div>
    </div></a>
    <div class="arrow1"></div>
    <div class="arrow2"></div>

    <!-- ellipse -->
    <div class="ellipse1"><img src="{{url('/res/home-Ellipse1.png')}}" alt=""></div>
    <div class="ellipse2"><img src="{{url('/res/home-ellipse2.png')}}" alt=""></div>
    <div class="ellipse3"><img src="{{url('/res/home-Ellipse3.png')}}" alt=""></div>
</div>

<!-- champion prizes -->
<div class="championprizes">
    <div class="title-championprizes">Champion Prizes</div>

    <!-- boxes -->
    <div class="container-championprizes">
        <div class="section first">
            <div class="uppertext">
                <div class="number">1</div>
                <div class="text">st</div>
            </div>
            <div class="box">
                <div class="money">Rp. 3.500.000</div>
                <div class="plus">+</div>
                <div class="object">Certificate</div>
                <div class="plus">+</div>
                <div class="object">Merchandise</div>
            </div>
        </div>
        <div class="section second">
            <div class="uppertext">
                <div class="number">2</div>
                <div class="text">nd</div>
            </div>
            <div class="box">
                <div class="money">Rp. 2.500.000</div>
                <div class="plus">+</div>
                <div class="object">Certificate</div>
                <div class="plus">+</div>
                <div class="object">Merchandise</div>
            </div>
        </div>
        <div class="section third">
            <div class="uppertext">
                <div class="number">3</div>
                <div class="text">rd</div>
            </div>
            <div class="box">
                <div class="money">Rp. 1.000.000</div>
                <div class="plus">+</div>
                <div class="object">Certificate</div>
                <div class="plus">+</div>
                <div class="object">Merchandise</div>
            </div>
        </div>
    </div>

    <!-- ellipse -->
    <div class="ellipse1"><img src="{{url('/res/championprizes-ellipse1.png')}}" alt=""></div>
    <div class="ellipse2"><img src="{{url('/res/championprizes-ellipse2.png')}}" alt="" height="350px"></div>

</div>

<!-- About Us Section -->
<div id="aboutus"></div>
<div class="section-aboutus">
    <div class="title-aboutus">About Hackathon 4.0</div>
    <div class="about-us-content">
        <div class="about-us-left">
          <p class="about-us-text">
              Hackathon merupakan lomba coding selama 48 jam di mana setiap tim
              ditantang memberikan solusi atas suatu permasalahan dengan
              menghasilkan produk berupa aplikasi ataupun website.
          </p>
          <div class="about-us-buttons">
              <button class="about-us-button-text" id="button-register">
                  <a href="{{route('view_register')}}"> Register</a>
              </button>
              <button class="about-us-button-text" id="button-download-guide-book">
                  <a href=""> Download Guide Book</a>
              </button>
          </div>
        </div>
        <div class="about-us-right">
          <img src="{{url('/res/aboutus-pic1.png')}}" alt="about-us-pic" class="about-us-pic" height="300px">
        </div>
    </div>
  </div>

  <!-- Why Join Section -->
  <div class="section-whyjoin">
    <div class="title-whyjoin">Why Should You Join?</div>
    <!-- Content Container -->
    <div class="whyjoin-content">
        <!-- Chance of Job Interview -->
        <div class="whyjoin-content1-container">
            <div class="whyjoin-pic1-container">
                <img src="{{url('/res/whyjoin-pic1.svg')}}" alt="pic1" class="whyjoin-pic1">
                <img src="{{url('/res/whyjoin-circle.svg')}}" alt="circle" class="whyjoin-circle spin">
            </div>
            <div class="whyjoin-text1-container">
                <div class="whyjoin-text1-background">
                    <h6 class="whyjoin-subtitle">Chance of Job Interview</h6>
                    <p class="whyjoin-subtext">CV dari para pemenang Hackathon 4.0 akan disalurkan ke perusahaan sponsor dari Hackathon 4.0.</p>
                </div>
            </div>
        </div>
        <!-- Mentoring with Experts -->
        <div class="whyjoin-content1-container whyjoin-content2-container">
            <div class="whyjoin-pic1-container">
                <img src="{{url('/res/whyjoin-pic2.svg')}}" alt="pic1" class="whyjoin-pic1 whyjoin-pic2">
                <img src="{{url('/res/whyjoin-circle.svg')}}" alt="circle" class="whyjoin-circle spin">
            </div>
            <div class="whyjoin-text1-container">
                <div class="whyjoin-text1-background whyjoin-text2-background">
                    <h6 class="whyjoin-subtitle">Mentoring with Experts</h6>
                    <p class="whyjoin-subtext">Peserta akan mendapatkan kesempatan
                        untuk mentoring bisnis, desain, dan teknologi secara
                        langsung dari orang-orang yang berpengalaman di bidang IT
                        yang akan memberikan input mengenai project peserta.</p>
                </div>
            </div>
        </div>
        <!-- Networking -->
        <div class="whyjoin-content1-container">
            <div class="whyjoin-pic1-container">
                <img src="{{url('/res/whyjoin-pic3.svg')}}" alt="pic1" class="whyjoin-pic1 whyjoin-pic3">
                <img src="{{url('/res/whyjoin-circle.svg')}}" alt="circle" class="whyjoin-circle spin">
            </div>
            <div class="whyjoin-text1-container">
                <div class="whyjoin-text1-background">
                    <h6 class="whyjoin-subtitle">Networking</h6>
                    <p class="whyjoin-subtext">Peserta akan mendapatkan kesempatan untuk
                        networking dengan peserta lain, mentor, dan juri Hackathon 4.0.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="section-faq">
    <div class="title-faq">FAQ</div>
    <div class="faq-content-container">
        <!-- Content -->
        <!-- Left -->
        <div class="faq-content-left">
            <!-- Tutorial 1 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial1">
                    <p> Apa itu Hackathon 4.0 ?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle1" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle1-content">
                    <p class="text-content">
                        Hackathon 4.0 adalah event Hackathon ke-4 yang akan diadakan oleh BNCC. Di event ini, peserta
                        akan ditantang untuk menyelesaikan case-case yang
                        berhubungan dengan dunia IT dalam waktu 48 jam dalam bentuk website atau aplikasi.
                    </p>
                </div>
            </div>

            <!-- Tutorial 2 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial2">
                    <p>Apakah Hackathon 4.0 akan diadakan secara online?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle2" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle2-content">
                    <p class="text-content">
                        Ya, Hackathon 4.0 ini akan diadakan full secara online.
                    </p>
                </div>
            </div>

            <!-- Tutorial 3 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial3">
                    <p> Apakah Hackathon 4.0 dipungut biaya?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle3" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle3-content">
                    <p class="text-content">
                        Event Hackathon 3.0 ini dipungut biaya dan memiliki 3 paket:
                        <br>
                        A. Paket 1: Early Bird (24 September - 15 September 2021)     dikenakan biaya Rp 60.000/ tim
                        <br>
                        B. Paket 2: Normal Price Binusian (16 September - 3 Oktober 2021) dikenakan biaya Rp 80.000/ tim
                        <br>
                        C. Paket 3: Normal Price Umum (16 September - 3 Oktober 2021) dikenakan biaya Rp. 100.000/ tim
                    </p>
                </div>
            </div>

            <!-- Tutorial 4 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial4">
                    <p>Apa saja hal yang diperlukan untuk mendaftar sebagai peserta?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle4" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle4-content">
                    <p class="text-content">
                        Peserta harus melakukan registrasi tim di website hackathon.bncc.net
                        , lalu mensubmit dokumen dokumen yang diperlukan seperti
                        KTP, CV, dan Kartu Tanda Mahasiswa(Khusus untuk Binusian).
                    </p>
                </div>
            </div>

            <!-- Tutorial 5 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial5">
                    <p> Apa saja persyaratan untuk menjadi peserta dalam Hackathon 4.0 ini?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle5" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle5-content">
                    <p class="text-content">
                        Untuk mengikuti Hackathon 4.0 ini,
                        peserta dapat tim yang maksimal terdiri dari 3-4 orang dengan
                        rentang usia 18-25 tahun. Setiap peserta diwajibkan untuk mengirimkan
                        CV pada dashboard masing-masing tim. Setiap tim juga diwajibkan sudah
                        melakukan pembayaran biaya lomba bila berminat mengikuti Hackathon 4.0 ini.
                    </p>
                </div>
            </div>
        </div>

         <!-- Right -->
        <div class="faq-content-right">
            <!-- Tutorial 6 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial6">
                    <p>Apakah peserta diwajibkan untuk membentuk tim saat mengikuti Hackathon 4.0?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle6" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle6-content">
                    <p class="text-content">
                        Peserta tidak diwajibkan untuk membentuk tim dan
                        diperbolehkan untuk mengikuti event ini secara individu
                        bila berminat.
                    </p>
                </div>
            </div>

            <!-- Tutorial 7 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial7">
                    <p>Apakah peserta diperbolehkan untuk terdaftar di 2 tim?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle7" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle7-content">
                    <p class="text-content">
                        Peserta tidak diperbolehkan mendaftar di lebih dari satu tim.
                    </p>
                </div>
            </div>

            <!-- Tutorial 8 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial8">
                    <p> Bagaimana jika saat event ini berlangsung, saya ada kepentingan lain yang harus dilakukan?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle8" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle8-content">
                    <p class="text-content">
                        Bila ada kepentingan lain saat event ini berlangsung,
                        maka peserta wajib untuk memberikan info kepada panitia minimal H-2 dari event.
                    </p>
                </div>
            </div>

            <!-- Tutorial 9 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial9">
                    <p>Kapan pendaftaran ditutup?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle9" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle9-content">
                    <p class="text-content">
                        Pendaftaran ditutup pada 3 Oktober 2021, jam 21:00 WIB.
                    </p>
                </div>
            </div>

            <!-- Tutorial 10 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial10">
                    <p> Bagaimana jika peserta sudah menyiapkan sebagian source code sebelum event dimulai?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle10" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle10-content">
                    <p class="text-content">
                        Menyiapkan source code sebelum event dimulai, melanjutkan dan melombakan lagi
                        project yang pernah dibuat merupakan pelanggaran.
                        Apabila peserta terbukti melakukan pelanggaran maka akan didiskualifikasi.
                    </p>
                </div>
            </div>

            <!-- Tutorial 11 -->
            <div class="tutorial-container">
                <div class="tutorial-subtitle-notactive tutorial-subtitle" id="tutorial11">
                    <p>Bila saya tidak memiliki basic coding maupun design, apakah saya masih boleh ikut?</p>
                    <input type="image" src="{{url('/res/user-arrow.svg')}}" id="toggle11" class="arrow">
                </div>
                <div class="tutorial-content" id="toggle11-content">
                    <p class="text-content">
                        Peserta yang tidak memiliki basic coding tetap diperbolehkan mengikuti Hackathon 4.0.
                        Namun, nantinya akan ada seleksi untuk menentukan tim mana yang bisa berpartisipasi di hari H Hackathon.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Timeline -->
<div class="section-timeline">
    <div class="title-timeline">Timeline</div>
    <div class="timeline-content">
        <div class="timeline-content-icons">
            <img src="{{url('/res/timeline-pic1.svg')}}" alt="Open Registration Icon" class="timeline-icons" id="timeline-pic1">
            <img src="{{url('/res/timeline-pic2.svg')}}" alt="Close Registration Icon" class="timeline-icons" id="timeline-pic2">
            <img src="{{url('/res/timeline-pic3.svg')}}" alt="Technical Meeting Icon" class="timeline-icons" id="timeline-pic3">
            <img src="{{url('/res/timeline-pic4.svg')}}/Resources/timeline-pic4.svg" alt="Competition Day Icon" class="timeline-icons" id="timeline-pic4">
        </div>
        <div class="timeline-content-line">
            <img src="{{url('/res/timeline-line.svg')}}" alt="Line" class="timeline-line">
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
    <div class="timeline-circle">
        <img src="{{url('/res/timeline-circle.svg')}}" alt="Circle">
    </div>
</div>

<!-- sponsor -->
<div class="sponsor">
    <div class="title-sponsor">Sponsor</div>

    <div class="container">
        <div class="subtitle images">Platinum</div>
        <div class="platinum">
            <a href="https://www.tiket.com/"><img src="{{url('/res/sponsor-platinum1.png')}}" alt=""></a>
        </div>
        <div class="subtitle">Gold</div>
        <div class="gold images">
            <a href="https://www.mokapos.com/"><img src="{{url('/res/sponsor-gold1.png')}}" alt=""></a>
            <a href="https://www.plugandplaytechcenter.com/"><img src="{{url('/res/sponsor-gold2.png')}}" alt=""></a>
        </div>
        <div class="subtitle">Silver</div>
        <div class="silver images">
            <a href="https://strongbee.co.id/"><img src="{{url('/res/sponsor-silver1.png')}}" alt=""></a>
            <a href="https://warungpintar.co.id/"><img src="{{url('/res/sponsor-silver2.png')}}" alt=""></a>
            <a href="https://helloyuna.io/"><img src="{{url('/res/sponsor-silver3.png')}}" alt=""></a>
        </div>
    </div>

    <img class="ellipse" src="{{url('/res/sponsor-ellipse.png')}}" alt="">
</div>

<!-- Media Partner -->
<div class="medpar">
    <div class="title-medpar">Media Partner</div>
    <div class="box">
        <div class="line">
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic1.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic2.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic3.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic4.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic5.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic6.png')}}" alt=""></a></div>
        </div>
        <div class="line">
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic7.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic8.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic9.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic10.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic11.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic13.png')}}" alt=""></a></div>
        </div>
        <div class="line">
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic14.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic15.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic16.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic17.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic18.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic19.png')}}" alt=""></a></div>
        </div>
        <div class="line">
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic21.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic22.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic23.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic24.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic25.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic26.png')}}" alt=""></a></div>
        </div>
        <div class="line">
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic27.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic28.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic29.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic30.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic31.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic32.png')}}" alt=""></a></div>
        </div>
        <div class="line">
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic33.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic34.png')}}" alt=""></a></div>
            <div class="image"><a href="http://" target="_blank" rel="noopener noreferrer"><img src="{{url('/res/medpar-pic35.png')}}" alt=""></a></div>
        </div>
    </div>
</div>

 <!-- Other Events -->
 <div class="section-otherevents">
    <div class="otherevents-title"> Other Events </div>
    <!-- Content Container -->
    <!-- Virtual Conference -->
    <div class="otherevents-content-container">
        <div class="otherevents-subtitle">
            <h2>Virtual Conference</h2>
            <span class="otherevents-date"><img src="{{url('/res/otherevents-calendar.svg')}}" alt="Calendar Icon" class="otherevents-icon"><p> Date of event</p></span>
        </div>
        <div class="otherevents-picture">
            <a href="https://virtualconference.bncc.net/"><img src="{{url('/res/otherevents-virtualconf.svg')}}" alt="Virtual Conference"></a>
        </div>
        <div class="otherevents-text">
            <p>
                Virtual Conference is a Webinar & Workshop series that will educate participants regarding business, design, and technology.
                <br>
                <br>
                Participants will gain insights and skills which they can implement to solve problems in real-life and have a chance to interact with experts from the field.
                <br>
                <br>
                Participants may also be provided with digital merchandise and videos of the conference.
            </p>
        </div>
        <div class="otherevents-link otherevents-text">
            <p>Find out more now!</p>
            <span class="otherevents-redirect">
                <a href="https://virtualconference.bncc.net/" class="flexthis">
                    <h3>Visit the Web</h3>
                    <img src="{{url('/res/otherevents-redirect.svg')}}" alt="Redirect Icon" class="otherevents-icon" style="width: 20px; margin-left: 15px;">
                </a>
            </span>
        </div>
    </div>
    <!-- Developer Workshop -->
    <div class="otherevents-content-container">
        <div class="otherevents-subtitle">
            <h2>Developer Workshop</h2>
            <span class="otherevents-date"><img src="{{url('/res/otherevents-calendar.svg')}}" alt="Calendar Icon" class="otherevents-icon"><p> Date of event</p></span>
        </div>
        <div class="otherevents-picture">
            <a href="https://linktr.ee/TechnoScape"><img src="{{url('/res/otherevents-devwork.svg')}}" alt="Virtual Conference"></a>
        </div>
        <div class="otherevents-text">
            <p>
                Road to BNCC Hackathon is a weekly webinar series which will talk about topics that are relevant in the IT field from notable speakers.
                <br>
                <br>
                Road to Hackathon exists as a forum for people who want to develop their knowledge in technology and to interact with fellow technology enthusiasts.
            </p>
        </div>
        <div class="otherevents-link otherevents-text">
            <p>Find out more now!</p>
            <span class="otherevents-redirect">
                <a href="https://linktr.ee/TechnoScape" class="flexthis">
                    <h3>Register Now!</h3>
                    <img src="{{url('/res/otherevents-redirect.svg')}}" alt="Redirect Icon" class="otherevents-icon" style="width: 17px; margin-left: 15px;">
                </a>
            </span>
        </div>
    </div>
</div>

 <!-- contact us -->
 <div class="contactus">
    <div class="contactus-left">
        <div class="title">Contact Us</div>
        <div class="box">

            <form action="{{route('send')}}" method="POST" name="contactus">
            @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Type here...">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Type here...">

                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Type here...">

                <label for="message">Message</label>
                <textarea type="text" id="message" name="text" placeholder="Type here..."></textarea>

                <button id="submit"  type="submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="contactus-right">
        <div class="image"><img src="{{url('/res/contactus-pic.png')}}" alt="" height="250px"></div>
        <div class="socmed">
            <a href="https://www.instagram.com/bnccbinus/?hl=en" target="_blank"><div class="line" >
                <div class="icon"><img src="{{url('/res/contactus-icon1.png')}}" alt=""></div>
                <div class="text">@bnccbinus</div>
            </div></a>
            <div class="line">
                <div class="icon"><img src="{{url('/res/contactus-icon2.png')}}" alt=""></div>
                <div class="text">technoscape@bncc.net</div>
            </div>
            <a href="https://twitter.com/bncc_binus?lang=en" target="_blank" rel="noopener noreferrer"><div class="line">
                <div class="icon"><img src="{{url('/res/contactus-icon3.png')}}" alt=""></div>
                <div class="text">@BNCC_Binus</div>
            </div></a>
            <a href="https://www.facebook.com/bina.nusantara.computer.club/" target="_blank" rel="noopener noreferrer"><div class="line">
                <div class="icon"><img src="{{url('/res/contactus-icon4.png')}}" alt=""></div>
                <div class="text">Bina Nusantara Computer Club</div>
            </div></a>
            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/?originalSubdomain=id" target="_blank" rel="noopener noreferrer"><div class="line">
                <div class="icon"><img src="{{url('/res/contactus-icon5.png')}}" alt=""></div>
                <div class="text">Bina Nusantara Computer Club</div>
            </div></a>
        </div>
    </div>


</div>
<!-- Footer -->
<footer class="section-footer">
    <div class="footer-content-container">
        <div class="footer-organized">
            <p class="footer-subtext">Organized By</p>
            <a href="https://bncc.net/"><img src="{{url('/res/footer-bncc.svg')}}" alt="Logo BNCC" class="footer-bncc"></a>
        </div>
        <div class="footer-copyright">
            <h6 class="footer-copyright-text">© 2020 Bina Nusantara Computer Club, All right Reserved</h6>
        </div>
        <div class="footer-powered">
            <p class="footer-subtext">Powered By</p>
            <a href="https://binus.ac.id/"><img src="{{url('/res/footer-binus.svg')}}" alt="Logo Binus" class="footer-binus"></a>
        </div>
    </div>
</footer>




<!-- JAVASCRIPT links: -->
<script src="{{url('/js/contactus.js')}}"></script>
<script src="{{url('/js/faq.js')}}"></script>

</body>
</html>
