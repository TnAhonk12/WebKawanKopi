// hero
document.addEventListener('DOMContentLoaded', function () {
  const character = document.getElementById("character");
  const hero = document.getElementById("hero");

  let mouseX = 0;
  let posX = window.innerWidth / 2;
  let currentDirection = null;
  let isHovering = false;
  let lastMoveTime = Date.now();
  let currentScrollRatio = 0;
  let lastScrollTime = Date.now();

  if (hero) {
    document.addEventListener("mousemove", function (e) {
      const heroRect = hero.getBoundingClientRect();
      const inView = heroRect.top < window.innerHeight && heroRect.bottom > 0;
      if (inView && window.innerWidth >= 768) {
        mouseX = e.clientX;
        lastMoveTime = Date.now();

        const direction = e.clientX > posX ? "right" : "left";
        if (direction !== currentDirection && !isHovering) {
          currentDirection = direction;
          const newSrc = direction === "right"
            ? "/assets/img/character/charRight.webp"
            : "/assets/img/character/charLeft.webp";
          setcharacterImage(newSrc);
        }
      }
    });
  }

  function setcharacterImage(path) {
    if (!character.src.includes(path)) {
      character.src = path;
    }
  }

// MOBILE: Pantau scroll dan ubah arah karakter
  if (window.innerWidth < 768) {
    hero.addEventListener("scroll", () => {
      lastScrollTime = Date.now();

      const scrollX = hero.scrollLeft;
      const maxScroll = hero.scrollWidth - hero.clientWidth;
      const scrollRatio = maxScroll > 0 ? scrollX / maxScroll : 0;

      const direction = scrollRatio > currentScrollRatio ? "right" : "left";
      if (direction !== currentDirection && !isHovering) {
        currentDirection = direction;
        const newSrc = direction === "right"
          ? "/assets/img/character/charRight.webp"
          : "/assets/img/character/charLeft.webp";
        setcharacterImage(newSrc);
      }

      currentScrollRatio = scrollRatio;
    });
  }
  
  function animate() {
      if (hero) {
      const heroRect = hero.getBoundingClientRect();
      const inView = heroRect.top < window.innerHeight && heroRect.bottom > 0;
      const now = Date.now();

      if (inView) {
        if (window.innerWidth >= 768) {
          // DESKTOP - Mouse movement
          if (now - lastMoveTime > 500 && !isHovering && !character.src.includes("charIdle.webp")) {
            setcharacterImage("/assets/img/character/charIdle.webp");
            currentDirection = null;
          }

          posX += (mouseX - posX) * 0.1;
          const clampedX = Math.min(Math.max(posX, 100), 1400);
          character.style.transform = `translateX(${clampedX}px)`;

        } else {
          // MOBILE - Scroll movement
          const scrollX = hero.scrollLeft;
          const maxScroll = hero.scrollWidth - hero.clientWidth;
          const scrollRatio = maxScroll > 0 ? scrollX / maxScroll : 0;

          const characterMin = 100;
          const characterMax = 1400;
          const charX = characterMin + (characterMax - characterMin) * scrollRatio;

          character.style.transform = `translateX(${Math.round(charX)}px)`;

          // IDLE setelah tidak scroll selama 500ms
          if (now - lastScrollTime > 500 && !character.src.includes("charIdle.webp")) {
            setcharacterImage("/assets/img/character/charIdle.webp");
            currentDirection = null;
          }
        }

        character.style.display = "block";
      } else {
        character.style.display = "none";
      }

      requestAnimationFrame(animate);
    }
  }

  animate();

  // Navbar background toggle based on scroll position
  const header = document.querySelector('.header');
  window.addEventListener('scroll', () => {
    const heroSection = document.querySelector('#hero');
    if (heroSection) {
      const heroTop = heroSection.getBoundingClientRect().top;
      if (heroTop <= 0) {
        header.classList.remove('header-hidden');
      } else {
        header.classList.add('header-hidden');
      }
    }
  });

  window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 10) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
});

// Cerita Kawan

document.addEventListener('DOMContentLoaded', function () {
  const scrollContainer = document.getElementById('ceritaKawanScroll');
  if(scrollContainer){

    let isDown = false;
    let startX;
    let scrollLeft;

    scrollContainer.addEventListener('mousedown', (e) => {
      isDown = true;
      scrollContainer.classList.add('cursor-grabbing');

      // Disable pointer events ke child waktu drag
      scrollContainer.querySelectorAll('*').forEach(child => {
        child.style.pointerEvents = 'none';
      });

      startX = e.pageX - scrollContainer.offsetLeft;
      scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener('mouseleave', () => {
      isDown = false;
      scrollContainer.classList.remove('cursor-grabbing');

      // Balikin pointer events
      scrollContainer.querySelectorAll('*').forEach(child => {
        child.style.pointerEvents = '';
      });
    });

    scrollContainer.addEventListener('mouseup', () => {
      isDown = false;
      scrollContainer.classList.remove('cursor-grabbing');

      // Balikin pointer events
      scrollContainer.querySelectorAll('*').forEach(child => {
        child.style.pointerEvents = '';
      });
    });

    scrollContainer.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - scrollContainer.offsetLeft;
      const walk = (x - startX) * 2;
      scrollContainer.scrollLeft = scrollLeft - walk;
    });

    // Support Mobile
    scrollContainer.addEventListener('touchstart', (e) => {
      startX = e.touches[0].pageX - scrollContainer.offsetLeft;
      scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener('touchmove', (e) => {
      const x = e.touches[0].pageX - scrollContainer.offsetLeft;
      const walk = (x - startX) * 2;
      scrollContainer.scrollLeft = scrollLeft - walk;
    });
  }
});

  document.addEventListener('DOMContentLoaded', () => {
    const scrollContainer = document.getElementById('ceritaKawanScroll');
    if(scrollContainer){
      const scrollHint = document.getElementById('scrollHint');
  
      let hintHidden = false;
  
      scrollContainer.addEventListener('scroll', () => {
        if (!hintHidden && scrollContainer.scrollLeft > 10) {
          scrollHint.classList.add('opacity-0');
          hintHidden = true;
        }
      });
    }
  });

/**
 * Apply .scrolled class to the body as the page is scrolled down
 */
function toggleScrolled() {
  const selectBody = document.querySelector('body');
  const selectHeader = document.querySelector('#header');
  if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
  window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
}

document.addEventListener('scroll', toggleScrolled);
window.addEventListener('load', toggleScrolled);

// Scroll NavBar

document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const targetId = this.getAttribute('href').slice(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      const navbarHeight = 100; // Ganti 100 ke berapa px tinggi navbar kamu
      const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navbarHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  });
});

/**
 * Mobile nav toggle
 */
const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

function mobileNavToogle() {
  document.querySelector('body').classList.toggle('mobile-nav-active');
  mobileNavToggleBtn.classList.toggle('bi-list');
  mobileNavToggleBtn.classList.toggle('bi-x');

  // Tampilkan atau sembunyikan social links
  if (navMenu.classList.contains('active')) {
    socialLinks.style.display = "flex";
  } else {
    socialLinks.style.display = "none";
  }
}
mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

/**
 * Hide mobile nav on same-page/hash links
 */
document.querySelectorAll('#navmenu a').forEach(navmenu => {
  navmenu.addEventListener('click', () => {
    if (document.querySelector('.mobile-nav-active')) {
      mobileNavToogle();
    }
  });

});

/**
 * Toggle mobile nav dropdowns
 */
document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
  navmenu.addEventListener('click', function(e) {
    e.preventDefault();
    this.parentNode.classList.toggle('active');
    this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
    e.stopImmediatePropagation();
  });
});

/**
 * Preloader
 */
const preloader = document.querySelector('#preloader');
if (preloader) {
  window.addEventListener('load', () => {
    preloader.remove();
  });
}

/**
 * Scroll top button
 */
let scrollTop = document.querySelector('.scroll-top');

function toggleScrollTop() {
  if (scrollTop) {
    window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
  }
}
scrollTop.addEventListener('click', (e) => {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

window.addEventListener('load', toggleScrollTop);
document.addEventListener('scroll', toggleScrollTop);

  

/**
 * Init swiper sliders
 */
function initSwiper() {
  document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
    let config = JSON.parse(
      swiperElement.querySelector(".swiper-config").innerHTML.trim()
    );

    if (swiperElement.classList.contains("swiper-tab")) {
      initSwiperWithCustomPagination(swiperElement, config);
    } else {
      new Swiper(swiperElement, config);
    }
  });
}

window.addEventListener("load", initSwiper);

/**
 * Init isotope layout and filters
 */
document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
  let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
  let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
  let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

  let initIsotope;
  imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
    initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
      itemSelector: '.isotope-item',
      layoutMode: layout,
      filter: filter,
      sortBy: sort
    });
  });

  isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
    filters.addEventListener('click', function() {
      isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
      this.classList.add('filter-active');
      initIsotope.arrange({
        filter: this.getAttribute('data-filter')
      });
      if (typeof aosInit === 'function') {
        aosInit();
      }
    }, false);
  });

});


// Merchandise Modal Toggle (Desktop)
function openModal(title, image, price, desc) {
  const modal = document.getElementById("productModal");
  document.getElementById("modalTitle").innerText = title;
  document.getElementById("modalImage").src = image;
  document.getElementById("modalPrice").innerText = price;
  document.getElementById("modalDesc").innerText = desc;
  modal.classList.remove("hidden");

  // Klik di luar modal content untuk menutup
  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      closeModal();
    }
  });
}

function closeModal() {
  const modal = document.getElementById("productModal");
  modal.classList.add("hidden");
}

// Merchandise Modal Navigation (Mobile)
const products = [
  {
    name: "Totebag",
    image: "assets/img/Merchandise/Totebag.jpg",
    price: "IDR 125K"
  },
  {
    name: "Tshirt",
    image: "assets/img/Merchandise/Tshirt.jpg",
    price: "IDR 125K"
  },
  {
    name: "Hat",
    image: "assets/img/Merchandise/Hat.jpg",
    price: "IDR 100K"
  },
  {
    name: "Tumbler 1",
    image: "assets/img/Merchandise/Tumbler1.jpg",
    price: "IDR 150K"
  },
  {
    name: "Tumbler 2",
    image: "assets/img/Merchandise/Tumbler2.jpg",
    price: "IDR 100K"
  },
  {
    name: "Reusable Cup",
    image: "assets/img/Merchandise/Mug.jpg",
    price: "IDR 100K"
  }
];

let currentIndex = 0;

function renderProduct(index) {
  const product = products[index];
  if (product) {
    document.getElementById("productImage").src = product.image;
    document.getElementById("productName").innerText = product.name;
    document.getElementById("productPrice").innerText = product.price;
  }

  renderProductList(index);
}

function renderProductList(excludeIndex) {
  const container = document.getElementById("productListContainer");
  if (!container) return;

  container.innerHTML = ""; // Kosongkan dulu

  products.forEach((product, index) => {
    if (index === excludeIndex) return; // Lewati produk utama

    const item = document.createElement("div");
    item.className = "flex-shrink-0 w-24 text-center cursor-pointer";
    item.innerHTML = `
      <img src="${product.image}" class="w-full h-24 object-cover rounded mb-1" />
      <p class="text-xs font-medium mb-0">${product.name}</p>
      <p class="text-xs text-[#8B5E3B] font-bold">${product.price}</p>
    `;
    item.onclick = () => setProduct(index);
    container.appendChild(item);
  });

  // Tambahkan tombol "Katalog Selengkapnya"
  const linkWrap = document.createElement("div");
  linkWrap.className = "flex justify-center items-center";
  linkWrap.innerHTML = `
    <a href="#"
      class="bg-white text-black font-bold uppercase text-xs px-4 py-2 text-center rounded shadow-md hover:bg-gray-100 transition">
      Katalog Selengkapnya
    </a>
  `;
  container.appendChild(linkWrap);
}


function nextProduct() {
  currentIndex = (currentIndex + 1) % products.length;
  renderProduct(currentIndex);
}

function prevProduct() {
  currentIndex = (currentIndex - 1 + products.length) % products.length;
  renderProduct(currentIndex);
}

function setProduct(index) {
  currentIndex = index;
  renderProduct(currentIndex);
}

document.addEventListener("DOMContentLoaded", () => {
  renderProduct(currentIndex);
});

// Roastery
const roasteryProducts = [
  {
    name: "Palintang Honey",
    image: "assets/img/roastery/Palintang-Honey.jpg",
    price: "IDR 150K",
    weight: "200gr",
    desc: "Since its founding in the 80s, Studio Agatho has been the go-to company for various design needs. Its offerings range from graphic design and branding strategy to website development and video production."
  },
  {
    name: "Bajawa Semi-Washed",
    image: "assets/img/roastery/Bajawa-Semi-Washed.jpg",
    price: "IDR 140K",
    weight: "300gr",
    desc: "Bajawa brings a balance of brightness and body to your cup, offering a harmonious flavor profile that reflects the rich volcanic soil and cool highland climate of Flores. With every sip, you'll experience delicate acidity balanced with smooth chocolate undertones and a hint of spice — a comforting cup that lingers warmly and invites another pour."
  },
  {
    name: "Kintamani Natural",
    image: "assets/img/roastery/Kintanami-Natural.jpg",
    price: "IDR 160K",
    weight: "450gr",
    desc: "Kintamani coffee with fruity and floral tones offers a refreshing sensory experience inspired by the lush highlands of Bali. Grown in volcanic soil with a unique climate, each bean carries bright citrus acidity, sweet berry notes, and delicate floral aromas. This natural-processed coffee finishes with a clean, crisp mouthfeel — a perfect companion for those seeking a vibrant and uplifting brew."
  }
];

let currentRoasteryIndex = 0;

function renderRoasteryProduct(index) {
  const productRoastery = roasteryProducts[index];
  if (productRoastery) {
    // bagian Desktop
    document.getElementById("roasteryImageDesktop").src = productRoastery.image;
    document.getElementById("roasteryNameDesktop").innerHTML = styleRoasteryName(productRoastery.name);
    document.getElementById("roasteryPriceDesktop").innerText = productRoastery.price;
    document.getElementById("roasteryWeightDesktop").innerText = productRoastery.weight;
    document.getElementById("roasteryDescDesktop").innerText = productRoastery.desc;
    // bagian Mobile
    document.getElementById("roasteryImageMobile").src = productRoastery.image;
    document.getElementById("roasteryNameMobile").innerHTML = styleRoasteryName(productRoastery.name);
    document.getElementById("roasteryPriceMobile").innerText = productRoastery.price;
    document.getElementById("roasteryWeightMobile").innerText = productRoastery.weight;
    document.getElementById("roasteryDescMobile").innerText = productRoastery.desc;
  }
}

function nextRoasteryProduct() {
  currentRoasteryIndex = (currentRoasteryIndex + 1) % roasteryProducts.length;
  renderRoasteryProduct(currentRoasteryIndex);
}

function prevRoasteryProduct() {
  currentRoasteryIndex = (currentRoasteryIndex - 1 + roasteryProducts.length) % roasteryProducts.length;
  renderRoasteryProduct(currentRoasteryIndex);
}

function styleRoasteryName(name) {
  const [first, ...rest] = name.split(' ');
  return `<span class="fw-bold mb-2">${first}</span> ${rest.join(' ')}`;
}

document.addEventListener("DOMContentLoaded", () => {
  renderRoasteryProduct(currentRoasteryIndex);
});

// Berita Kawan
const beritaKawan = [
  {
    title: "RAW Club: Penanda Kebangkitan Skena Denim",
    image: "assets/img/berita-kawan/1.jpg",
    createdBy: "Tonny Oscar",
    createdAt: "5th July 2024",
    desc: " Nio Nguan Lie, better known as Suyanto, started making es campur as a 17-year-old working for a relative in Pontianak. And he never stopped. Half a century later, the mixed ice dessert remains the signature of his streetside stall, Es Campur Ko Acia in Sawah Besar, Central Jakarta. ‘Ko Acia’ is what his customers call him, a nickname he adopted when he opened his stall in 1980. Started as a simple wooden shack in an empty lot, the small shop is now part of a vibrant strip of street food finds on Dwiwarna Raya Street, squeezed between a bakmi shop and an eatery serving rice and homestyle dishes. But one thing remains unchanged: a solitary tree stands guard, offering shade to diners (from school kids to delivery couriers and families around the block) who sit on the wooden benches eagerly digging into their cold bowls of es campur. ."
  },
  {
    title: "Bajawa Semi-Washed: Perjalanan Rasa dari Flores ke Cangkir Anda",
    image: "assets/img/berita-kawan/2.jpg",
    createdBy: "TnAhonk",
    createdAt: "5th July 2024",
    desc: "Flores tidak hanya dikenal karena alamnya yang indah, tetapi juga karena kopinya yang khas. Bajawa Semi-Washed hadir membawa cerita dari dataran tinggi yang kaya akan sejarah dan budaya kopi. Diproses dengan teknik semi-washed, kopi ini menawarkan keseimbangan antara rasa cerah dan tubuh yang kuat. Dari kebun ke cangkir, perjalanan kopi ini adalah bukti kerja keras petani lokal dan keunikan tanah Flores. Kini, Anda bisa menikmati setiap tegukan dengan pemahaman bahwa ada cerita panjang di balik rasanya."
  },
  {
    title: "Kintamani Natural: Aroma Tropis dari Lereng Bali",
    image: "assets/img/berita-kawan/3.jpg",
    createdBy: "AcongTurner",
    createdAt: "5th July 2024",
    desc: "Berlokasi di kawasan pegunungan Bali, Kintamani Natural menjadi salah satu varian kopi yang paling diburu oleh pecinta rasa eksotis. Dengan proses natural, kopi ini mempertahankan aroma buah dan bunga yang kuat, khas dari kebun-kebun kopi di lereng Kintamani. Di balik rasa yang menyegarkan, kopi ini menyimpan cerita petani lokal yang terus menjaga tradisi dan kualitas. Lebih dari sekadar minuman, Kintamani Natural adalah bagian dari narasi budaya kopi Indonesia yang tak lekang oleh waktu."
  },
];

let currentBeritaIndex = 0;

function renderBerita(index) {
  const berita = beritaKawan[index];
  if (berita) {
    // bagian Desktop
    document.getElementById("beritaImageDesktop").src = berita.image;
    document.getElementById("beritaTitleDesktop").innerText = berita.title;
    document.getElementById("beritaCreatedByDesktop").innerText = berita.createdBy;
    document.getElementById("beritaCreatedAtDesktop").innerText = berita.createdAt;
    document.getElementById("beritaDescDesktop").innerText = berita.desc;
    // bagian Mobile
    document.getElementById("beritaImageMobile").src = berita.image;
    document.getElementById("beritaTitleMobile").innerText = berita.title;
    document.getElementById("beritaCreatedByMobile").innerText = berita.createdBy;
    document.getElementById("beritaCreatedAtMobile").innerText = berita.createdAt;
    document.getElementById("beritaDescMobile").innerText = berita.desc;
  }
}

function nextBerita() {
  currentBeritaIndex = (currentBeritaIndex + 1) % beritaKawan.length;
  renderBerita(currentBeritaIndex);
}

function prevBerita() {
  currentBeritaIndex = (currentBeritaIndex - 1 + beritaKawan.length) % beritaKawan.length;
  renderBerita(currentBeritaIndex);
}

document.addEventListener("DOMContentLoaded", () => {
  renderBerita(currentBeritaIndex);
});

//find us
const findUs = [
  {
    name: "Kawan Kopi, Cimandiri",
    image: "assets/img/Find-Us/2.jpg",
    address: "Jl. Hayam Wuruk No.30, Citarum,\nBandung Wetan, Kota Bandung.",
    maps: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.88934725622!2d107.61735417456278!3d-6.903833993095498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e722a0e4a367%3A0xb315eb893bd7cbe5!2sKawan%20Kopi%2C%20Cimandiri!5e0!3m2!1sid!2sid!4v1745777048751!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
  },
  {
    name: "Kawan Kopi, Talaga Bodas",
    image: "assets/img/Find-Us/3.jpg",
    address: "Jl. Talaga Bodas No.16, Malabar,\nKec. Lengkong, Kota Bandung.",
    maps: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6850306275214!2d107.61808357456303!3d-6.928200593071582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e98b8524c319%3A0x344d4fb45fbb3afa!2sKawan%20Kopi%2C%20Talaga%20Bodas!5e0!3m2!1sid!2sid!4v1746228258492!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
  },
  {
    name: "Kawan Kopi, Ciumbuleuit",
    image: "assets/img/Find-Us/4.jpg",
    address: "Jl. Ciumbuleuit No.177, Ciumbuleuit,\nKec. Cidadap, Kota Bandung.",
    maps: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.163935805223!2d107.60283157456257!3d-6.8709513931277275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73428259db3%3A0x168e6b650f761523!2sKawan%20Kopi%2C%20Ciumbuleuit!5e0!3m2!1sid!2sid!4v1746228281839!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
  }
];


let currentFindIndex = 0;

function renderFind(index) {
  const find = findUs[index];
  if (find) {
    // bagian Desktop
    document.getElementById("findImageDesktop").src = find.image;
    document.getElementById("findNameDesktop").innerText = find.name;
    document.getElementById("findAddressDesktop").innerHTML = find.address.replace(/\n/g, "<br>");
    document.getElementById("findMapsDesktop").innerHTML = find.maps;
    // bagian Mobile
    document.getElementById("findImageMobile").src = find.image;
    document.getElementById("findNameMobile").innerText = find.name;
    document.getElementById("findAddressMobile").innerHTML = find.address.replace(/\n/g, "<br>");
    document.getElementById("findMapsMobile").innerHTML = find.maps;
  }
}

function nextFind() {
  currentFindIndex = (currentFindIndex + 1) % findUs.length;
  renderFind(currentFindIndex);
}

function prevFind() {
  currentFindIndex = (currentFindIndex - 1 + findUs.length) % findUs.length;
  renderFind(currentFindIndex);
}

document.addEventListener("DOMContentLoaded", () => {
  renderFind(currentFindIndex);
});