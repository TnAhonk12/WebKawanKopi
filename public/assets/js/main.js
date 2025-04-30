// hero

const character = document.getElementById("character");
const hero = document.getElementById("hero");

let mouseX = 0;
let posX = window.innerWidth / 2;
let currentDirection = null;
let isHovering = false;
let lastMoveTime = Date.now();
let currentScrollRatio = 0;
let lastScrollTime = Date.now();

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

animate();

// Navbar background toggle based on scroll position
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
  const heroSection = document.querySelector('#hero');
  const heroTop = heroSection.getBoundingClientRect().top;
  if (heroTop <= 0) {
    header.classList.remove('header-hidden');
  } else {
    header.classList.add('header-hidden');
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

// Cerita Kawan

document.addEventListener('DOMContentLoaded', function () {
  const scrollContainer = document.getElementById('ceritaKawanScroll');

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
});

  document.addEventListener('DOMContentLoaded', () => {
    const scrollContainer = document.getElementById('ceritaKawanScroll');
    const scrollHint = document.getElementById('scrollHint');

    let hintHidden = false;

    scrollContainer.addEventListener('scroll', () => {
      if (!hintHidden && scrollContainer.scrollLeft > 10) {
        scrollHint.classList.add('opacity-0');
        hintHidden = true;
      }
    });
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


// Merchandise Modal Toggle
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

  
  