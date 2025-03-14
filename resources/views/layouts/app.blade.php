<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GEREJA KRISTEN JERUSSALEM BARU</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('Logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center fixed-top bg-dark">
    <div class="header-container bg-dark container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('Logo.png') }}" alt="">
        {{-- <h1 class="sitename">GKJB</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a class="text-light" href="{{ route('home') }}">Home</a></li>
          <li><a class="text-light" href="{{ route('service') }}">Jadwal Ibadah</a></li>
          <li><a class="text-light" href="{{ route('service') }}">Tentang Kami</a></li>
          <li><a class="text-light" href="{{ route('service') }}">Kegiatan</a></li>
          <li><a class="text-light" href="{{ route('service') }}">Departemen</a></li>
          <li><a class="text-light" href="#features">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list text-light"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    @yield('konten')
  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">GEREJA KRISTEN JERUSALEM BARU</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jalan selambo pasar 4</p>
            <p>Amplas, Kec. Percut Sei Tuan, Kabupaten Deli Serdang, Sumatera Utara 20149</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+6285270967084</span></p>
            <p><strong>Email:</strong> <span>gkjbici@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/profile.php?id=100081426955078"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/gkjbic/"><i class="bi bi-instagram"></i></a>
            
          </div>
        </div>

        <div class="col-lg col-md">
          <h4>Topik Doa</h4>
            <form action="{{ route('kirimdoa') }}" method="post">
                @csrf
                <div class="form-floating">
                    <textarea name="doa" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Comments</label>
                  </div>
                  <button class="btn btn-primary mt-3" type="submit">send</button>
            </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">iLanding</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>