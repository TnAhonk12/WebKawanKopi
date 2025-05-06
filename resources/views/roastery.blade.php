@extends('layouts.layout')
<section id="roastery" class="roastery relative h-full transition-all duration-150 ease-in">
  <div class="container mx-auto">
    <div class="row align-items-start mx-auto" style="margin-block: 4rem;">
      
      {{-- desktop view --}}
        <!-- Kolom Kiri: Judul dan foto -->
          <div class="col-lg-12 mb-4 mt-4 hidden lg:flex flex-col justify-between h-full">
            
            <!-- Judul -->
            <div class="col-lg-12 mb-4">
              <h1 class="fw-bold mb-2">Kawan Roastery</h1>
              <p class="text-black italic">Single Origin</p>
            </div>

            <!-- Wrapper untuk tengahkan galeri -->
            <div class="w-full flex justify-center">
              <div class="flex gap-16 overflow-x-auto no-scrollbar pb-6">
                <!-- Item 1 -->
                <a href="/roastery-item">
                  <div class="relative justify-center cursor-pointer text-center" data-index="0">
                    <img src="{{ asset('assets/img/roastery/Palintang-Honey.jpg') }}" alt="Palintang-Honey"
                      class="w-[220px] h-[220px] object-cover rounded mb-2 mx-auto" />
                    <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Palintang Honey</h4>
                    <p class="text-sm fw-semibold text-black">IDR 120K</p>
                  </div>
                </a>

                
                <!-- Item 2 -->
                <a href="/roastery-item">
                  <div class="relative justify-center cursor-pointer text-center" data-index="2">
                    <img src="{{ asset('assets/img/roastery/Kintanami-Natural.jpg') }}" alt="Kintanami-Natural"
                      class="w-[220px] h-[220px] object-cover rounded mb-2 mx-auto" />
                    <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Kintanami Natural</h4>
                    <p class="text-sm fw-semibold text-black">IDR 190K</p>
                  </div>
                </a>
                
                <!-- Item 3 -->
                <a href="/roastery-item">
                  <div class="relative justify-center cursor-pointer text-center" data-index="1">
                    <img src="{{ asset('assets/img/roastery/Bajawa-Semi-Washed.jpg') }}" alt="Bajawa-Semi-Washed"
                      class="w-[220px] h-[220px] object-cover rounded mb-2 mx-auto" />
                    <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Bajawa Semi Washed</h4>
                    <p class="text-sm fw-semibold text-black">IDR 150K</p>
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
          <div class="col-lg-12 mb-4 text-center">
            <h1 class="fw-bold mb-2">Kawan Roastery</h1>
            <p class="text-black italic">Single Origin</p>
          </div>

          <!-- Grid Foto Lokasi -->
          <div class="grid grid-cols-2 gap-4 px-8 py-8">

            <!-- Lokasi 1 -->
            <div class="text-center">
              <a href="#">
                <img src="{{ asset('assets/img/roastery/Palintang-Honey.jpg') }}" alt="Palintang-Honey"
                  class="w-full h-auto object-cover rounded mb-2">
                <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Palintang Honey</h4>
                <p class="text-sm fw-semibold text-black">IDR 120K</p>
              </a>
            </div>

            <!-- Lokasi 2 -->
            <div class="text-center">
              <a href="#">
              <img src="{{ asset('assets/img/roastery/Kintanami-Natural.jpg') }}" alt="Kintanami-Natural"
                class="w-full h-auto object-cover rounded mb-2">
              <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Kintanami Natural</h4>
              <p class="text-sm fw-semibold text-black">IDR 190K</p>
              </a>
            </div>

            <!-- Lokasi 3 -->
            <div class="text-center">
              <a href="#">
                <img src="{{ asset('assets/img/roastery/Bajawa-Semi-Washed.jpg') }}" alt="Bajawa-Semi-Washed"
                  class="w-full h-auto object-cover rounded mb-2">
                <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Bajawa Semi Washed</h4>
                <p class="text-sm fw-semibold text-black">IDR 150K</p>
              </a>
            </div>

          </div>

        </div>
        {{-- Mobile view end --}}

    </div>

  </div>
 
  </section>

