@extends('layouts.layout')

@section('homepage')

  <!-- hero Section -->
 
    <section id="hero" class="hero section flex justify-center">
      <img src="{{ asset('assets/img/character/charIdle.webp') }}" class="character" id="character" alt="character" />
      <img src="{{ asset('assets/img/hero/depan-hero.webp') }}" class="tableCashier" alt="Table Cashier" />
    </section>

  <!-- /hero Section -->

    <section id="lini-produk" class="lini-produk section">
      <div class="container section-title" data-aos="fade-up">
        <h1>Lini Produk</h1>
      </div>
    
      <div class="container d-flex flex-wrap justify-content-center align-items-start gap-5" data-aos="fade-up" data-aos-delay="100">
          
            <!-- Kiri: Carousel Produk -->
        <div class="product-carousel text-center">
          <button class="carousel-control prev">&lt;</button>
          <img src="{{ asset('assets/img/Menu/Kopi-Susu-Kawan/KSK-Baru.jpg')}}" class="img-fluid" alt="KSK Baru">
          <button class="carousel-control next">&gt;</button>
          <p class="product-name">KSK Baru<br><strong>Rp 10.000</strong></p>
        </div>

        <!-- Kanan: Kategori dan Produk -->
        <div class="kategori-produk text-center">
          <div class="category-buttons">
            <button class="category">Black-White</button>
            <button class="category active">Kopi Susu Kawan dsadasdasda(KSK)</button>
            <button class="category">Chocolate, Tea & Matcha</button>
            <button class="category">Signature</button>
            <button class="category">Bottle</button>
            <button class="category">Food</button>
            <button class="category">ani ani</button>
          </div>

          <div class="product-list">
            <p>KSK Lama</p>
            <p class="active">KSK Baru</p>
            <p>KSK Keju</p>
            <p>KSK Roasted Almond</p>
          </div>          
        </div>
        
      </div>
      
    </section>

      
    <section id="merchandise1" class="merchandise section">
      <div class="container">
        <div class="row align-items-start justify-center">
    
          <!-- Kolom Kiri (sembunyiin di mobile) -->
          <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">
            <div>
              <h1 class="fw-bold mb-2 ">Merchandise</h1>
              <div class="shop-icons mb-3 flex gap-3">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia" class="h-8"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee" class="h-8"></a>
              </div>
            </div>
            <p class="text-justify mt-auto text-xl">
              Since its founding in the 80s, Studio Agatho has been the go-to company for various design needs.
              Its offerings range from graphic design and branding strategy to website development and video production.
            </p>
          </div>
    
          <!-- Kolom Kanan (responsif, mobile styled) -->
          <div class="col-lg-6 w-full flex flex-col text-center">
            <div class="flex flex-col items-center lg:hidden text-center mb-4 w-full  ">
              
                <h1 class="text-2xl font-bold mb-4">Merchandise</h1>
                <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full max-w-xs mx-auto rounded mb-4">
                <h2 class="text-xl font-semibold">Totebag</h2>
                <p class="text-lg font-bold text-[#8B5E3B] mb-3">IDR 125K</p>
                <button class="bg-black text-white text-sm font-medium px-5 py-2 rounded-full mb-6">Add to cart</button>
              
            </div>
    
            <!-- Grid for Desktop, Scrollable for Mobile -->
            <div class="hidden lg:grid grid-cols-3 gap-4 w-full">
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" alt="Tshirt" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Tshirt</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 125K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" alt="Hat" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Hat</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" alt="Tumbler 1" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Tumbler 1</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 150K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" alt="Tumbler 2" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Tumbler 2</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" alt="Reusable Cup" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Reusable Cup</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Totebag</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Totebag</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
              </div>
            </div>
    
            <!-- Produk item scrollable (mobile) -->
            <div class="lg:hidden overflow-x-auto pb-2 w-full">
              <div class="flex gap-3 w-max px-4">
                <div class="flex-shrink-0 w-24 text-center">
                  <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium">Tshirt</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 125K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center">
                  <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium">Hat</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center">
                  <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium">Tumbler 1</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 150K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center">
                  <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium">Tumbler 2</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center">
                  <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium">Reusable Cup</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </section>
    
    
    <section id="merchandise" class="merchandise section">
      <div class="container">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Teks dan Logo -->
            <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">
              <h1 class="fw-bold mb-2">Merchandise</h1>
              <div class="shop-icons mb-3">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
              </div>
              
              <div class="mt-60">
                <p class="text-justify mt-auto text-xl">
                  Since its founding in the 80s, Studio Agatho has
                  been the go-to company for various design
                  needs. Its offerings range from graphic design
                  and branding strategy to website development
                  and video production.
                </p>
              </div>
            </div>

            <div class="col-lg-6 hidden lg:grid grid-cols-3 gap-4 w-full h-[600px] overflow-y-auto pr-2">
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" alt="Tshirt" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Tshirt</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 125K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" alt="Hat" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Hat</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" alt="Tumbler 1" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Tumbler 1</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 150K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" alt="Tumbler 2" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Tumbler 2</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" alt="Reusable Cup" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Reusable Cup</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Totebag</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
              </div>
              <div class="merchandise-item text-center">
                <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">Totebag</h4>
                <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
              </div>

              <!-- Tombol Katalog Selengkapnya -->
              <div class="flex justify-center items-center col-span-3">
                <a href="#"
                  class="bg-white text-black font-bold uppercase text-xm px-6 py-3 rounded hover:bg-gray-100 transition">
                    Katalog Selengkapnya
                </a>
              </div>
            </div>
            {{-- desktop view end --}}

            {{-- Mobile view --}}
            <!-- Kolom: Judul -->
            <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
              <h1 class="fw-bold mb-2 text-center">Merchandise</h1>
              {{-- <div class="shop-icons mb-3">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
              </div> --}}

               <!-- Kolom Kanan: Produk -->
              <div class="col-lg-6">
                <div class="row g-4">
                  <div class="relative w-full max-w-sm mx-auto mt-5">
                  
                    <div>
                      <!-- Gambar Produk -->
                      <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Coffee Bag"
                        class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
                        <div class="text-center mt-2">
                          <h2 class="text-xl font-bold mb-0">Totebag</h2>
                          <p class="text-lg font-bold text-[#8B5E3B]">IDR 125K</p>
                          <button class="bg-black text-white text-sm font-medium px-5 py-2 rounded-full mb-6">Add to cart</button>
                        </div>
                    
                      <!-- Tombol Navigasi -->
                      <button class="absolute left-2 top-1/3 transform -translate-y-1/2 z-10">
                        <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                          viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                      </button>
                      <button class="absolute right-2 top-1/3 transform -translate-y-1/2 z-10">
                        <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                          viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                      </button>
                    </div>
                    
                  </div>

                </div>
              </div>
              {{-- kolom judul end --}}
            </div>
            
            <!-- Kolom Kanan: Produk -->
            <div class="lg:hidden overflow-x-auto">
              <div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" alt="Tshirt" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Tshirt</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 125K</p>
                </div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" alt="Hat" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Hat</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" alt="Tumbler 1" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Tumbler 1</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 150K</p>
                </div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" alt="Tumbler 2" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Tumbler 2</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" alt="Reusable Cup" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Reusable Cup</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Totebag</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
                </div>
                <div class="merchandise-item text-center">
                  <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
                  <h4 class="font-semibold">Totebag</h4>
                  <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
                </div>
              </div>
              
            </div>
            {{-- kolom end --}}
            {{-- mobile view end --}}
        </div>
      </div>
    </section>

    <section id="roastery" class="roastery section">
      <div class="container">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Teks dan Logo -->
            <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">

              <h1 class="fw-bold mb-2">Roastery</h1>
              <div class="shop-icons mb-3">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
              </div>
              
              <div class="mt-58">
                <h3 class="text-4xl font-bold mb-2">
                  <span class="fw-bold mb-2">Palintang</span> Honey
                </h3>
                <p class="text-justify mt-auto text-xl">
                  Since its founding in the 80s, Studio Agatho has
                  been the go-to company for various design
                  needs. Its offerings range from graphic design
                  and branding strategy to website development
                  and video production.
                </p>
              </div>
              
            </div>

            <!-- Kolom Kanan: Produk -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
              <div class="row g-4">

                <div class="relative w-full max-w-sm mx-auto">
                  <!-- Price & Weight Label -->
                  <div class="absolute top-2 left-10 bg-red-600 text-white text-lg font-bold px-3 py-1.5 rounded-full shadow">
                    IDR 150K
                  </div>
                  <div class="absolute top-2 right-10 bg-red-600 text-white text-lg font-bold px-3 py-1.5 rounded-full shadow">
                    200gr
                  </div>
                
                  <!-- Gambar Produk -->
                  <img src="{{ asset('assets/img/roastery/Palintang-Honey.jpg') }}" alt="Coffee Bag"
                    class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
                
                  <!-- Tombol Navigasi -->
                  <button class="absolute left-20 top-1/2 transform -translate-y-1/2 z-10">
                    <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                  </button>
                  <button class="absolute right-20 top-1/2 transform -translate-y-1/2 z-10">
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
              <div class="shop-icons mb-3">
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
                <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
              </div>

               <!-- Kolom Kanan: Produk -->
              <div class="col-lg-6">
                <div class="row g-4">

                  <div class="relative w-full max-w-sm mx-auto mt-5">
                    <!-- Price & Weight Label -->
                    <div class="absolute top-2 left-10 bg-red-600 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow">
                      IDR 150K
                    </div>
                    <div class="absolute top-2 right-10 bg-red-600 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow">
                      200gr
                    </div>
                  
                    <!-- Gambar Produk -->
                    <img src="{{ asset('assets/img/roastery/Palintang-Honey.jpg') }}" alt="Coffee Bag"
                      class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
                  
                    <!-- Tombol Navigasi -->
                    <button class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10">
                      <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10">
                      <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                    </button>
                  </div>

                </div>
              </div>
              {{-- kolom judul end --}}
              
              <!-- Kolom: text -->
              <div class="mt-10">
                <h3 class="text-4xl font-bold mb-2">
                  <span class="fw-bold mb-2">Palintang</span> Honey
                </h3>
                <p class="text-justify mt-auto text-xl">
                  Since its founding in the 80s, Studio Agatho has
                  been the go-to company for various design
                  needs. Its offerings range from graphic design
                  and branding strategy to website development
                  and video production.
                </p>
              </div>
              {{-- kolom text end --}}

            </div>
            {{-- mobile view end --}}
          
          
        </div>
      </div>
    </section>

    <section id="cerita-kawan" class="cerita relative h-auto transition-all duration-150 ease-in">
      <h1 class="fw-bold mb-2 ml-[7.5rem]">Cerita Kawan</h1>
  
      <div id="ceritaKawanScroll" class="relative bottom-[-1px] mt-10 flex h-[calc(100vh-272px)] w-fit min-w-full flex-shrink-0 overflow-x-auto overflow-y-hidden max-lg:w-fit lg:h-[calc(100vh-276px)]">
    
        <!-- Orang 1 -->
        <div class="relative group w-fit flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto" style="right:0%">
          <img alt="Anak Sepeda (ASEP) Vida Bekasi" 
            loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
            class="h-auto w-auto max-h-full flex-shrink-0 object-contain" 
            src="{{ asset('assets/img/Cerita-Kawan/Gilang-Dhafir.png') }}">
          
          <div class="absolute bottom-0 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap 
            border border-black bg-white px-4 py-2 text-lg font-bold transition-all duration-300 
            opacity-0 group-hover:opacity-100">
            Anak Sepeda (ASEP) Vida Bekasi
          </div>
        </div>
    
        <!-- Orang 2 -->
        <div class="relative group w-fit flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto" style="right:0%">
          <img alt="Mpip Damngood" 
            loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
            class="h-auto w-auto max-h-full flex-shrink-0 object-contain" 
            src="{{ asset('assets/img/Cerita-Kawan/Mpip-Damngood.png') }}">
          
          <div class="absolute bottom-0 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap 
            border border-black bg-white px-4 py-2 text-lg font-bold transition-all duration-300 
            opacity-0 group-hover:opacity-100">
            Mpip Damngood
          </div>
        </div>
    
        <!-- Orang 3 -->
        <div class="relative group w-fit flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto" style="right:0%">
          <img alt="Wajid Club Dangdut Racun" 
            loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
            class="h-auto w-auto max-h-full flex-shrink-0 object-contain" 
            src="{{ asset('assets/img/Cerita-Kawan/Wajid-Club-Dangdut-Racun.png') }}">
          
          <div class="absolute bottom-0 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap 
            border border-black bg-white px-4 py-2 text-lg font-bold transition-all duration-300 
            opacity-0 group-hover:opacity-100">
            Wajid Club Dangdut Racun
          </div>
        </div>
    
      </div>
    </section>
    
    

    <section id="berita-kawan" class="berita py-10 px-5 md:px-16">
      <div class="container mx-auto">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Judul dan foto -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">

              <h1 class="fw-bold mb-4">Berita Kawan</h1>
              <div class="relative">
                <img src="{{ asset('assets/img/berita-Kawan/1.jpg') }}" alt="Berita Kawan" class="rounded-lg w-full object-cover">
        
                <!-- Tombol Navigasi -->
                <div class="absolute bottom-50 left-1/2 transform -translate-x-1/2 flex gap-135">
                  <button class="bg-white p-2 rounded-full shadow-md">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                  </button>
                  <button class="bg-white p-2 rounded-full shadow-md">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
              </div>
              
            </div>

            <!-- Kolom Kanan: Produk -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
              <div class="row g-4">

                <div class="berita-text">
                  <h3 class="mb-2">RAW Club: Penanda Kebangkitan Skena Denim</h3>
                  
                  <p class="text-sm italic text-gray-500 mb-6">by Tonny Oscar<br>5th July 2024</p>
                  <p class="text-justify leading-relaxed mb-4">
                    Nio Nguan Lie, better known as Suyanto, started making es campur as a 17-year-old working for a relative in Pontianak.
                    And he never stopped. Half a century later, the mixed ice dessert remains the signature of his streetside stall,
                    Es Campur Ko Acia in Sawah Besar, Central Jakarta.
                  </p>
                  <p class="text-justify leading-relaxed">
                    ‘Ko Acia’ is what his customers call him, a nickname he adopted when he opened his stall in 1980.
                    Started as a simple wooden shack in an empty lot, the small shop is now part of a vibrant strip of street food finds
                    on Dwiwarna Raya Street, squeezed between a bakmi shop and an eatery serving rice and homestyle dishes.
                    But one thing remains unchanged: a solitary tree stands guard, offering shade to diners (from school kids to delivery couriers
                    and families around the block) who sit on the wooden benches eagerly digging into their cold bowls of es campur.
                  </p>
                </div>

              </div>
            </div>
            {{-- kolom end --}}
            {{-- desktop view end --}}

            {{-- Mobile view --}}

            {{-- Mobile view end --}}
        </div>
    
      </div>
    </section>
    
    <section id="find-us" class="find-us py-2 px-5 md:px-16">
      <div class="container mx-auto">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Judul dan foto -->
            <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">

              <h1 class="fw-bold mb-4">Find Us</h1>
              <div class="relative">
                <img src="{{ asset('assets/img/Find-Us/2.jpg') }}" alt="Find Us" class="mx-auto w-4/5 object-cover aspect-square rounded-xl">
        
                <!-- Tombol Navigasi -->
                <button class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
              </div>
              
            </div>

            <!-- Kolom Kanan: Produk -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
              <div class="row g-4">

                <div class="find-us-text">
                  <h3 class="mb-2">Kawan Kopi, Cimandiri</h3>
                  
                  <p class="text-lx"> Jl. Hayam Wuruk No.30, Citarum,<br>Bandung Wetan, Kota Bandung.</p>
                  <div class="find-us-shop-icons mb-3">
                    <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Gofood.png')}}" alt="Gofood"></a>
                    <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopeefood.png')}}" alt="Shopeefood"></a>
                    <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Grabfood.png')}}" alt="Grab"></a>
                  </div>
                </div>

              </div>
              <div class="mt-10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.88934725622!2d107.61735417456278!3d-6.903833993095498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e722a0e4a367%3A0xb315eb893bd7cbe5!2sKawan%20Kopi%2C%20Cimandiri!5e0!3m2!1sid!2sid!4v1745777048751!5m2!1sid!2sid" 
                  width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
            {{-- kolom end --}}
            {{-- desktop view end --}}

            {{-- Mobile view --}}
            <div class="col-lg-6 lg:hidden flex flex-col justify-between w-full">

              <!-- Judul -->
              <h1 class="fw-bold mb-8 text-center text-3xl">Find Us</h1>

              <!-- Grid Foto Lokasi -->
              <div class="grid grid-cols-2 gap-4 px-4">

                <!-- Lokasi 1 -->
                <div class="text-center">
                  <img src="{{ asset('assets/img/Find-Us/1.jpg') }}" alt="Kawan Kopi, Dipatiukur" class="w-full h-auto object-cover rounded mb-2">
                  <p class="text-sm font-medium">Kawan Kopi, Dipatiukur</p>
                </div>

                <!-- Lokasi 2 -->
                <div class="text-center">
                  <img src="{{ asset('assets/img/Find-Us/2.jpg') }}" alt="Kawan Kopi, Cimandiri" class="w-full h-auto object-cover rounded mb-2">
                  <p class="text-sm font-medium">Kawan Kopi, Cimandiri</p>
                </div>

                <!-- Lokasi 3 -->
                <div class="text-center">
                  <img src="{{ asset('assets/img/Find-Us/3.jpg') }}" alt="Kawan Kopi, Talaga Bodas" class="w-full h-auto object-cover rounded mb-2">
                  <p class="text-sm font-medium">Kawan Kopi, Talaga Bodas</p>
                </div>

                <!-- Lokasi 4 -->
                <div class="text-center">
                  <img src="{{ asset('assets/img/Find-Us/4.jpg') }}" alt="Kawan Kopi, Ciumbuleuit" class="w-full h-auto object-cover rounded mb-2">
                  <p class="text-sm font-medium">Kawan Kopi, Ciumbuleuit</p>
                </div>

              </div>

            </div>
            {{-- Mobile view end --}}

        </div>
    
      </div>
    </section>

@endsection