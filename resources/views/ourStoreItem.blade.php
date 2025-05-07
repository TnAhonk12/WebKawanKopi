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

          <div class="relative find-us-item">
            <img 
                  {{-- src="{{ asset('assets/img/Find-Us/2.jpg') }}"  --}}
                  id="findImageDesktop"
                  alt="Find Us" 
                  class="mx-auto w-4/5 object-cover aspect-square rounded-xl"
            >
            <!-- Tombol Navigasi -->
            <button onclick="prevFind()" class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10">
              <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button onclick="nextFind()" class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10">
              <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            </button>
            <div class="flex justify-center items-center col-span-3 mt-4">
              <a href="/find-us"
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
              
              <p id="findAddressDesktop" class="text-lx"> 
                {{-- Jl. Hayam Wuruk No.30, Citarum,
                <br>
                Bandung Wetan, Kota Bandung. --}}
              </p>
              <div class="find-us-shop-icons mb-3">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Gofood.png')}}" alt="Gofood"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopeefood.png')}}" alt="Shopeefood"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Grabfood.png')}}" alt="Grab"></a>
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

        {{-- Mobile view --}}
          <!-- Kolom: Judul -->
          <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
            <h1 class="fw-bold mb-1 text-center">Find Us</h1>
            <p class="text-center text-gray-600 italic mb-6">Our Store</p>
            {{-- <div class="shop-icons mb-3">
              <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
              <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
            </div> --}}

              <!-- Kolom Atas: 1 Produk -->
            <div class="col-lg-6">
              <div class="row g-4 mx-auto">
                <div class="relative w-full max-w-sm mx-auto mt-5">
                
                  <div>
                    <!-- Gambar Produk -->
                    <img id="findImageMobile" src="" alt="Find Us"
                      class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
          
                    <!-- Tombol Navigasi -->
                    <button onclick="prevFind()" class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10">
                      <svg class="w-10 h-10 text-black rounded-full" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                      </svg>
                    </button>
                    <button onclick="nextFind()" class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10">
                      <svg class="w-10 h-10 text-black rounded-full" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </button>
                  </div>
                  
                </div>

              </div>
            </div>
            {{-- kolom judul end --}}
            <!-- Kolom Bawah: Find Us -->
           <!-- Info Lokasi -->
           <div class="text-center mt-4">
            <h3 id="findNameMobile" class="text-xl font-bold mb-1"></h3>
            <p id="findAddressMobile" class="text-base text-gray-700 mb-3"></p>

            {{-- icon e-commerce --}}
            <div class="find-us-shop-icons mb-3 justify-center gap-3">
              <a href="#"><img src="{{ asset('assets/img/ecommerce/Logo_Gofood.png') }}" alt="Gofood" class="h-6"></a>
              <a href="#"><img src="{{ asset('assets/img/ecommerce/Logo_Shopeefood.png') }}" alt="Shopeefood" class="h-6"></a>
              <a href="#"><img src="{{ asset('assets/img/ecommerce/Logo_Grabfood.png') }}" alt="Grab" class="h-6"></a>
            </div>
            
            <div id="findMapsMobile" class="mt-4 flex justify-center w-full">
              <div class="w-full max-w-[400px]">
                <!-- iframe dari JS akan masuk di sini -->
              </div>
            </div>

            <!-- Tombol "Lihat Semua" -->
            <div class="justify-center mt-6">
              <a href="/ourstore"
                class="bg-black text-white font-bold text-sm px-6 py-2 rounded shadow-md hover:bg-gray-800 transition">
                Lihat Semua Toko
              </a>
            </div>
          </div>
          
          {{-- kolom end --}}
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

    //find us
    const findUs = [
      {
        name: "Kawan Kopi, Cimandiri",
        image: "assets/img/Find-Us/2.jpg",
        address: "Jl. Hayam Wuruk No.30, Citarum,\nBandung Wetan, Kota Bandung.",
        maps: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.88934725622!2d107.61735417456278!3d-6.903833993095498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e722a0e4a367%3A0xb315eb893bd7cbe5!2sKawan%20Kopi%2C%20Cimandiri!5e0!3m2!1sid!2sid!4v1745777048751!5m2!1sid!2sid" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
      },
      {
        name: "Kawan Kopi, Talaga Bodas",
        image: "assets/img/Find-Us/3.jpg",
        address: "Jl. Talaga Bodas No.16, Malabar,\nKec. Lengkong, Kota Bandung.",
        maps: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6850306275214!2d107.61808357456303!3d-6.928200593071582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e98b8524c319%3A0x344d4fb45fbb3afa!2sKawan%20Kopi%2C%20Talaga%20Bodas!5e0!3m2!1sid!2sid!4v1746228258492!5m2!1sid!2sid" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
      },
      {
        name: "Kawan Kopi, Ciumbuleuit",
        image: "assets/img/Find-Us/4.jpg",
        address: "Jl. Ciumbuleuit No.177, Ciumbuleuit,\nKec. Cidadap, Kota Bandung.",
        maps: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.163935805223!2d107.60283157456257!3d-6.8709513931277275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73428259db3%3A0x168e6b650f761523!2sKawan%20Kopi%2C%20Ciumbuleuit!5e0!3m2!1sid!2sid!4v1746228281839!5m2!1sid!2sid" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
      }
    ];


    let currentFindIndex = 0;

    function renderFind(index) {
      const find = findUs[index];
      if (find) {
        // bagian Desktop
        document.getElementById("findImageDesktop").src = find.image;
        document.getElementById("findNameDesktop").innerText = find.name;
        document.getElementById("findAddressDesktop").innerHTML = find.address.replace(/\n/g, "<br>");
        document.getElementById("findMapsDesktop").innerHTML = find.maps;
        // bagian Mobile
        document.getElementById("findImageMobile").src = find.image;
        document.getElementById("findNameMobile").innerText = find.name;
        document.getElementById("findAddressMobile").innerHTML = find.address.replace(/\n/g, "<br>");
        document.getElementById("findMapsMobile").innerHTML = find.maps;
      }
    }

    function nextFind() {
      currentFindIndex = (currentFindIndex + 1) % findUs.length;
      renderFind(currentFindIndex);
    }

    function prevFind() {
      currentFindIndex = (currentFindIndex - 1 + findUs.length) % findUs.length;
      renderFind(currentFindIndex);
    }

    document.addEventListener("DOMContentLoaded", () => {
      renderFind(currentFindIndex);
    });
  </script>
  

@endsection