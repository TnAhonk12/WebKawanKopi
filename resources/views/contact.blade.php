@extends('layouts.layout')
@section('homepage')
<!-- Roastery Section -->
<section id="contact" class="contact section relative h-auto transition-all duration-150 ease-in">
  <div class="container mx-auto">
    <div class="row align-items-start mx-auto" style="margin-block: 4rem;">
      
      {{-- desktop view --}}
        <!-- Kolom Kiri: Teks dan Logo -->
        <div class="col-lg-6 mb-4 hidden lg:flex flex-col justify-between h-full">

          <h1 class="fw-bold mb-2">Find Us</h1>
          <p class="text-black italic">Contact</p>
          
          <div class="mt-[10rem] mr-[5rem]">
            <p class="text-justify mt-auto text-xl italic">
              Please fill out the form below to send us an email.
            </p>
            <p class="text-justify text-xl mt-2">
              Since its founding in the 80s, Studio Agatho has
              been the go-to company for various design
              needs. Its offerings range from graphic design
              and branding strategy to website development
              and video production.
            </p>
            <p class="text-justify text-xl mt-2">
              <span class="fw-bold"> E-mail: </span> 
              <br>
              <a href="mailto:Contact@kawankopi.id">
                Contact@kawankopi.id
              </a>
            </p>
          </div>
          
        </div>

        <!-- Kolom Kanan: Produk -->
        <div class="col-lg-6 hidden lg:flex flex-col justify-between h-full">
          <div class="row g-4">

            <form  class="email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="6" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-right">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>
        </div>
        {{-- kolom end --}}
        {{-- desktop view end --}}

        {{-- mobile view --}}
        <!-- Kolom: Judul -->
        <div class="col-lg-6 mb-4 lg:hidden flex-col justify-between h-full">
          <h1 class="fw-bold mb-2 text-center">Find Us</h1>
          <p class="text-black italic text-center">Contact</p>

           <!-- Kolom: text -->
           <div class="mt-15 text-center">
            <p class="text-justify mt-auto text-sm italic">
              Please fill out the form below to send us an email.
            </p>
            <p class="text-justify text-sm mt-2">
              Since its founding in the 80s, Studio Agatho has
              been the go-to company for various design
              needs. Its offerings range from graphic design
              and branding strategy to website development
              and video production.
            </p>
            <p class="text-justify text-sm mt-2">
              <span class="fw-bold"> E-mail: </span> 
              <br>
              <a href="mailto:Contact@kawankopi.id">
                Contact@kawankopi.id
              </a>
            </p>
          </div>
          {{-- kolom text end --}}

            <!-- Kolom: Produk -->
          <div class="col-lg-6">
            <div class="row g-4">

              <form  class="email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <label for="name-field" class="pb-2">Your Name</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="">
                  </div>
  
                  <div class="col-md-6">
                    <label for="email-field" class="pb-2">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="">
                  </div>
  
                  <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                  </div>
  
                  <div class="col-md-12">
                    <label for="message-field" class="pb-2">Message</label>
                    <textarea class="form-control" name="message" rows="6" id="message-field" required=""></textarea>
                  </div>
  
                  <div class="col-md-12 text-right">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>

            </div>
          </div>
          {{-- kolom Produk end --}}
          
         

        </div>
        {{-- mobile view end --}}
    </div>
  </div>
</section>
<!-- Roastery Section End -->

@endsection