@extends('layouts.layout')

@section('homepage')
 <!-- Berita Section -->
 <section id="berita" class="berita section">

    <!-- Section Title -->
    <div class="section-title text-center mt-4" data-aos="fade-up">
      <h2>Berita Kawan</h2>
      <p class="italic text-sm">Tonny Oscar <br> 5th July 2024</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-12">
        <img src="{{asset('assets/img/berita-kawan/1.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="row gy-4 justify-content-center">
        <div class="col-lg-12 content">
          <h2>RAW Club: Penanda Kebangkitan Skena Denim</h2>
          <p class="fst-italic py-3 text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p class="py-3 text-justify">
            Flores tidak hanya dikenal karena alamnya yang indah, tetapi juga karena kopinya yang khas. 
            Bajawa Semi-Washed hadir membawa cerita dari dataran tinggi yang kaya akan sejarah dan budaya kopi. 
            Diproses dengan teknik semi-washed, kopi ini menawarkan keseimbangan antara rasa cerah dan tubuh yang kuat. Dari kebun ke cangkir, perjalanan kopi ini adalah bukti kerja keras petani lokal dan keunikan tanah Flores. Kini, 
            Anda bisa menikmati setiap tegukan dengan pemahaman bahwa ada cerita panjang di balik rasanya.
          </p>
        </div>
      </div>

    </div>

  </section><!-- Berita Section -->
@endsection