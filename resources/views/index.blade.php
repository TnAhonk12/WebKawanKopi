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
              <div id="desktopMenuNav" class="absolute inset-1 flex justify-between items-center px-1 hidden">
                <!-- Tombol Kiri -->
                <button id="prevMenuDesktop" class="absolute left-2 top-auto transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button id="nextMenuDesktop" class="absolute right-2 top-auto transform -translate-y-1/2 z-10">
                  <svg class="w-10 h-10 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
              </div>
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
                @foreach ($menuCategories as $category)
                  <button class="category">{{ $category->nama_kategori }}</button>
                @endforeach
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
              <!-- END Bawah: List Menu -->
            </div>


          </div>

          {{-- desktop view end --}}

         <!-- Mobile view -->
          <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
            <h1 class="fw-bold mb-2 text-center">Lini Produk</h1>

            <!-- Kolom atas: Produk -->
            <div class="w-full flex justify-center mt-5">
              <div class="relative w-4/5 aspect-square">
                <img id="productImageMobile" src="{{ asset('assets/img/Lini-Produk.jpg') }}" alt="Product"
                  class="mx-auto w-full h-full object-cover rounded-xl" />
                
                <!-- Tombol Navigasi -->
                <div id="mobileMenuNav" class="absolute inset-1 flex justify-between items-center px-1 hidden">
                  <!-- Tombol Kiri -->
                  <button id="prevMenuMobile" class="absolute left-1 top-auto transform -translate-y-1/2 z-10">
                    <svg class="w-7 h-7 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                  </button>
                  <button id="nextMenuMobile" class="absolute right-1 top-auto transform -translate-y-1/2 z-10">
                    <svg class="w-7 h-7 text-black rounded-full " fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Kolom bawah: Kategori & Menu -->
          <div class="lg:hidden px-6">
            <!-- Kategori Produk -->
            <div class="grid grid-cols-3 gap-2 mt-6 overflow-y-auto h-[150px]">
               @foreach ($menuCategories as $category)
                  <button class="category">{{ $category->nama_kategori }}</button>
                @endforeach
            </div>

            <!-- Divider -->
            <div class="my-4 border-t border-gray-300"></div>

            <!-- List Menu -->
            <div class="grid grid-cols-2 gap-4 overflow-y-auto h-[150px] pb-2">
              <div class="flex flex-col gap-4" id="menuLeftMobile"></div>
              <div class="flex flex-col gap-4" id="menuRightMobile"></div>
            </div>
          </div>

          {{-- kolom end --}}
          {{-- mobile view end --}}
      </div>
    </div>
  </section>
  <!-- Lini Produk Section end -->


  <!-- Promo Banner Section -->
  <section id="promo-banner" class="promo-banner py-6 px-4">
    <div class="relative w-full max-w-[1200px] max-h-[500px] mx-auto rounded-xl overflow-hidden shadow-lg hidden sm:block">
      <!-- Desktop Carousel Inner -->
      <div id="promoSlider" class="flex transition-transform duration-500 ease-in-out">
        @foreach ($promoImages as $index => $image)
          <img src="{{ $image }}" class="w-full h-full object-cover flex-shrink-0" alt="Promo {{ $index + 1 }}">
        @endforeach
      </div>

      <!-- Desktop Controls -->
      <button id="prevPromo" class="absolute left-3 top-1/2 -translate-y-1/2 z-10">
        <svg class="w-10 h-10 text-black rounded-full" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
      </button>
      <button id="nextPromo" class="absolute right-3 top-1/2 -translate-y-1/2 z-10">
        <svg class="w-10 h-10 text-black rounded-full" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
      </button>

      <!-- Desktop Indicators -->
      <div id="promoIndicators" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
        @foreach ($promoImages as $index => $image)
          <span data-index="{{ $index }}" class="w-3 h-3 bg-black rounded-full opacity-50 cursor-pointer"></span>
        @endforeach
      </div>
    </div>

    <!-- Mobile Version -->
    <div class="relative w-full max-w-sm mx-auto rounded-xl overflow-hidden shadow-md sm:hidden mt-6">
      <div id="promoSliderMobile" class="flex transition-transform duration-500 ease-in-out">
        @foreach ($promoImages as $index => $image)
          <img src="{{ $image }}" class="w-full h-48 object-cover flex-shrink-0" alt="Promo {{ $index + 1 }}">
        @endforeach
      </div>

      <div id="promoIndicatorsMobile" class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2 z-10">
        @foreach ($promoImages as $index => $image)
          <span data-index="{{ $index }}" class="w-2 h-2 bg-black rounded-full opacity-50 cursor-pointer"></span>
        @endforeach
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
            {{-- <div onclick="openModal('Tshirt', '{{ asset('assets/img/Merchandise/Tshirt.jpg') }}', 'IDR 125K')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Tshirt.jpg') }}" alt="Tshirt" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Tshirt</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 125K</p>
            </div>              
            <div onclick="openModal('Hat', '{{ asset('assets/img/Merchandise/Hat.jpg') }}', 'IDR 100K')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Hat.jpg') }}" alt="Hat" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Hat</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
            </div>
            <div onclick="openModal('Tumbler1', '{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}', 'IDR 150K')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Tumbler1.jpg') }}" alt="Tumbler 1" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Tumbler 1</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 150K</p>
            </div>
            <div onclick="openModal('Tumbler2', '{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}', 'IDR 100K')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Tumbler2.jpg') }}" alt="Tumbler 2" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Tumbler 2</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
            </div>
            <div onclick="openModal('Mug', '{{ asset('assets/img/Merchandise/Mug.jpg') }}', 'IDR 100K')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Mug.jpg') }}" alt="Mug" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Mug</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 100K</p>
            </div>
            <div onclick="openModal('Totebag', '{{ asset('assets/img/Merchandise/Totebag.jpg') }}', 'IDR 80K')" class="merchandise-item text-center cursor-pointer">
              <img src="{{ asset('assets/img/Merchandise/Totebag.jpg') }}" alt="Totebag" class="w-full h-52 object-cover rounded mb-2">
              <h4 class="font-semibold">Totebag</h4>
              <p class="text-[#8B5E3B] font-bold">IDR 80K</p>
            </div> --}}
            @foreach ($merchandises as $merch)
              <div onclick="openModal('{{ $merch['name'] }}', '{{ $merch['image'] }}', 'IDR {{ $merch['price'] }}K', '{{ $merch['link']}}')"
                  class="merchandise-item text-center cursor-pointer">
                <img src="{{ $merch['image'] }}" alt="{{ $merch['name'] }}" class="w-full h-52 object-cover rounded mb-2">
                <h4 class="font-semibold">{{ $merch['name'] }}</h4>
                <p class="text-[#8B5E3B] font-bold">IDR {{ $merch['price'] }}K</p>
              </div>
            @endforeach

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
                      <a id="productLink" href="">
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
      <a id="modalLink" href="">
        <button class="bg-black text-white py-2 px-4 rounded mt-2 w-full">Add to Cart</button>
      </a>
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
        @foreach ($ceritas as $cerita)
          <div class="relative group flex-shrink-0 overflow-hidden max-lg:inline-block max-lg:w-auto lg:w-auto mr-[10rem]">
            <img
              src="{{ $cerita['image'] }}"
              alt="{{ $cerita['name'] }}"
              class="h-auto w-auto max-h-full object-contain cursor-pointer z-10 relative"
              onclick="window.location.href='{{ route('cerita.detail', $cerita['slug']) }}';"
            />
            <div class="absolute bottom-4 left-1/2 z-20 -translate-x-1/2 whitespace-nowrap
              border border-black bg-[#fefce8] px-4 py-2 text-lg font-bold text-black cerita-hover-box">
              {{ $cerita['name'] }}
            </div>
          </div>
        @endforeach
      </div>
    </section>
    <!-- Cerita Kawan Section End -->

    <!-- Berita Kawan Section -->
    <section id="berita-kawan" class="berita relative h-auto transition-all duration-150 ease-in">
      <div class="container mx-auto">
         <div class="relative">
          <div id="ButtonBeritaDesktop">
            <!-- Tombol Prev -->
            <button onclick="prevBerita()"
              class="hidden lg:flex items-center justify-center absolute left-[-6rem] top-1/2 -translate-y-1/2 z-30 p-2">
              
              <svg class="w-20 h-20 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <!-- Tombol Next -->
            <button onclick="nextBerita()"
              class="hidden lg:flex items-center justify-center absolute right-[-6rem] top-1/2 -translate-y-1/2 z-30 p-2">
              <svg class="w-20 h-20 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        <div class="row align-items-start">
          
          {{-- desktop view --}}
    
            <!-- Kolom Kiri: Judul dan foto -->
            <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
              <h1 class="fw-bold mb-4">Berita Kawan</h1>
              {{-- <div class="relative">
                <img 
                src="{{ asset('assets/img/berita-kawan/1.jpg') }}" 
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
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                    <span data-index="0" class="w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                    <span data-index="0" class="w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                </div>
              </div> --}}
              <div class="relative w-full max-h-[500px] mx-auto rounded-xl overflow-hidden" id="beritaCarouselWrapper">
                <div id="beritaSlider" class="flex transition-transform duration-700 ease-in-out">
                  {{-- Gambar akan di-render dari JS --}}
                </div>

                <!-- Indicators -->
                <div id="beritaIndicators" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10"></div>
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
                    <a id="readMoreButton" data-base-url="{{ url('/berita') }}" href="#" class="flex border border-white text-white bg-black">
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

               <!-- Kolom Bawah: Berita -->
              <div class="col-lg-6">
                <div class="row g-4">
                  <!-- Gambar Carousel -->
                  <div class="relative w-full max-w-sm mx-auto mt-5 overflow-hidden rounded-xl">
                    <div id="beritaSliderMobile" class="flex transition-transform duration-700 ease-in-out">
                      <!-- Gambar mobile akan dirender dari JS -->
                    </div>
                    <!-- Indicators -->
                    <div id="beritaIndicatorsMobile" class="absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                      <!-- Dots akan dirender dari JS -->
                    </div>
                  </div>

                </div>
              </div>
              {{-- kolom Bawah Berita end --}}
              
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
              <!-- Pagination Interactive -->
              <div class="mt-6 flex justify-center items-center gap-1 text-sm font-medium" id="beritaPaginationInteractiveMobile">

              </div>
            </div>
            {{-- Mobile view end --}}

            
          </div>
    
        </div>
      </div>
    </section>
    <!-- Berita Kawan Section End -->
    {{-- hero --}}
    <script src="{{ asset('assets/js/hero.js') }}"></script>
    {{-- lini produk --}}
    <script src="{{ asset('assets/js/liniProduk.js') }}"></script>
    {{-- Promo Banner --}}
    <script src="{{ asset('assets/js/promo.js') }}"></script>
    {{-- Merchandise --}}
    <script src="{{ asset('assets/js/merchandise.js') }}"></script>
    {{-- Berita Kawan --}}
    <script src="{{ asset('assets/js/beritaKawan.js') }}"></script>
    {{-- Cerita Kawan --}}
    <script src="{{ asset('assets/js/cerita.js') }}"></script>
    <script>
      //lini produk
      window.menusData = @json($menus);
      window.filenameMapData = @json($filenameMap);

      // Promo Produk
      window.promoses = @json($promoImages);
      
      // Merchandise
      window.merchandiseProducts = @json($merchandises);

      // Cerita Kawan
      window.ceritases = @json($ceritas);

      // Berita Kawan
      window.beritaKawan = @json($beritaKawan);
    </script>
@endsection