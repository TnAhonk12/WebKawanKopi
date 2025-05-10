@extends('layouts.layout')
@section('homepage')
<!-- Roastery Section -->
<section id="roastery" class="roastery relative h-auto transition-all duration-150 ease-in">
  <div class="container mx-auto">
    <div class="row align-items-start mx-auto" style="margin-block: 4rem;">
      
      {{-- desktop view --}}
        <!-- Kolom Kiri: Teks dan Logo -->
        <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">

          <h1 class="fw-bold mb-2">Roastery</h1>
          <p class="text-black italic">Single Origin</p>
          <div class="shop-icons mb-3">
            <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
            <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
          </div>
          
          <div class="mt-50">
            <h3 id="roasteryNameDesktop" class="text-4xl font-bold mb-2">
              {{-- <span class="fw-bold mb-2">Palintang</span> Honey --}}
            </h3>
            <p id="roasteryDescDesktop" class="text-justify mt-auto text-xl">
              {{-- Since its founding in the 80s, Studio Agatho has
              been the go-to company for various design
              needs. Its offerings range from graphic design
              and branding strategy to website development
              and video production. --}}
            </p>
          </div>
          
        </div>

        <!-- Kolom Kanan: Produk -->
        <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
          <div class="row g-4">

            <div class="relative w-full max-w-sm mx-auto">
              <!-- Price & Weight Label -->
              <div class="absolute top-2 left-10 bg-red-600 text-white text-lg font-bold px-3 py-1.5 rounded-full shadow">
                {{-- IDR 150K --}}
                <span id="roasteryPriceDesktop"></span>
              </div>
              <div class="absolute top-2 right-10 bg-red-600 text-white text-lg font-bold px-3 py-1.5 rounded-full shadow">
                {{-- 200gr --}}
                <span id="roasteryWeightDesktop"></span>
              </div>
            
              <!-- Gambar Produk -->
              <img id="roasteryImageDesktop" alt="Coffee Bag"
                class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
            
              <!-- Tombol Navigasi -->
              <button onclick="prevRoasteryProduct()" class="absolute left-20 top-1/2 transform -translate-y-1/2 z-10">
                <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
              </button>
              <button onclick="nextRoasteryProduct()" class="absolute right-20 top-1/2 transform -translate-y-1/2 z-10">
                <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
              </button>
            </div>

          </div>
        </div>
        {{-- kolom end --}}
        {{-- desktop view end --}}

        {{-- mobile view --}}
        <!-- Kolom: Judul -->
        <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
          <h1 class="fw-bold mb-2 text-center">Roastery</h1>
          <p class="text-black italic text-center">Single Origin</p>
          

            <!-- Kolom: Produk -->
          <div class="col-lg-6">
            <div class="row g-4">

              <div class="relative w-full max-w-sm mx-auto mt-5">
                <!-- Price & Weight Label -->
                <div class="absolute top-2 left-10 bg-red-600 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow">
                  {{-- IDR 150K --}}
                  <span id="roasteryPriceMobile"></span>
                </div>
                <div class="absolute top-2 right-10 bg-red-600 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow">
                  {{-- 200gr --}}
                  <span id="roasteryWeightMobile"></span>
                </div>
              
                <!-- Gambar Produk -->
                <img id="roasteryImageMobile" alt="Coffee Bag"
                  class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
              
                <!-- Tombol Navigasi -->
                <button onclick="prevRoasteryProduct()" class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button onclick="nextRoasteryProduct()"  class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
              </div>

              <div class="shop-icons mb-3 justify-center">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
              </div>

            </div>
          </div>
          {{-- kolom Produk end --}}
          
          <!-- Kolom: text -->
          <div class="mt-2">
            <h3 id="roasteryNameMobile" class="text-4xl font-bold mb-2">
              {{-- <span class="fw-bold mb-2">Palintang</span> Honey --}}
            </h3>
            <p id="roasteryDescMobile" class="text-justify mt-auto text-xl">
              {{-- Since its founding in the 80s, Studio Agatho has
              been the go-to company for various design
              needs. Its offerings range from graphic design
              and branding strategy to website development
              and video production. --}}
            </p>
          </div>
          {{-- kolom text end --}}

        </div>
        {{-- mobile view end --}}
    </div>
  </div>
</section>
<!-- Roastery Section End -->

<script>
  // Roastery
  const roasteryProducts = [
    {
      name: "Palintang Honey",
      image: "assets/img/roastery/Palintang-Honey.jpg",
      price: "IDR 150K",
      weight: "200gr",
      desc: "Since its founding in the 80s, Studio Agatho has been the go-to company for various design needs. Its offerings range from graphic design and branding strategy to website development and video production."
    },
    {
      name: "Bajawa Semi-Washed",
      image: "assets/img/roastery/Bajawa-Semi-Washed.jpg",
      price: "IDR 140K",
      weight: "300gr",
      desc: "Bajawa brings a balance of brightness and body to your cup, offering a harmonious flavor profile that reflects the rich volcanic soil and cool highland climate of Flores. With every sip, you'll experience delicate acidity balanced with smooth chocolate undertones and a hint of spice — a comforting cup that lingers warmly and invites another pour."
    },
    {
      name: "Kintamani Natural",
      image: "assets/img/roastery/Kintanami-Natural.jpg",
      price: "IDR 160K",
      weight: "450gr",
      desc: "Kintamani coffee with fruity and floral tones offers a refreshing sensory experience inspired by the lush highlands of Bali. Grown in volcanic soil with a unique climate, each bean carries bright citrus acidity, sweet berry notes, and delicate floral aromas. This natural-processed coffee finishes with a clean, crisp mouthfeel — a perfect companion for those seeking a vibrant and uplifting brew."
    }
  ];

  let currentRoasteryIndex = 0;

  function renderRoasteryProduct(index) {
    const productRoastery = roasteryProducts[index];
    if (productRoastery) {
      // bagian Desktop
      document.getElementById("roasteryImageDesktop").src = productRoastery.image;
      document.getElementById("roasteryNameDesktop").innerHTML = styleRoasteryName(productRoastery.name);
      document.getElementById("roasteryPriceDesktop").innerText = productRoastery.price;
      document.getElementById("roasteryWeightDesktop").innerText = productRoastery.weight;
      document.getElementById("roasteryDescDesktop").innerText = productRoastery.desc;
      // bagian Mobile
      document.getElementById("roasteryImageMobile").src = productRoastery.image;
      document.getElementById("roasteryNameMobile").innerHTML = styleRoasteryName(productRoastery.name);
      document.getElementById("roasteryPriceMobile").innerText = productRoastery.price;
      document.getElementById("roasteryWeightMobile").innerText = productRoastery.weight;
      document.getElementById("roasteryDescMobile").innerText = productRoastery.desc;
    }
  }

  function nextRoasteryProduct() {
    currentRoasteryIndex = (currentRoasteryIndex + 1) % roasteryProducts.length;
    renderRoasteryProduct(currentRoasteryIndex);
  }

  function prevRoasteryProduct() {
    currentRoasteryIndex = (currentRoasteryIndex - 1 + roasteryProducts.length) % roasteryProducts.length;
    renderRoasteryProduct(currentRoasteryIndex);
  }

  function styleRoasteryName(name) {
    const [first, ...rest] = name.split(' ');
    return `<span class="fw-bold mb-2">${first}</span> ${rest.join(' ')}`;
  }

  document.addEventListener("DOMContentLoaded", () => {
    renderRoasteryProduct(currentRoasteryIndex);
  });
</script>

@endsection
