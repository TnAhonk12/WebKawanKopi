@extends('layouts.layout')

@section('homepage')

  <!-- hero Section -->
 
    <section id="hero" class="hero section flex justify-center">
      <img src="{{ asset('assets/img/character/charIdle.webp') }}" class="character" id="character" alt="character" />
      <img src="{{ asset('assets/img/hero/depan-hero.webp') }}" class="tableCashier" alt="Table Cashier" />
    </section>

  <!-- /hero Section -->

    <section id="lini-produk" class="lini-produk section">
      <div class="container section-title" data-aos="fade-up">
        <h1>Lini Produk</h1>
      </div>
    
      <div class="container d-flex flex-wrap justify-content-center align-items-start gap-5" data-aos="fade-up" data-aos-delay="100">
          
            <!-- Kiri: Carousel Produk -->
        <div class="product-carousel text-center">
          <button class="carousel-control prev">&lt;</button>
          <img src="assets/img/KSK-Baru.jpg" class="img-fluid" alt="KSK Baru">
          <button class="carousel-control next">&gt;</button>
          <p class="product-name">KSK Baru<br><strong>Rp 10.000</strong></p>
        </div>

        <!-- Kanan: Kategori dan Produk -->
        <div class="kategori-produk text-center">
          <div class="category-buttons">
            <button class="category">Black-White</button>
            <button class="category active">Kopi Susu Kawan dsadasdasda(KSK)</button>
            <button class="category">Chocolate, Tea & Matcha</button>
            <button class="category">Signature</button>
            <button class="category">Bottle</button>
            <button class="category">Food</button>
            <button class="category">ani ani</button>
          </div>

          <div class="product-list">
            <p>KSK Lama</p>
            <p class="active">KSK Baru</p>
            <p>KSK Keju</p>
            <p>KSK Roasted Almond</p>
          </div>          
        </div>
        
      </div>
      
    </section>

      
    <section id="merchandise" class="merchandise section">
      <div class="container section-title" data-aos="fade-up">
        <h1>Merchandise</h1>
        <div class="shop-icons">
          <a href="#" class="me-2"><img src="assets/img/tokopedia-icon.png" alt="Tokopedia" class="img-fluid"></a>
          <a href="#"><img src="assets/img/shopee-icon.png" alt="Shopee" class="img-fluid"></a>
        </div>
      </div>
  
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row merchandise-items">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="merchandise-item text-center">
              <img src="assets/img/merchandise/tshirt.jpg" alt="T-shirt" class="img-fluid">
              <h4>Tshirt</h4>
              <p>IDR 125K</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="merchandise-item text-center">
              <img src="assets/img/merchandise/hat.jpg" alt="Hat" class="img-fluid">
              <h4>Hat</h4>
              <p>IDR 100K</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="merchandise-item text-center">
              <img src="assets/img/merchandise/tumbler1.jpg" alt="Tumbler 1" class="img-fluid">
              <h4>Tumbler 1</h4>
              <p>IDR 150K</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="merchandise-item text-center">
              <img src="assets/img/merchandise/tumbler2.jpg" alt="Tumbler 2" class="img-fluid">
              <h4>Tumbler 2</h4>
              <p>IDR 100K</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="merchandise-item text-center">
              <img src="assets/img/merchandise/reusable-cup.jpg" alt="Reusable Cup" class="img-fluid">
              <h4>Reusable Cup</h4>
              <p>IDR 100K</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="merchandise-item text-center">
              <img src="assets/img/merchandise/totebag.jpg" alt="Totebag" class="img-fluid">
              <h4>Totebag</h4>
              <p>IDR 80K</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section id="lini-produk" class="lini-produk section">

@endsection