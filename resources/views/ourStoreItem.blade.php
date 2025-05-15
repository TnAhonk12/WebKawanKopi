@extends('layouts.layout')
@section('homepage')
<!-- Find Us Section -->
<section id="find-us" class="find-us relative h-auto transition-all duration-150 ease-in">
  <div class="container mx-auto">
    <div class="row align-items-start mx-auto">
      
      {{-- desktop view --}}
        <!-- Kolom Kiri: Judul dan foto -->
        <div class="col-lg-12 mt-4 hidden lg:flex flex-col justify-between h-full">
          <h1 class="fw-bold mb-2">Find Us</h1>
          <p class="text-black italic">Our Store</p>
        </div>
        <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">
          <div class="find-us-item">
            <div class="relative overflow-hidden w-full max-w-[505px] mx-auto rounded-xl">
              <div id="findUsSlider" class="flex transition-transform duration-500 ease-in-out">
                @php
                  $images = array_merge([$findUs['foto']], $findUs['photos'] ?? []);
                @endphp
                @foreach ($images as $index => $img)
                  <img src="{{ $img }}" alt="Foto Toko {{ $index + 1 }}" class="w-full flex-shrink-0 object-cover aspect-square" />
                @endforeach
              </div>
              <!-- Indicators -->
              <div id="findUsIndicators" class="absolute -translate-y-6 left-1/2 -translate-x-1/2 flex gap-2">
                @foreach ($images as $index => $img)
                  <span data-index="{{ $index }}" class="w-3 h-3 bg-black rounded-full opacity-50 cursor-pointer"></span>
                @endforeach
              </div>
            </div>
          </div>
          <div class="find-us-item">
            <div class="flex justify-center items-center col-span-3 mt-4">
              <a href="/ourstore"
                class="bg-white text-black font-bold  text-xm px-6 py-3 rounded shadow-md hover:bg-gray transition">
                  Lihat Semua Toko
              </a>
            </div>
          </div>
          
        </div>

        <!-- Kolom Kanan: Produk -->
        <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
          <div class="row">

            <div class="find-us-text">
              <h3 id="findNameDesktop" class="mb-2">
                {{-- Kawan Kopi, Cimandiri --}}
              </h3>
              
              <p id="findAddressDesktop" class="text-lx max-w-[350px]"> 
                {{-- Jl. Hayam Wuruk No.30, Citarum,
                <br>
                Bandung Wetan, Kota Bandung. --}}
              </p>
              <div id="shopIconsDesktop" class="find-us-shop-icons mb-3">
                {{-- <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Gofood.png')}}" alt="Gofood"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopeefood.png')}}" alt="Shopeefood"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Grabfood.png')}}" alt="Grab"></a> --}}
              </div>
            </div>

            <div id="findMapsDesktop" class="!mt-[1.2rem]">

              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.88934725622!2d107.61735417456278!3d-6.903833993095498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e722a0e4a367%3A0xb315eb893bd7cbe5!2sKawan%20Kopi%2C%20Cimandiri!5e0!3m2!1sid!2sid!4v1745777048751!5m2!1sid!2sid" 
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe> --}}
            </div>
          </div>
        </div>
        {{-- kolom end --}}
        {{-- desktop view end --}}

        {{-- mobile view --}}
        <!-- Kolom: Judul -->
        <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
          <h1 class="fw-bold mb-2 text-center">Find Us</h1>
          <p class="text-black italic text-center">Our Store</p>
          

            <!-- Kolom: Gambar Toko -->
          <div class="col-lg-6">
            <div class="row g-4">

              <!-- Wrapper Carousel Mobile -->
              <div class="relative overflow-hidden w-full mx-auto rounded-xl">
                <div id="findMobileSlider" class="flex transition-transform duration-500 ease-in-out">
                  @foreach ($images as $index => $img)
                    <img src="{{ $img }}" alt="Foto Toko {{ $index + 1 }}" class="w-full flex-shrink-0 object-cover aspect-square" />
                  @endforeach
                </div>
                <!-- Indicators -->
                <div id="findMobileIndicators" class="absolute -translate-y-6 left-1/2 -translate-x-1/2 flex gap-2">
                  @foreach ($images as $index => $img)
                    <span data-index="{{ $index }}" class="w-3 h-3 bg-black rounded-full opacity-50 cursor-pointer"></span>
                  @endforeach
                </div>
              </div>

            </div>
          </div>
          {{-- kolom Toko end --}}
          
          <!-- Kolom: text -->
          <div class="mt-4 text-center">
            <h3 id="findNameMobile" class="text-xl font-bold mb-1"></h3>
            <p id="findAddressMobile" class="text-base text-gray-700 mb-3"></p>
          </div>

          <!-- Tombol E-Com -->
          <div id="shopIconsMobile" class="find-us-shop-icons mb-3 justify-center">
          </div>
          
          <!-- GMAPS -->
          <!-- Wrapper supaya kontainer center -->
          <div class="w-full flex justify-center">
            <div id="findMapsMobile" class="mt-4 w-[350px] h-[300px] flex items-center justify-center overflow-hidden">
              <!-- iframe dari JS akan masuk di sini -->
            </div>
          </div>

          <!-- Tombol "Lihat Semua" -->
          <div class="justify-center text-center mt-6">
            <a href="/ourstore"
              class="bg-black text-white font-bold text-sm px-6 py-2 rounded shadow-md hover:bg-gray-800 transition">
              Lihat Semua Toko
            </a>
          </div>
          
          {{-- kolom text end --}}

        </div>
        {{-- mobile view end --}}

    </div>

  </div>
</section>
  <!-- Find Us Section End -->

  <script>
    //animasi item
    window.addEventListener('DOMContentLoaded', () => {
      const items = document.querySelectorAll('.find-us-item');
      items.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('animate-in');
        }, index * 150); // delay per item biar animasinya berurutan
      });
    });

    const findUs = @json($findUs);

    function renderFind(find) {
      if (!find) return;

      // Desktop
      document.getElementById("findNameDesktop").innerText = find.nama_tempat;
      document.getElementById("findAddressDesktop").innerHTML = find.address || "-";
      document.getElementById("findMapsDesktop").innerHTML = find.maps;

      const shopIconsDesktop = document.getElementById("shopIconsDesktop");
      shopIconsDesktop.innerHTML = "";
      if (find.gofood) shopIconsDesktop.innerHTML += `<a href="${find.gofood}" target="_blank"><img src="{{ asset('assets/img/ecommerce/Logo_Gofood.png') }}" alt="Gofood"></a>`;
      if (find.shopee) shopIconsDesktop.innerHTML += `<a href="${find.shopee}" target="_blank"><img src="{{ asset('assets/img/ecommerce/Logo_Shopeefood.png') }}" alt="Shopeefood"></a>`;
      if (find.grab) shopIconsDesktop.innerHTML += `<a href="${find.grab}" target="_blank"><img src="{{ asset('assets/img/ecommerce/Logo_Grabfood.png') }}" alt="Grabfood"></a>`;

      // Mobile
      document.getElementById("findNameMobile").innerText = find.nama_tempat;
      document.getElementById("findAddressMobile").innerHTML = find.address || "-";
      document.getElementById("findMapsMobile").innerHTML = find.maps;

      const shopIconsMobile = document.getElementById("shopIconsMobile");
      shopIconsMobile.innerHTML = "";
      if (find.gofood) shopIconsMobile.innerHTML += `<a href="${find.gofood}" target="_blank"><img src="{{ asset('assets/img/ecommerce/Logo_Gofood.png') }}" class="h-6" alt="Gofood"></a>`;
      if (find.shopee) shopIconsMobile.innerHTML += `<a href="${find.shopee}" target="_blank"><img src="{{ asset('assets/img/ecommerce/Logo_Shopeefood.png') }}" class="h-6" alt="Shopeefood"></a>`;
      if (find.grab) shopIconsMobile.innerHTML += `<a href="${find.grab}" target="_blank"><img src="{{ asset('assets/img/ecommerce/Logo_Grabfood.png') }}" class="h-6" alt="Grabfood"></a>`;
    }


    document.addEventListener("DOMContentLoaded", function () {
      const slider = document.getElementById("findUsSlider");
      const indicators = document.querySelectorAll("#findUsIndicators span");
      const totalSlides = slider.children.length;
      let currentIndex = 0;

      function updateSlider(index) {
        slider.style.transform = `translateX(-${index * 100}%)`;
        indicators.forEach((dot, i) => {
          dot.classList.toggle("opacity-100", i === index);
          dot.classList.toggle("opacity-50", i !== index);
        });
      }

      indicators.forEach(dot => {
        dot.addEventListener("click", () => {
          currentIndex = parseInt(dot.dataset.index);
          updateSlider(currentIndex);
        });
      });

      // Auto Slide (optional)
      setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider(currentIndex);
      }, 5000);

      // Initial
      updateSlider(currentIndex);
    });

    document.addEventListener("DOMContentLoaded", () => {
      renderFind(findUs);
    });

    document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("findMobileSlider");
    const indicators = document.querySelectorAll("#findMobileIndicators span");
    const totalSlides = slider.children.length;
    let currentIndex = 0;

    function updateSlider(index) {
      const slideWidth = slider.offsetWidth;
      slider.style.transform = `translateX(-${index * slideWidth}px)`;
      indicators.forEach((dot, i) => {
        dot.classList.toggle("opacity-100", i === index);
        dot.classList.toggle("opacity-50", i !== index);
      });
    }


    indicators.forEach(dot => {
      dot.addEventListener("click", () => {
        currentIndex = parseInt(dot.dataset.index);
        updateSlider(currentIndex);
      });
    });

    // Auto Slide (opsional)
    setInterval(() => {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlider(currentIndex);
    }, 5000);

    updateSlider(currentIndex);
  });
  </script>
  

@endsection