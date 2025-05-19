@extends('layouts.layout')
@section('homepage')
<!-- Berita Section -->
 <section class="cerita section">
  <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center">
    
    <!-- Left Text Section -->
    <div class="w-full lg:w-1/2 text-center lg:text-left">
      <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-4">
        Aku <span class="text-black">Mpip Damngood</span><br>
        Ini Ceritaku di Kawan Kopi
      </h1>
      <p class="mb-6 text-lg text-black/90">
        Dari jauh aku datang, dan menemukan tempat yang nyaman untuk berbagi cerita, aroma kopi, dan tawa bersama.
      </p>
      <div class="flex justify-center space-x-4">
        <a href="#cerita-detail" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded hover:bg-gray-100 transition">
          Lihat Cerita
        </a>
        {{-- <a href="#portfolio" class="bg-white/20 backdrop-blur px-6 py-3 rounded font-semibold hover:bg-white hover:text-blue-600 transition">
          Kawan Lainnya
        </a> --}}
      </div>
    </div>

    <!-- Right Image Section -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <img src="{{ asset('assets/img/cerita-kawan/Mpip-Damngood.png') }}"
          alt="Foto Kawan"
          class="max-h-[600px] w-[600px] object-contain">
    </div>

  </div>
</section>

<!-- Berita Section -->

<section id="cerita-detail" class="cerita py-20">
  <div class="container mx-auto flex flex-col md:flex-row items-start justify-center gap-10 px-6">
    
    <!-- Gambar -->
    <div class="md:w-1/2 flex justify-center">
      <img src="{{ asset('assets/img/berita-kawan/1.jpg') }}" alt="Foto Kawan" class="rounded-lg shadow-md w-full md:w-full">
    </div>

    <!-- Konten -->
    <div class="md:w-1/2 max-w-xl">
      <!-- Tabs -->
      {{-- <div class="flex space-x-2 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 text-sm font-semibold rounded shadow">
          ABOUT ME
        </button>
        <button class="bg-white text-gray-800 px-4 py-2 text-sm font-semibold rounded border hover:bg-gray-100 transition">
          SKILLS
        </button>
        <button class="bg-white text-gray-800 px-4 py-2 text-sm font-semibold rounded border hover:bg-gray-100 transition">
          EXPERIENCE
        </button>
      </div> --}}

      <!-- Isi Cerita -->
      <h2 class="text-3xl font-bold mb-4">My Story</h2>
      <p class="text-gray-700 mb-4">
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
        a large language ocean.
      </p>

      <p class="text-lg font-semibold text-gray-900 mb-4">
        I Do Web Design & Development since I was 18 Years Old
      </p>

      <p class="text-gray-700">
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
        there live the blind texts.
      </p>

      <iframe width="420" height="315"
        src="https://www.youtube.com/embed/Nm3Lq1CYeKM">
      </iframe> 
    </div>
  </div>
</section>

<script>
  
</script>
@endsection