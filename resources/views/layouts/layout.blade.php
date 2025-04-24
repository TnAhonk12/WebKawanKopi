<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kawan Kopi</title>
  <meta name="description" content="Kawan Kopi - Coffee Experience">
  <meta name="keywords" content="Coffee, Cafe, Kawan Kopi">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/kawan/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/kawan/logo.png') }}" rel="apple-touch-icon">

  <!-- preload-char -->
  <link rel="preload" href="{{ asset('assets/img/character/charIdle.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charPointingUp.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charLookUp.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charRight.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charLeft.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charEtalase.webp') }}" as="image">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link rel="preload" href="{{ asset('assets/font/font_web.ttf') }}" as="font" crossorigin="" type="font/otf"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  @include('layouts.nav')


  <main class="main">

@yield('homepage')
    

  </main>


  <footer id="footer" class="footer light-background">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Kiri: Logo -->
        <div class="footer-logo">
            <img src="{{ asset('assets/img/kawan/logo.png') }}" alt="Kawan Kopi">
            
        </div>

        <!-- Tengah: Deskripsi -->
        <div class="footer-description text-right">
            <p>
                We are not great multi-taskers. We only focus on two things: delicious high-quality product and hospitality. 
                We spend our time developing great quality of menu, lovingly brewing coffee for our beloved customers and helping you 
                for anything you need about our services. We are probably okay at a few other things but, really, we just live and 
                breathe high-quality of product. Oh, and we hope you feel it too.
            </p>
            <div class="footer-links">
                <a href="#">Terms & Conditions</a> | <a href="#">Privacy & Policy</a> 
                <span>© Est 2018 Kawan Kopi</span>
            </div>
        </div>

        <!-- Kanan: Media Sosial -->
        <div class="footer-social">
            <p>Connect with us:</p>
            <div class="social-links">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>