<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kawan Kopi</title>
  <meta name="description" content="Kawan Kopi - Coffee Experience">
  <meta name="keywords" content="Coffee, Cafe, Kawan Kopi">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('assets/img/kawan/logo.png') }}">
  {{-- <link rel="icon" href="{{ asset('assets/img/kawan/logo.png') }}" type="image/png" media="(prefers-color-scheme: light)">
  <link rel="icon" href="{{ asset('assets/img/kawan/logo-white.png') }}" type="image/png" media="(prefers-color-scheme: dark)"> --}}
  <link rel="apple-touch-icon" href="{{ asset('assets/img/kawan/logo.png') }}">

  <!-- preload-char -->
  <link rel="preload" href="{{ asset('assets/img/character/charIdle.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charPointingUp.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charLookUp.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charRight.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charLeft.webp') }}" as="image">
  <link rel="preload" href="{{ asset('assets/img/character/charEtalase.webp') }}" as="image">


  <!-- Fonts -->
  {{-- <link href="https://fonts.googleapis.com" rel="preconnect"> --}}
  {{-- <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> --}}
  <link rel="preload" href="{{ asset('assets/font/font_web.ttf') }}" as="font" crossorigin="" type="font/otf"/>
  {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}

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

  @include('layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  
  <!-- Idle Overlay -->
  <div id="idleOverlay" class="hidden fixed inset-0 z-[99999] bg-black text-white flex flex-col items-center justify-center text-center px-4">
    <img src="{{ asset('assets/img/kawan/logo-white.png') }}" alt="Logo" class="mb-4 w-24" />
    <p class="text-lm max-w-md mb-8">
      Karena kamu sedang tidak aktif, tampilan ini muncul untuk bantu kurangi penggunaan energi.
      <br><br>
      Klik atau sentuh layar untuk lanjut menjelajah.
    </p>
  </div>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    let idleTimeout;
    const idleDelay = 3 * 60 * 1000; // 2 menit
    const overlay = document.getElementById("idleOverlay");

    function showIdleOverlay() {
      overlay.classList.remove("hidden");
    }

    function hideIdleOverlay() {
      overlay.classList.add("hidden");
      startIdleTimer(); // restart timer setelah ditutup
    }

    function startIdleTimer() {
      clearTimeout(idleTimeout);
      idleTimeout = setTimeout(() => {
        showIdleOverlay();
      }, idleDelay);
    }

    // Event reset hanya untuk event aktif normal (tanpa klik/tap)
    ['mousemove', 'keydown', 'scroll'].forEach(event => {
      document.addEventListener(event, () => {
        // Hanya reset timer kalau overlay belum muncul
        if (overlay.classList.contains("hidden")) {
          startIdleTimer();
        }
      });
    });

    // Hanya event click yang bisa menutup overlay
    overlay.addEventListener("click", () => {
      hideIdleOverlay();
    });

    // Mulai pertama kali
    startIdleTimer();

  </script>


</body>

</html>