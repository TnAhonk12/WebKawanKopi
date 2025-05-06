@extends('layouts.layout')

<section id="find-us" class="find-us relative h-full transition-all duration-150 ease-in">
    <div class="container mx-auto">
      <div class="row align-items-start mx-auto" style="margin-block: 4rem;">
        
        {{-- desktop view --}}
          <!-- Kolom Kiri: Judul dan foto -->
            <div class="col-lg-12 mb-4 mt-4 hidden lg:flex flex-col justify-between h-full">
              
              <!-- Judul -->
              <div class="col-lg-12 mb-4 hidden lg:flex flex-col">
                <h1 class="fw-bold mb-2">Find Us</h1>
                <p class="text-black italic">Our Store</p>
              </div>

              <!-- Wrapper untuk tengahkan galeri -->
              <div class="w-full flex justify-center">
                <div class="flex gap-4 overflow-x-auto no-scrollbar pb-6">
                  <!-- Lokasi 1 -->
                  <a href="/ourstore-item">
                    <div class="location-item cursor-pointer text-center active" data-index="0">
                      <img src="{{ asset('assets/img/Find-Us/1.jpg') }}" alt="Kawan Kopi, Dipatiukur"
                      class="w-[220px] h-[220px] object-cover rounded mb-2" />
                      <p class="text-sm font-semibold text-[#8B5E3B]">Kawan Kopi, Dipatiukur</p>
                    </div>
                  </a>

                  <!-- Lokasi 2 -->
                  <a href="/ourstore-item">
                    <div class="location-item cursor-pointer text-center" data-index="1">
                      <img src="{{ asset('assets/img/Find-Us/2.jpg') }}" alt="Kawan Kopi, Cimandiri"
                        class="w-[220px] h-[220px] object-cover rounded mb-2" />
                      <p class="text-sm font-medium text-black">Kawan Kopi, Cimandiri</p>
                    </div>
                  </a>

                  <!-- Lokasi 3 -->
                  <a href="/ourstore-item">
                    <div class="location-item cursor-pointer text-center" data-index="2">
                      <img src="{{ asset('assets/img/Find-Us/3.jpg') }}" alt="Kawan Kopi, Talaga Bodas"
                        class="w-[220px] h-[220px] object-cover rounded mb-2" />
                      <p class="text-sm font-medium text-black">Kawan Kopi, Talaga Bodas</p>
                    </div>
                  </a>

                  <!-- Lokasi 4 -->
                  <a href="/ourstore-item">
                  <div class="location-item cursor-pointer text-center" data-index="3">
                    <img src="{{ asset('assets/img/Find-Us/4.jpg') }}" alt="Kawan Kopi, Ciumbuleuit"
                      class="w-[220px] h-[220px] object-cover rounded mb-2" />
                    <p class="text-sm font-medium text-black">Kawan Kopi, Ciumbuleuit</p>
                  </div>
                  </a>

                </div>
              </div>

            </div>
        <!-- Kolom Kiri end -->
          {{-- desktop view end --}}

          {{-- Mobile view --}}
          <div class="col-lg-6 lg:hidden flex flex-col justify-between w-full">

            <!-- Judul -->
            <div class="col-lg-12 mb-4 lg:hidden text-center">
              <h1 class="fw-bold mb-2">Find Us</h1>
              <p class="text-black italic">Our Store</p>
            </div>

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

