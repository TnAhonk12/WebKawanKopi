@extends('layouts.layout')

@section('homepage')
 <!-- Berita Section -->
 <section id="berita" class="berita section">

   <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-6 content">
          <!-- Section Title -->
          <div class="section-title text-center mt-4" data-aos="fade-up">
            <h2>Berita Kawan</h2>
            <p class="italic text-sm">{{ $data['author'] }} <br> {{ $data['createdAt'] }}</p>
          </div>
          <!-- End Section Title -->
          <h2>{{ $data['title'] }}</h2>
          <p id="descTop" class="fst-italic py-3 text-justify"></p>
          </p>
  
          <div class="relative w-full max-w-[1200px] max-h-[500px] mx-auto rounded-xl hidden overflow-hidden shadow-lg sm:block">
            <!-- Desktop Carousel Inner -->
            <div id="beritaSliderDesktop" class="flex transition-transform duration-500 ease-in-out">
                @foreach ($data['images'] as $img)
                  <img src="{{ $img }}" class="object-contain max-h-[430px] w-full mx-auto flex-shrink-0 rounded-l" alt="Gambar Berita">
                @endforeach
            </div>

            <!-- Desktop Controls -->
            <button id="prevberitaDesktop" class="absolute left-3 top-1/2 -translate-y-1/2 z-10">
              <svg class="w-10 h-10 text-white rounded-full" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button id="nextberitaDesktop" class="absolute right-3 top-1/2 -translate-y-1/2 z-10">
              <svg class="w-10 h-10 text-white rounded-full" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            </button>

            <!-- Desktop Indicators -->
            <div id="beritaIndicatorsDesktop" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                @foreach ($data['images'] as $index => $img)
                  <span data-index="{{ $index }}" class="w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                @endforeach
            </div>
          </div>

          <div class="relative w-full max-w-sm mx-auto overflow-hidden lg:hidden rounded-xl">
            <div id="beritaSliderMobile" class="flex transition-transform duration-700 ease-in-out">
               @foreach ($data['images'] as $img)
                  <img src="{{ $img }}" class="object-contain max-h-[250px] w-full mx-auto flex-shrink-0 rounded-l" alt="Gambar Berita">
                @endforeach
            </div>
            <!-- Indicators -->
            <div id="beritaIndicatorsMobile" class="absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                @foreach ($data['images'] as $index => $img)
                  <span data-index="{{ $index }}" class="w-2.5 h-2.5 bg-white rounded-full opacity-50 cursor-pointer"></span>
                @endforeach
            </div>
          </div>
          <p id="descBottom" class="py-3 text-justify"></p>
        </div>
        
      </div>
    </div>

  </section>
  <!-- Berita Section -->

<script>
  window.fullBeritaDesc = @json($data['desc']);
</script>
<script src="{{ asset('assets/js/beritaKawanItem.js') }}"></script>

@endsection