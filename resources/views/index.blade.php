@extends('layouts.layout')

@section('homepage')

  <!-- hero Section -->
 
    <section id="hero" class="hero section flex justify-center">
      <img src="{{ asset('assets/img/character/charIdle.webp') }}" class="character" id="character" alt="character" />
      <img src="{{ asset('assets/img/hero/depan-hero.webp') }}" class="tableCashier" alt="Table Cashier" />
    </section>

  <!-- hero Section end -->



  <!-- Lini Produk Section -->
  <section id="lini-produk" class="lini-produk section h-auto transition-all duration-150 ease-in">
    <div class="container">
      <div class="row align-items-start">
        
        {{-- desktop view --}}
          <!-- Kolom Kiri: Harga dan Makanan -->
          <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">
            <h1 class="fw-bold mb-3">Lini Produk</h1>
          
            <div class="relative w-7/10 aspect-square mt-[2rem] mx-auto">
              <!-- Gambar Produk -->
              <img src="{{ asset('assets/img/Lini-Produk.jpg') }}" alt="KSK-Baru"
                class="w-auto h-auto object-cover rounded-xl" />
          
              <!-- Tombol Navigasi -->
              {{-- <div class="absolute inset-1 flex justify-between items-center px-1">
                <!-- Tombol Kiri -->
                <button class="absolute left-2 top-auto transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="absolute right-2 top-auto transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
              </div> --}}
              <!-- Nama Produk dan Harga DI LUAR GAMBAR -->
              <div class="mt-4 text-center">
                {{-- <p class="text-xl font-bold mb-0 text-[#8B5E3B]">KSK Baru</p>
                <p class="text-lg font-semibold">Rp 10.000</p> --}}
              </div>
            </div>
          
          </div>
          
          <!-- Kolom Kanan: Kategori dan Daftar Menu -->
          <div class="col-lg-6 hidden lg:flex flex-col w-full h-[600px] overflow-hidden pr-2">

            <div class="mt-[6.8rem]">

              <!-- Bagian Atas: Kategori Produk -->
              <div class="grid grid-cols-3 gap-4 overflow-y-auto h-[250px] pb-2">
                <button class="category">Black-White</button>
                <button class="category">Kopi Susu Kawan (KSK)</button>
                <button class="category">Chocolate, Tea & Matcha</button>
                <button class="category">Kawan Signature</button>
                <button class="category">Bottle</button>
                <button class="category">Food</button>
                <button class="category">Kawan Frappe</button>
                <button class="category">Main Course</button>
                <!-- tambah lagi kalau ada kategori baru -->
              </div>

              <!-- Divider -->
              <div class="my-4 border-t border-gray-300"></div>

              <!-- Bagian Bawah: List Menu -->
              {{-- <div class="grid grid-cols-2 gap-4 overflow-y-auto h-[200px] pb-2">
                
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Lama</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Roasted Almond</button>
                
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Baru</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">Signature Blend</button>

                <!-- tinggal tambah item lagi di bawah -->
              </div> --}}

              <!-- Bagian Bawah: List Menu -->
              <div class="grid grid-cols-2 gap-4 overflow-y-auto h-[300px] pb-2">
                <div class="flex flex-col gap-4">
                  
                  <!-- tambah varian kiri -->
                </div>
                <div class="flex flex-col gap-4">
                  
                  <!-- tambah varian kanan -->
                </div>
              </div>
            </div>


          </div>

          {{-- desktop view end --}}

          {{-- Mobile view --}}
          <!-- Kolom: Judul -->
          <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
            <h1 class="fw-bold mb-2 text-center">Lini Produk</h1>
              <!-- Kolom atas: Produk -->
            <div class="col-lg-6">
              <div class="row g-4">
                <div class="relative w-full max-w-sm mx-auto mt-5">
                
                  <div>
                    <!-- Gambar Produk -->
                    <img src="{{ asset('assets/img/Menu/Kopi-Susu-Kawan/KSK-Baru.jpg') }}" alt="KSK-Baru"
                      class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
                      <div class="text-center mt-2">
                        {{-- <p class="text-xl font-bold mb-0 text-[#8B5E3B]">KSK Baru</p>
                        <p class="text-lg font-bold">Rp 10.000</p> --}}
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
          
          <!-- Kolom bawah: Produk -->
          <div class="lg:hidden overflow-x-auto">
            <div class="grid grid-cols-3 gap-4 overflow-y-auto h-[200px] pb-2">
              <button class="category active">Black-White</button>
              <button class="category">Kopi Susu Kawan (KSK)</button>
              <button class="category">Chocolate, Tea & Matcha</button>
              <button class="category">Signature</button>
              <button class="category">Bottle</button>
              <button class="category">Food</button>
              <!-- tambah lagi kalau ada kategori baru -->
            </div>

            <!-- Divider -->
            <div class="my-4 border-t border-gray-300"></div>
            <!-- Bagian Bawah: List Menu -->
            <div class="grid grid-cols-2 gap-4 overflow-y-auto h-[200px] pb-2">
              <div class="flex flex-col gap-4">
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Lama</button>
                <button class="text-left font-bold text-[#8B5E3B] hover:opacity-70 transition border-b border-[#8B5E3B] pb-2">KSK Baru</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Keju</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Keju</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Keju</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Keju</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Keju</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Keju</button>
                <!-- tambah varian kiri -->
              </div>
              <div class="flex flex-col gap-4">
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Roasted Almond</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Roasted Almond</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Roasted Almond</button>
                <button class="text-left font-bold hover:opacity-70 transition border-b border-black pb-2">KSK Roasted Almond</button>
                <!-- tambah varian kanan -->
              </div>
            </div>
          </div>
          {{-- kolom end --}}
          {{-- mobile view end --}}
      </div>
    </div>
  </section>
  <!-- Lini Produk Section end -->


  <!-- Promo Banner Section -->
  <section id="promo-banner" class="promo-banner section-promo w-full flex justify-center bg-white py-6 px-4">
    <div class="relative w-full max-w-[1200px] max-h-[500px] overflow-hidden rounded-xl">
      <div id="promoSlider" class="flex h-full transition-transform duration-1000 ease-in-out">
        <img src="{{ asset('assets/img/Promo/1.png') }}" alt="Promo 1" class="w-full h-full object-cover flex-shrink-0">
        <img src="{{ asset('assets/img/Promo/2.png') }}" alt="Promo 2" class="w-full h-full object-cover flex-shrink-0">
        <img src="{{ asset('assets/img/Promo/3.png') }}" alt="Promo 3" class="w-full h-full object-cover flex-shrink-0">
        <img src="{{ asset('assets/img/Promo/4.png') }}" alt="Promo 4" class="w-full h-full object-cover flex-shrink-0">

    <!-- Promo Banner Section -->
    {{-- <section id="promo-banner" class="relative w-full overflow-hidden bg-white h-[200px] md:h-[250px] lg:h-[300px]">
      <div id="promoSlider" class="flex transition-transform duration-1000 ease-in-out h-full">
        <img src="{{ asset('assets/img/Promo/1.png') }}" class="w-full h-full object-cover flex-shrink-0" alt="Promo 1">
        <img src="{{ asset('assets/img/Promo/2.png') }}" class="w-full h-full object-cover flex-shrink-0" alt="Promo 2">
        <img src="{{ asset('assets/img/Promo/3.png') }}" class="w-full h-full object-cover flex-shrink-0" alt="Promo 3"> --}}

      </div>
    </div>
    </section>
    <!-- Promo Banner Section end -->

  <!-- Merchandise Section -->
  <section id="merchandise" class="merchandise section h-auto transition-all duration-150 ease-in">
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
            <div onclick="openModal('Tshirt', '{{ asset('assets/img/Merchandise/Tshirt.jpg') }}', 'IDR 125K', 'Deskripsi Ini Tshirt')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" alt="Tshirt" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Tshirt</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 125K</p>
            </div>              
            <div onclick="openModal('Hat', '{{ asset('assets/img/Merchandise/Hat.jpg') }}', 'IDR 100K', 'Deskripsi Ini Hat')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" alt="Hat" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Hat</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
            </div>
            <div onclick="openModal('Tumbler1', '{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}', 'IDR 150K', 'Deskripsi Ini Tumbler1')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" alt="Tumbler 1" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Tumbler 1</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 150K</p>
            </div>
            <div onclick="openModal('Tumbler2', '{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}', 'IDR 100K', 'Deskripsi Ini Tumbler2')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" alt="Tumbler 2" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Tumbler 2</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
            </div>
            <div onclick="openModal('Mug', '{{ asset('assets/img/Merchandise/Mug.jpg') }}', 'IDR 100K', 'Deskripsi Ini Mug')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" alt="Mug" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Mug</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
            </div>
            <div onclick="openModal('Totebag', '{{ asset('assets/img/Merchandise/Totebag.jpg') }}', 'IDR 80K', 'Deskripsi Ini Totebag')" class="merchandise-item text-center cursor-pointer">
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

              <!-- Kolom Atas: 1 Produk -->
            <div class="col-lg-6">
              <div class="row g-4">
                <div class="relative w-full max-w-sm mx-auto mt-5">
                
                  <div>
                    <!-- Gambar Produk -->
                    <img id="productImage" src="" alt="Product"
                      class="mx-auto w-4/5 object-cover aspect-square rounded-xl" />
          
                    <div class="text-center mt-2">
                      <h2 id="productName" class="text-xl font-bold mb-0"></h2>
                      <p id="productPrice" class="text-lg font-bold text-[#8B5E3B]"></p>
                      <a href="#">
                        <button class="bg-black text-white text-sm font-medium px-5 py-2 rounded-full mb-6">Add to cart</button>
                      </a>
                    </div>
          
                    <!-- Tombol Navigasi -->
                    <button onclick="prevProduct()" class="absolute left-2 top-1/3 transform -translate-y-1/2 z-10">
                      <svg class="w-10 h-10 text-black rounded-full" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                      </svg>
                    </button>
                    <button onclick="nextProduct()" class="absolute right-2 top-1/3 transform -translate-y-1/2 z-10">
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
          </div>
          
          <!-- Kolom Bawah: Produk -->
          <div class="lg:hidden overflow-x-auto">
            <div class="grid grid-cols-1 gap-4 overflow-x-auto justify-center h-auto pb-2">
              <div id="productListContainer" class="flex gap-3 w-auto">
                <!-- Produk Tshirt (Trigger) -->
                {{-- <div class="flex-shrink-0 w-24 text-center cursor-pointer" onclick="setProduct(0)">
                  <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium mb-0">Totebag</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 125K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center cursor-pointer" onclick="setProduct(1)">
                  <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium mb-0">Tshirt</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 125K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center cursor-pointer" onclick="setProduct(2)">
                  <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium mb-0">Hat</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center cursor-pointer" onclick="setProduct(3)">
                  <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium mb-0">Tumbler 1</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 150K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center cursor-pointer" onclick="setProduct(4)">
                  <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium mb-0">Tumbler 2</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 100K</p>
                </div>
                <div class="flex-shrink-0 w-24 text-center cursor-pointer" onclick="setProduct(5)">
                  <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" class="w-full h-24 object-cover rounded mb-1">
                  <p class="text-xs font-medium mb-0">Reusable Cup</p>
                  <p class="text-xs text-[#8B5E3B] font-bold">IDR 100K</p>
                </div> --}}
                  <!-- Tombol Katalog Selengkapnya -->
                {{-- <div class="flex justify-center items-center col-span-3">
                  <a href="#"
                    class="bg-white text-black font-bold uppercase text-xs px-4 py-2 text-center rounded shadow-md hover:bg-gray-100 transition">
                    Katalog Selengkapnya
                  </a>
                </div> --}}
              </div>
              <!-- tambah lagi kalau ada kategori baru -->
            </div>
          </div>
          {{-- kolom end --}}
          {{-- mobile view end --}}
      </div>
    </div>
  </section>
  <!-- Merchandise Section End -->

  <!-- Modal Template merchandise -->
  <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg max-w-md w-full relative" onclick="event.stopPropagation()">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-black text-2xl font-bold">&times;</button>
      <img id="modalImage" src="#" alt="Product Image" class="w-full h-62 object-cover rounded mb-4">
      <h2 id="modalTitle" class="text-2xl font-bold text-center">Product Title</h2>
      <p id="modalPrice" class="text-[#8B5E3B] font-bold text-lg text-center">IDR 0K</p>
      <p id="modalDesc" class="text-black text-xs text-center text-justify">IDR 0K</p>
      <button class="bg-black text-white py-2 px-4 rounded mt-2 w-full">Add to Cart</button>
    </div>
  </div>
  <!-- Modal Template merchandise end -->
  
  <!-- Cerita Kawan Section -->
    <section id="cerita-kawan" class="cerita relative h-auto transition-all duration-150 ease-in">
      <div class="container">
        <div class="row align-items-start">
          <!-- Judul Kiri (desktop) --> 
          <div class="col-lg-12 mb-4 hidden lg:flex justify-between h-full">
            <h1 class="mb-2">Cerita Kawan</h1>
          </div>
          <!-- Judul Tengah (mobile) -->
          <div class="col-lg-12 mb-4 flex lg:hidden flex-col justify-between h-full">
            <h1 class="text-center">Cerita Kawan</h1>
          </div>
        </div>
      </div>
      
      <div id="ceritaKawanScroll" class="relative bottom-[-1px] mt-10 flex h-[calc(100vh-272px)] min-w-full flex-shrink-0 overflow-x-auto overflow-y-hidden lg:h-[calc(100vh-276px)]" style="overflow-x:auto;">
            <div id="scrollHint" class="absolute top-10 left-1/2 -translate-x-1/2 px-6 py-3 text-[#8B5E3B] font-bold text-lg z-20 transition-opacity duration-300">
              &laquo;&laquo; GESER UNTUK LIHAT LAINNYA &raquo;&raquo;
            </div>
        
            <!-- Orang 1 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
              <img
                src="{{ asset('assets/img/Cerita-Kawan/Gilang-Dhafir.png') }}"
                alt="Gilang Dhafir"
                class="h-auto w-auto max-h-full object-contain cursor-pointer z-10 relative"
                onclick="window.location.href='#cerita-kawan';"
              />
            
              <div class="absolute bottom-4 left-1/2 z-20 -translate-x-1/2 whitespace-nowrap
                border border-black bg-[#fefce8] px-4 py-2 text-lg font-bold text-black cerita-hover-box">
                Gilang Dhafir
              </div>
            </div>
            
        
            <!-- Orang 2 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
              <img
                src="{{ asset('assets/img/Cerita-Kawan/Mpip-Damngood.png') }}"
                alt="Mpip Damngood"
                class="h-auto w-auto max-h-full object-contain cursor-pointer z-10 relative"
                onclick="window.location.href='#cerita-kawan';"
              />
              
              <div class="absolute bottom-4 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap
                border border-black bg-[#fefce8] px-4 py-2 text-lg font-bold text-black cerita-hover-box">
                Mpip Damngood
              </div>
            </div>
        
            <!-- Orang 3 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
                <img
                src="{{ asset('assets/img/Cerita-Kawan/Wajid-Club-Dangdut-Racun.png') }}"
                alt="Wajid Club Dangdut Racun"
                class="h-auto w-auto max-h-full object-contain cursor-pointer z-10 relative"
                onclick="window.location.href='#cerita-kawan';"
                />
              
              <div class="absolute bottom-4 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap
                border border-black bg-[#fefce8] px-4 py-2 text-lg font-bold text-black cerita-hover-box">
                Wajid Club Dangdut Racun
              </div>
            </div>
            <!-- Orang 4 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
              <img alt="Aul test" 
                class="h-auto w-auto max-h-full flex-shrink-0 object-contain" 
                src="{{ asset('assets/img/Cerita-Kawan/Aul-Test.png') }}"
                onclick="window.location.href='#cerita-kawan';"
              />
              
              <div class="absolute bottom-4 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap
                border border-black bg-[#fefce8] px-4 py-2 text-lg font-bold text-black cerita-hover-box">
                Aul test
              </div>
            </div>
            <!-- Orang 5 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
              <img alt="Acong Test" 
                class="h-auto w-auto max-h-full flex-shrink-0 object-contain" 
                src="{{ asset('assets/img/Cerita-Kawan/Acong-Test.png') }}"
                onclick="window.location.href='#cerita-kawan';"
              />
              
              <div class="absolute bottom-4 left-1/2 z-10 -translate-x-1/2 whitespace-nowrap
                border border-black bg-[#fefce8] px-4 py-2 text-lg font-bold text-black cerita-hover-box">
                Acong Test
              </div>
            </div>
        
          </div>
    </section>
    <!-- Cerita Kawan Section End -->

    <!-- Berita Kawan Section -->
    <section id="berita-kawan" class="berita relative h-auto transition-all duration-150 ease-in">
      <div class="container mx-auto">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Judul dan foto -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">

              <h1 class="fw-bold mb-4">Berita Kawan</h1>
              <div class="relative">
                <img 
                {{-- src="{{ asset('assets/img/berita-kawan/1.jpg') }}"  --}}
                  id="beritaImageDesktop"
                  alt="Berita Kawan" class="rounded-lg w-full object-cover">
        
                <!-- Tombol Navigasi -->
                <div class="absolute bottom-50 left-1/2 transform -translate-x-1/2 flex gap-135">
                  <button onclick="prevBerita()" class="bg-white p-2 rounded-full shadow-md">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                  </button>
                  <button onclick="nextBerita()" class="bg-white p-2 rounded-full shadow-md">
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
                  <h3 id="beritaTitleDesktop" class="mb-2">
                    {{-- RAW Club: Penanda Kebangkitan Skena Denim --}}
                  </h3>
                  
                  <p class="text-sm italic text-gray-500 mb-6">
                    {{-- by Tonny Oscar --}}
                    <span id="beritaCreatedByDesktop"></span>
                    <br>
                    {{-- 5th July 2024 --}}
                    <span id="beritaCreatedAtDesktop"></span>
                  </p>
                  <p id="beritaDescDesktop" class="text-justify leading-relaxed mb-4">
                    {{-- Nio Nguan Lie, better known as Suyanto, started making es campur as a 17-year-old working for a relative in Pontianak.
                    And he never stopped. Half a century later, the mixed ice dessert remains the signature of his streetside stall,
                    Es Campur Ko Acia in Sawah Besar, Central Jakarta. --}}
                  </p>
                  {{-- <p class="text-justify leading-relaxed">
                    ‘Ko Acia’ is what his customers call him, a nickname he adopted when he opened his stall in 1980.
                    Started as a simple wooden shack in an empty lot, the small shop is now part of a vibrant strip of street food finds
                    on Dwiwarna Raya Street, squeezed between a bakmi shop and an eatery serving rice and homestyle dishes.
                    But one thing remains unchanged: a solitary tree stands guard, offering shade to diners (from school kids to delivery couriers
                    and families around the block) who sit on the wooden benches eagerly digging into their cold bowls of es campur.
                  </p> --}}
                  <!-- Tombol Read More -->
                  <div class="mt-6 flex left">
                    <a href="/berita-kawan" class="flex border border-white text-white bg-black">
                      <span class="px-4 py-2 font-medium">Read More</span>
                      <span class="px-2 py-2 border-l border-white flex items-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>

              </div>
            </div>
            {{-- kolom end --}}
            {{-- desktop view end --}}

            {{-- Mobile view --}}
            <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
              <div class="berita-text-mobile">
                <h1>Berita Kawan</h1>

                <h3 id="beritaTitleMobile" class="mt-2 text-center">
                  {{-- RAW Club: Penanda <br>
                  Kebangkitan Skena Denim --}}
                </h3>
                  <p class="text-gray-500">
                    {{-- by Tonny Oscar  --}}
                    <span id="beritaCreatedByMobile"></span>
                    <br>
                    <span id="beritaCreatedAtMobile"></span>
                    {{-- 5th July 2024 --}}
                  </p>
              </div>

               <!-- Kolom Kanan: Produk -->
              <div class="col-lg-6">
                <div class="row g-4">
                  <!-- Tombol Navigasi -->
                  <div class="relative w-full max-w-sm mx-auto mt-5">
                    <button onclick="prevBerita()" class="absolute left-2 top-1/2 transform -translate-y-1/2 z-10 bg-white p-2 rounded-full shadow-md">
                      <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                      </svg>
                    </button>
                    <button onclick="nextBerita()" class="absolute right-2 top-1/2 transform -translate-y-1/2 z-10 bg-white p-2 rounded-full shadow-md">
                      <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </button>
                    
                    <!-- Gambar Produk -->
                    <img 
                        id="beritaImageMobile"
                        {{-- src="{{ asset('assets/img/berita-kawan/1.jpg') }}" --}}
                        alt="berita1" 
                        class="mx-auto w-auto object-cover" />
                  </div>

                </div>
              </div>
              {{-- kolom judul end --}}
              
              <!-- Kolom: text -->
              <div class="mt-10">
                <p id="beritaDescMobile" class="text-justify mt-auto text-xm">
                  {{-- Since its founding in the 80s, Studio Agatho has
                  been the go-to company for various design
                  needs. Its offerings range from graphic design
                  and branding strategy to website development
                  and video production. --}}
                </p>
              </div>
              {{-- kolom text end --}}
              <!-- Tombol Read More -->
              <div class="mt-6 flex left">
                <a href="/berita-kawan" class="flex border border-white text-white bg-black">
                  <span class="px-4 py-2 font-medium">Read More</span>
                  <span class="px-2 py-2 border-l border-white flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                  </span>
                </a>
              </div>
              

            </div>
            {{-- Mobile view end --}}
        </div>
    
      </div>
    </section>
    <!-- Berita Kawan Section End -->

    <script>
      // hero
      document.addEventListener('DOMContentLoaded', function () {
        const character = document.getElementById("character");
        const hero = document.getElementById("hero");

        let mouseX = 0;
        let posX = window.innerWidth / 2;
        let currentDirection = null;
        let isHovering = false;
        let lastMoveTime = Date.now();
        let currentScrollRatio = 0;
        let lastScrollTime = Date.now();

        if (hero) {
          document.addEventListener("mousemove", function (e) {
            const heroRect = hero.getBoundingClientRect();
            const inView = heroRect.top < window.innerHeight && heroRect.bottom > 0;
            if (inView && window.innerWidth >= 768) {
              mouseX = e.clientX;
              lastMoveTime = Date.now();

              const direction = e.clientX > posX ? "right" : "left";
              if (direction !== currentDirection && !isHovering) {
                currentDirection = direction;
                const newSrc = direction === "right"
                  ? "/assets/img/character/charRight.webp"
                  : "/assets/img/character/charLeft.webp";
                setcharacterImage(newSrc);
              }
            }
          });
        }

        function setcharacterImage(path) {
          if (!character.src.includes(path)) {
            character.src = path;
          }
        }

      // MOBILE: Pantau scroll dan ubah arah karakter
        if (window.innerWidth < 768) {
          hero.addEventListener("scroll", () => {
            lastScrollTime = Date.now();

            const scrollX = hero.scrollLeft;
            const maxScroll = hero.scrollWidth - hero.clientWidth;
            const scrollRatio = maxScroll > 0 ? scrollX / maxScroll : 0;

            const direction = scrollRatio > currentScrollRatio ? "right" : "left";
            if (direction !== currentDirection && !isHovering) {
              currentDirection = direction;
              const newSrc = direction === "right"
                ? "/assets/img/character/charRight.webp"
                : "/assets/img/character/charLeft.webp";
              setcharacterImage(newSrc);
            }

            currentScrollRatio = scrollRatio;
          });
        }
        
        function animate() {
            if (hero) {
            const heroRect = hero.getBoundingClientRect();
            const inView = heroRect.top < window.innerHeight && heroRect.bottom > 0;
            const now = Date.now();

            if (inView) {
              if (window.innerWidth >= 768) {
                // DESKTOP - Mouse movement
                if (now - lastMoveTime > 500 && !isHovering && !character.src.includes("charIdle.webp")) {
                  setcharacterImage("/assets/img/character/charIdle.webp");
                  currentDirection = null;
                }

                posX += (mouseX - posX) * 0.1;
                const clampedX = Math.min(Math.max(posX, 100), 1400);
                character.style.transform = `translateX(${clampedX}px)`;

              } else {
                // MOBILE - Scroll movement
                const scrollX = hero.scrollLeft;
                const maxScroll = hero.scrollWidth - hero.clientWidth;
                const scrollRatio = maxScroll > 0 ? scrollX / maxScroll : 0;

                const characterMin = 100;
                const characterMax = 1400;
                const charX = characterMin + (characterMax - characterMin) * scrollRatio;

                character.style.transform = `translateX(${Math.round(charX)}px)`;

                // IDLE setelah tidak scroll selama 500ms
                if (now - lastScrollTime > 500 && !character.src.includes("charIdle.webp")) {
                  setcharacterImage("/assets/img/character/charIdle.webp");
                  currentDirection = null;
                }
              }

              character.style.display = "block";
            } else {
              character.style.display = "none";
            }

            requestAnimationFrame(animate);
          }
        }

        animate();

        // Navbar background toggle based on scroll position
        const header = document.querySelector('.header');
        window.addEventListener('scroll', () => {
          const heroSection = document.querySelector('#hero');
          if (heroSection) {
            const heroTop = heroSection.getBoundingClientRect().top;
            if (heroTop <= 0) {
              header.classList.remove('header-hidden');
            } else {
              header.classList.add('header-hidden');
            }
          }
        });
      });

      // Lini Produk
      const menus = {
        "Black-White": [
          "Hot Americano", "Iced Americano", "Black Tonic", "Hot Cafe Latte",
          "Iced Cafe Latte", "Hot Cappuccino", "Cocoricano", "Espresso",
          "Hot Magic", "Iced Magic", "Manual Brew"
        ],
        "Bottle": [
          "KSK Baru", "KSK Lama", "KSK Roasted Almond"
        ],
        "Chocolate, Tea & Matcha": [
          "Apple Mint Tea", "Arisan Tea", "Choco Irish", "Earl Grey Milk Tea",
          "Hot Chocolate", "Iced Chocolate", "Lychee Tea", "Hot Matcha Latte",
          "Iced Matcha Latte"
        ],
        "Food": [
          "Beef Nachos", "Chicken Popcorn", "Choco Cheezy Panties", "Creamy Beef Panties",
          "Fried Wonton", "Kawan Churros", "Kawan Kentang", "Kawan Sharing",
          "Molten Cake", "Potato Beef Fried", "Tahu Bumbu Rujak", "Tahu Cabe Garam"
        ],
        "Kawan Frappe": [
          "Charcoal Frappe", "Choco Frappe", "Coffee Frappe", "Matcha Frappe"
        ],
        "Kawan Signature": [
          "Creamy Candy Mango", "Creamy Candy Strawberry", "Irish Coffee",
          "Kopi Berry Lemon", "Matcha Mango", "Peach Perfect", "Virgin Pinacoland"
        ],
        "Kopi Susu Kawan (KSK)": [
          "KSK Baru", "KSK Baru Hot", "KSK Keju", "KSK Lama", "KSK Roasted Almond"
        ],
        "Main Course": [
          "Ayam dan Kentang Creamy Mushroom", "Nasi Ayam Buttermilk",
          "Nasi Ayam Honey Garlic", "Nasi Telur Pontianak"
        ]
      };

      document.querySelectorAll(".category").forEach(btn => {
        btn.addEventListener("click", () => {
          // Remove active class from all
          document.querySelectorAll(".category").forEach(b => b.classList.remove("active"));
          btn.classList.add("active");

          const selectedCategory = btn.textContent.trim();
          const menuItems = menus[selectedCategory] || [];

          const leftCol = document.querySelectorAll(".grid-cols-2 .flex.flex-col")[0];
          const rightCol = document.querySelectorAll(".grid-cols-2 .flex.flex-col")[1];

          // Clear old items
          leftCol.innerHTML = "";
          rightCol.innerHTML = "";

          // Split items between 2 columns
          const halfway = Math.ceil(menuItems.length / 2);
          const leftItems = menuItems.slice(0, halfway);
          const rightItems = menuItems.slice(halfway);

          const createButton = (text) => {
            const btn = document.createElement("button");
            btn.textContent = text;
            btn.className = "text-left font-bold hover:opacity-70 transition border-b border-black pb-2";
            return btn;
          };

          leftItems.forEach(item => leftCol.appendChild(createButton(item)));
          rightItems.forEach(item => rightCol.appendChild(createButton(item)));
        });
      });

      // Promo Banner
      document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("promoSlider");
        const totalSlides = slider.children.length;
        let currentIndex = 0;

        setInterval(() => {
          currentIndex = (currentIndex + 1) % totalSlides;
          slider.style.transform = `translateX(-${100 * currentIndex}%)`;
        }, 5000); // ganti slide tiap 5 detik
      });

      // Merchandise Modal Toggle (Desktop)
      function openModal(title, image, price, desc) {
        const modal = document.getElementById("productModal");
        document.getElementById("modalTitle").innerText = title;
        document.getElementById("modalImage").src = image;
        document.getElementById("modalPrice").innerText = price;
        document.getElementById("modalDesc").innerText = desc;
        modal.classList.remove("hidden");

        // Klik di luar modal content untuk menutup
        modal.addEventListener("click", function (e) {
          if (e.target === modal) {
            closeModal();
          }
        });
      }

      function closeModal() {
        const modal = document.getElementById("productModal");
        modal.classList.add("hidden");
      }

      // Merchandise Modal Navigation (Mobile)
      const products = [
        {
          name: "Totebag",
          image: "assets/img/Merchandise/Totebag.jpg",
          price: "IDR 125K"
        },
        {
          name: "Tshirt",
          image: "assets/img/Merchandise/Tshirt.jpg",
          price: "IDR 125K"
        },
        {
          name: "Hat",
          image: "assets/img/Merchandise/Hat.jpg",
          price: "IDR 100K"
        },
        {
          name: "Tumbler 1",
          image: "assets/img/Merchandise/Tumbler1.jpg",
          price: "IDR 150K"
        },
        {
          name: "Tumbler 2",
          image: "assets/img/Merchandise/Tumbler2.jpg",
          price: "IDR 100K"
        },
        {
          name: "Reusable Cup",
          image: "assets/img/Merchandise/Mug.jpg",
          price: "IDR 100K"
        }
      ];

      let currentIndex = 0;

      function renderProduct(index) {
        const product = products[index];
        if (product) {
          document.getElementById("productImage").src = product.image;
          document.getElementById("productName").innerText = product.name;
          document.getElementById("productPrice").innerText = product.price;
        }

        renderProductList(index);
      }

      function renderProductList(excludeIndex) {
        const container = document.getElementById("productListContainer");
        if (!container) return;

        container.innerHTML = ""; // Kosongkan dulu

        products.forEach((product, index) => {
          if (index === excludeIndex) return; // Lewati produk utama

          const item = document.createElement("div");
          item.className = "flex-shrink-0 w-24 text-center cursor-pointer";
          item.innerHTML = `
            <img src="${product.image}" class="w-full h-24 object-cover rounded mb-1" />
            <p class="text-xs font-medium mb-0">${product.name}</p>
            <p class="text-xs text-[#8B5E3B] font-bold">${product.price}</p>
          `;
          item.onclick = () => setProduct(index);
          container.appendChild(item);
        });

        // Tambahkan tombol "Katalog Selengkapnya"
        const linkWrap = document.createElement("div");
        linkWrap.className = "flex justify-center items-center";
        linkWrap.innerHTML = `
          <a href="#"
            class="bg-white text-black font-bold uppercase text-xs px-4 py-2 text-center rounded shadow-md hover:bg-gray-100 transition">
            Katalog Selengkapnya
          </a>
        `;
        container.appendChild(linkWrap);
      }


      function nextProduct() {
        currentIndex = (currentIndex + 1) % products.length;
        renderProduct(currentIndex);
      }

      function prevProduct() {
        currentIndex = (currentIndex - 1 + products.length) % products.length;
        renderProduct(currentIndex);
      }

      function setProduct(index) {
        currentIndex = index;
        renderProduct(currentIndex);
      }

      document.addEventListener("DOMContentLoaded", () => {
        renderProduct(currentIndex);
      });

      // Berita Kawan
      const beritaKawan = [
        {
          title: "RAW Club: Penanda Kebangkitan Skena Denim",
          image: "assets/img/berita-kawan/1.jpg",
          createdBy: "Tonny Oscar",
          createdAt: "5th July 2024",
          desc: " Nio Nguan Lie, better known as Suyanto, started making es campur as a 17-year-old working for a relative in Pontianak. And he never stopped. Half a century later, the mixed ice dessert remains the signature of his streetside stall, Es Campur Ko Acia in Sawah Besar, Central Jakarta. ‘Ko Acia’ is what his customers call him, a nickname he adopted when he opened his stall in 1980. Started as a simple wooden shack in an empty lot, the small shop is now part of a vibrant strip of street food finds on Dwiwarna Raya Street, squeezed between a bakmi shop and an eatery serving rice and homestyle dishes. But one thing remains unchanged: a solitary tree stands guard, offering shade to diners (from school kids to delivery couriers and families around the block) who sit on the wooden benches eagerly digging into their cold bowls of es campur. ."
        },
        {
          title: "Bajawa Semi-Washed: Perjalanan Rasa dari Flores ke Cangkir Anda",
          image: "assets/img/berita-kawan/2.jpg",
          createdBy: "TnAhonk",
          createdAt: "5th July 2024",
          desc: "Flores tidak hanya dikenal karena alamnya yang indah, tetapi juga karena kopinya yang khas. Bajawa Semi-Washed hadir membawa cerita dari dataran tinggi yang kaya akan sejarah dan budaya kopi. Diproses dengan teknik semi-washed, kopi ini menawarkan keseimbangan antara rasa cerah dan tubuh yang kuat. Dari kebun ke cangkir, perjalanan kopi ini adalah bukti kerja keras petani lokal dan keunikan tanah Flores. Kini, Anda bisa menikmati setiap tegukan dengan pemahaman bahwa ada cerita panjang di balik rasanya."
        },
        {
          title: "Kintamani Natural: Aroma Tropis dari Lereng Bali",
          image: "assets/img/berita-kawan/3.jpg",
          createdBy: "AcongTurner",
          createdAt: "5th July 2024",
          desc: "Berlokasi di kawasan pegunungan Bali, Kintamani Natural menjadi salah satu varian kopi yang paling diburu oleh pecinta rasa eksotis. Dengan proses natural, kopi ini mempertahankan aroma buah dan bunga yang kuat, khas dari kebun-kebun kopi di lereng Kintamani. Di balik rasa yang menyegarkan, kopi ini menyimpan cerita petani lokal yang terus menjaga tradisi dan kualitas. Lebih dari sekadar minuman, Kintamani Natural adalah bagian dari narasi budaya kopi Indonesia yang tak lekang oleh waktu."
        },
      ];

      let currentBeritaIndex = 0;

      function renderBerita(index) {
        const berita = beritaKawan[index];
        if (berita) {
          // bagian Desktop
          document.getElementById("beritaImageDesktop").src = berita.image;
          document.getElementById("beritaTitleDesktop").innerText = berita.title;
          document.getElementById("beritaCreatedByDesktop").innerText = berita.createdBy;
          document.getElementById("beritaCreatedAtDesktop").innerText = berita.createdAt;
          document.getElementById("beritaDescDesktop").innerText = berita.desc;
          // bagian Mobile
          document.getElementById("beritaImageMobile").src = berita.image;
          document.getElementById("beritaTitleMobile").innerText = berita.title;
          document.getElementById("beritaCreatedByMobile").innerText = berita.createdBy;
          document.getElementById("beritaCreatedAtMobile").innerText = berita.createdAt;
          document.getElementById("beritaDescMobile").innerText = berita.desc;
        }
      }

      function nextBerita() {
        currentBeritaIndex = (currentBeritaIndex + 1) % beritaKawan.length;
        renderBerita(currentBeritaIndex);
      }

      function prevBerita() {
        currentBeritaIndex = (currentBeritaIndex - 1 + beritaKawan.length) % beritaKawan.length;
        renderBerita(currentBeritaIndex);
      }

      document.addEventListener("DOMContentLoaded", () => {
        renderBerita(currentBeritaIndex);
      });
    </script>
@endsection