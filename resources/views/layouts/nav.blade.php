<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="/#hero" class="logo d-flex align-items-center me-auto me-xl-0 d-xl-none">
        <img src="{{ asset('assets/img/kawan/logo.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu d-flex justify-content-center w-100">
        <ul >
          <li><a href="/#lini-produk" class="{{ request()->is('/#lini-produk') ? 'active' : '' }}">Lini Produk</a></li>
          <li><a href="/#merchandise" class="{{ request()->is('/#merchandise') ? 'active' : '' }}">Merchandise</a></li>
          <li class="dropdown"><a href="#" class="{{ request()->is('roastery*') ? 'active' : '' }}"><span>Roastery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @foreach ($navbarRoasteryCategories as $category)
                <li>
                  <a href="{{ route('roastery.index', ['kategori' => $category->id]) }}" 
                    class="{{ request()->fullUrlIs(route('roastery.index', ['kategori' => $category->id])) ? 'active' : '' }}">
                    {{ $category->nama_roastery }}
                  </a>
                </li>
              @endforeach
            </ul>
          </li>        
          
          <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('assets/img/kawan/logo.png') }}" alt="">
          </a>
          
          <li><a href="/#cerita-kawan">Cerita Kawan</a></li>
          <li><a href="/#berita-kawan">Info Kawan</a></li>
          <li class="dropdown"><a href="#" class="{{ request()->is('ourstore') || request()->is('contact') ? 'active' : '' }}"><span>Find Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/ourstore" class="{{ request()->is('ourstore') ? 'active' : '' }}">Our Store</a></li>
              <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
              <li><a href="/tentang">Tentang Kawan</a></li>
            </ul>
          </li> 
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
