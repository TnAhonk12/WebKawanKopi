@extends('layouts.layout')
@section('homepage')
<section id="roastery" class="roastery section relative h-full transition-all duration-150 ease-in">
  <div class="container mx-auto">
    <div class="row align-items-start mx-auto" style="margin-block: 4rem;">
      
      {{-- desktop view --}}
        <!-- Kolom Kiri: Judul dan foto -->
        @if (count($data) > 0)
          @php $kategori = $data[0]; @endphp
          <div class="col-lg-12 mb-4 mt-4 hidden lg:flex flex-col justify-between h-full">
            
            <!-- Judul -->
            <div class="col-lg-12 mb-4">
              <h1 class="fw-bold mb-2">Kawan Roastery</h1>
              <p class="text-black italic">{{ $kategori['kategori'] }}</p>
            </div>

            <!-- Wrapper untuk tengahkan galeri -->
            <div class="w-full flex justify-center">
              <div class="flex gap-16  no-scrollbar pb-6">
                <!-- Item 1 -->
                @foreach ($kategori['items'] as $item)
                <a href="{{ route('roastery.show', ['id' => $item['id']]) }}">
                  <div class="relative justify-center cursor-pointer text-center roastery-item" data-index="0">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"
                      class="w-[220px] h-[220px] object-cover rounded mb-2 mx-auto" />
                    <h4 class="font-bold text-black mb-0" style="font-weight: 600;">{{ $item['name'] }}</h4>
                    <p class="text-sm fw-semibold text-black">IDR {{ $item['price'] }}K</p>
                  </div>
                </a>
                @endforeach
              </div>
            </div>

          </div>
          @endif
      <!-- Kolom Kiri end -->
        {{-- desktop view end --}}

        {{-- Mobile view --}}
        @if (count($data) > 0)
          @php $kategori = $data[0]; @endphp
        <div class="col-lg-6 lg:hidden flex flex-col justify-between w-full">

          <!-- Judul -->
          <div class="col-lg-12 mb-4 text-center">
            <h1 class="fw-bold mb-2">Kawan Roastery</h1>
            <p class="text-black italic">{{ $kategori['kategori'] }}</p>
          </div>

          <!-- Grid Foto Lokasi -->
          <div class="grid grid-cols-2 gap-4 px-8 py-8">

            <!-- Item 1 -->
            @foreach ($kategori['items'] as $item)
            <div class="text-center roastery-item">
              <a href="{{ route('roastery.show', ['id' => $item['id']]) }}">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"
                  class="w-full h-auto object-cover rounded mb-2">
                <h4 class="font-bold text-black mb-0" style="font-weight: 600;">{{ $item['name'] }}</h4>
                <p class="text-sm fw-semibold text-black">IDR {{ $item['price'] }}K</p>
              </a>
            </div>
            @endforeach

            <!-- Item 2 -->
            {{-- <div class="text-center roastery-item">
              <a href="/roastery-item">
              <img src="{{ asset('assets/img/roastery/Kintanami-Natural.jpg') }}" alt="Kintanami-Natural"
                class="w-full h-auto object-cover rounded mb-2">
              <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Kintanami Natural</h4>
              <p class="text-sm fw-semibold text-black">IDR 190K</p>
              </a>
            </div> --}}

            <!-- Item 3 -->
            {{-- <div class="text-center roastery-item">
              <a href="/roastery-item">
                <img src="{{ asset('assets/img/roastery/Bajawa-Semi-Washed.jpg') }}" alt="Bajawa-Semi-Washed"
                  class="w-full h-auto object-cover rounded mb-2">
                <h4 class="font-bold text-black mb-0" style="font-weight: 600;">Bajawa Semi Washed</h4>
                <p class="text-sm fw-semibold text-black">IDR 150K</p>
              </a>
            </div> --}}

          </div>

        </div>
        @endif
        {{-- Mobile view end --}}

    </div>

  </div>
 
  </section>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const items = document.querySelectorAll('.roastery-item');
      items.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('animate-in');
        }, index * 150); // delay per item biar animasinya berurutan
      });
    });
  </script>
  

  @endsection