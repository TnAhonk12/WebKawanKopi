@extends('layouts.layout')

@section('homepage')

  <!-- hero Section -->
 
    <section id="hero" class="hero section flex justify-center">
      <img src="{{ asset('assets/img/character/charIdle.webp') }}" class="character" id="character" alt="character" />
      <img src="{{ asset('assets/img/hero/depan-hero.webp') }}" class="tableCashier" alt="Table Cashier" />
    </section>

  <!-- hero Section end -->

    <section id="lini-produk" class="lini-produk section h-auto transition-all duration-150 ease-in">
      <div class="container">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Harga dan Makanan -->
            <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">
              <h1 class="fw-bold mb-3">Lini Produk</h1>
            
              <div class="relative w-7/10 aspect-square mt-[2rem] mx-auto">
                <!-- Gambar Produk -->
                <img src="{{ asset('assets/img/Menu/Kopi-Susu-Kawan/KSK-Baru.jpg') }}" alt="KSK-Baru"
                  class="w-auto h-auto object-cover rounded-xl" />
            
                <!-- Tombol Navigasi -->
                <div class="absolute inset-1 flex justify-between items-center px-1">
                  <!-- Tombol Kiri -->
                  <button class="absolute left-2 top-auto transform -translate-y-1/2 z-10">
                    <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                  </button>
                  <button class="absolute right-2 top-auto transform -translate-y-1/2 z-10">
                    <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                  </button>
                </div>
                <!-- Nama Produk dan Harga DI LUAR GAMBAR -->
                <div class="mt-4 text-center">
                  <p class="text-xl font-bold mb-0 text-[#8B5E3B]">KSK Baru</p>
                  <p class="text-lg font-semibold">Rp 10.000</p>
                </div>
              </div>
            
            </div>
            
            <!-- Kolom Kanan: Kategori dan Daftar Menu -->
            <div class="col-lg-6 hidden lg:flex flex-col w-full h-[600px] overflow-hidden pr-2">

              <div class="mt-[6.8rem]">

                <!-- Bagian Atas: Kategori Produk -->
                <div class="grid grid-cols-3 gap-4 overflow-y-auto h-[250px] pb-2">
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
                          <p class="text-xl font-bold mb-0 text-[#8B5E3B]">KSK Baru</p>
                          <p class="text-lg font-bold">Rp 10.000</p>
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

      
    {{-- <section id="merchandise1" class="merchandise section">
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
    </section> --}}
    
    
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

    <section id="roastery" class="roastery relative h-auto transition-all duration-150 ease-in">
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

                  <div class="shop-icons mb-3 justify-center">
                    <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Tokopedia.png')}}" alt="Tokopedia"></a>
                    <a href="#"><img src="{{asset('assets/img/ecommerce/Logo_Shopee.png')}}" alt="Shopee"></a>
                  </div>

                </div>
              </div>
              {{-- kolom judul end --}}
              
              <!-- Kolom: text -->
              <div class="mt-2">
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
        
            <!-- Orang 1 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
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
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
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
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
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
            <!-- Orang 3 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
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
            <!-- Orang 3 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
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
            <!-- Orang 3 -->
            <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto">
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

    <section id="berita-kawan" class="berita relative h-auto transition-all duration-150 ease-in">
      <div class="container mx-auto">
        <div class="row align-items-start">
          
          {{-- desktop view --}}
            <!-- Kolom Kiri: Judul dan foto -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">

              <h1 class="fw-bold mb-4">Berita Kawan</h1>
              <div class="relative">
                <img src="{{ asset('assets/img/berita-kawan/1.jpg') }}" alt="Berita Kawan" class="rounded-lg w-full object-cover">
        
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
            <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
              <div class="berita-text-mobile">
                <h1>Berita Kawan</h1>

                <h3 class="mt-2 text-center">RAW Club: Penanda <br>
                  Kebangkitan Skena Denim</h3>
                  <p class="text-gray-500"> by Tonny Oscar <br>
                    5th July 2024</p>
              </div>

               <!-- Kolom Kanan: Produk -->
              <div class="col-lg-6">
                <div class="row g-4">

                  <div class="relative w-full max-w-sm mx-auto mt-5">
                    <!-- Gambar Produk -->
                    <img src="{{ asset('assets/img/berita-kawan/1.jpg') }}" alt="berita1"
                      class="mx-auto w-auto object-cover" />
                  </div>

                </div>
              </div>
              {{-- kolom judul end --}}
              
              <!-- Kolom: text -->
              <div class="mt-10">
                <p class="text-justify mt-auto text-xm">
                  Since its founding in the 80s, Studio Agatho has
                  been the go-to company for various design
                  needs. Its offerings range from graphic design
                  and branding strategy to website development
                  and video production.
                </p>
              </div>
              {{-- kolom text end --}}

            </div>
            {{-- Mobile view end --}}
        </div>
    
      </div>
    </section>
    
    <section id="find-us" class="find-us relative h-auto transition-all duration-150 ease-in">
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
              <h1 class="fw-bold mb-2 text-center">Find Us</h1>

              <!-- Grid Foto Lokasi -->
              <div class="grid grid-cols-2 gap-4 px-8 py-8">

                <!-- Lokasi 1 -->
                <div class="text-center">
                  <a href="#">
                    <img src="{{ asset('assets/img/Find-Us/1.jpg') }}" alt="Kawan Kopi, Dipatiukur" class="w-full h-auto object-cover rounded mb-2">
                    <p class="text-sm font-medium text-black">Kawan Kopi, Dipatiukur</p>
                  </a>
                </div>

                <!-- Lokasi 2 -->
                <div class="text-center">
                  <a href="#">
                  <img src="{{ asset('assets/img/Find-Us/2.jpg') }}" alt="Kawan Kopi, Cimandiri" class="w-full h-auto object-cover rounded mb-2">
                  <p class="text-sm font-medium text-black">Kawan Kopi, Cimandiri</p>
                  </a>
                </div>

                <!-- Lokasi 3 -->
                <div class="text-center">
                  <a href="#">
                    <img src="{{ asset('assets/img/Find-Us/3.jpg') }}" alt="Kawan Kopi, Talaga Bodas" class="w-full h-auto object-cover rounded mb-2">
                    <p class="text-sm font-medium text-black">Kawan Kopi, Talaga Bodas</p>
                  </a>
                </div>

                <!-- Lokasi 4 -->
                <div class="text-center">
                  <a href="#">
                    <img src="{{ asset('assets/img/Find-Us/4.jpg') }}" alt="Kawan Kopi, Ciumbuleuit" class="w-full h-auto object-cover rounded mb-2">
                    <p class="text-sm font-medium">Kawan Kopi, Ciumbuleuit</p>
                  </a>
                </div>

              </div>

            </div>
            {{-- Mobile view end --}}

        </div>
    
      </div>
    </section>

@endsection