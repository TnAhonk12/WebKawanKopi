@extends('layouts.layout')



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
              <div class="flex justify-center items-center col-span-3 mt-4">
                <a href="#"
                  class="bg-white text-black font-bold  text-xm px-6 py-3 rounded hover:bg-gray transition">
                    Lihat Semua Toko
                </a>
              </div>
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

