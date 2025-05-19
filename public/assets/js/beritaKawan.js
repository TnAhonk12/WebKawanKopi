document.addEventListener("DOMContentLoaded", () => {
  const beritaKawan = window.beritaKawan || [];
  let currentBeritaIndex = 0;
  let beritaImageIndex = 0;
  let beritaImageTimer;
  let beritaImages = [];

  function truncateWords(text, maxWords) {
    const words = text.trim().split(/\s+/);
    if (words.length <= maxWords) return text;
    return words.slice(0, maxWords).join(" ") + "...";
  }

  function renderBeritaCarousel(images) {
    const slider = document.getElementById("beritaSlider");
    const indicators = document.getElementById("beritaIndicators");
    if (!slider || !indicators) return;

    beritaImages = images;
    beritaImageIndex = 0;
    slider.innerHTML = "";
    indicators.innerHTML = "";

    images.forEach((src, index) => {
      const img = document.createElement("img");
      img.src = src;
      img.className = "object-contain max-h-[430px] w-full mx-auto flex-shrink-0 rounded-l";
      slider.appendChild(img);

      const dot = document.createElement("span");
      dot.dataset.index = index;
      dot.className = "w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer";
      dot.onclick = () => {
        beritaImageIndex = index;
        updateBeritaCarousel();
        restartCarouselInterval();
      };
      indicators.appendChild(dot);
    });

    updateBeritaCarousel();
    restartCarouselInterval();
  }

  function updateBeritaCarousel() {
    const slider = document.getElementById("beritaSlider");
    if (!slider) return;

    slider.style.transform = `translateX(-${beritaImageIndex * 100}%)`;
    document.querySelectorAll("#beritaIndicators span").forEach((dot, i) => {
      dot.classList.toggle("opacity-100", i === beritaImageIndex);
      dot.classList.toggle("opacity-50", i !== beritaImageIndex);
    });
  }

  function nextBeritaImageAuto() {
    beritaImageIndex = (beritaImageIndex + 1) % beritaImages.length;
    updateBeritaCarousel();
  }

  function restartCarouselInterval() {
    clearInterval(beritaImageTimer);
    beritaImageTimer = setInterval(nextBeritaImageAuto, 5000);
  }

  function renderBeritaCarouselMobile(images) {
    const slider = document.getElementById("beritaSliderMobile");
    const indicators = document.getElementById("beritaIndicatorsMobile");
    if (!slider || !indicators) return;

    let index = 0;
    slider.innerHTML = "";
    indicators.innerHTML = "";

    images.forEach((src, i) => {
      const img = document.createElement("img");
      img.src = src;
      img.className = "object-contain max-h-[230px] w-full mx-auto flex-shrink-0 rounded-l";
      slider.appendChild(img);

      const dot = document.createElement("span");
      dot.dataset.index = i;
      dot.className = "w-2.5 h-2.5 bg-white rounded-full opacity-50 cursor-pointer";
      dot.onclick = () => {
        index = i;
        updateMobileSlider();
        restartMobileInterval();
      };
      indicators.appendChild(dot);
    });

    function updateMobileSlider() {
      slider.style.transform = `translateX(-${index * 100}%)`;
      indicators.querySelectorAll("span").forEach((dot, i) => {
        dot.classList.toggle("opacity-100", i === index);
        dot.classList.toggle("opacity-50", i !== index);
      });
    }

    let interval = setInterval(() => {
      index = (index + 1) % images.length;
      updateMobileSlider();
    }, 5000);

    function restartMobileInterval() {
      clearInterval(interval);
      interval = setInterval(() => {
        index = (index + 1) % images.length;
        updateMobileSlider();
      }, 5000);
    }

    updateMobileSlider();
  }

  function renderBeritaPagination() {
    const container = document.getElementById("beritaPaginationInteractiveMobile");
    if (!container) return;

    container.innerHTML = "";

    const baseClass = "px-3 py-1 border border-black text-black rounded hover:bg-gray-100 transition";
    const activeClass = "bg-black text-white";

    const prevBtn = document.createElement("button");
    prevBtn.innerText = "Previous";
    prevBtn.className = baseClass;
    if (currentBeritaIndex === 0) prevBtn.classList.add("opacity-50", "cursor-not-allowed");
    prevBtn.disabled = currentBeritaIndex === 0;
    prevBtn.onclick = () => {
      if (currentBeritaIndex > 0) {
        currentBeritaIndex--;
        renderBerita(currentBeritaIndex);
      }
    };
    container.appendChild(prevBtn);

    beritaKawan.forEach((_, i) => {
      const btn = document.createElement("button");
      btn.innerText = i + 1;
      btn.className = baseClass + (i === currentBeritaIndex ? ` ${activeClass}` : "");
      btn.onclick = () => {
        currentBeritaIndex = i;
        renderBerita(i);
      };
      container.appendChild(btn);
    });

    const nextBtn = document.createElement("button");
    nextBtn.innerText = "Next";
    nextBtn.className = baseClass;
    if (currentBeritaIndex === beritaKawan.length - 1) nextBtn.classList.add("opacity-50", "cursor-not-allowed");
    nextBtn.disabled = currentBeritaIndex === beritaKawan.length - 1;
    nextBtn.onclick = () => {
      if (currentBeritaIndex < beritaKawan.length - 1) {
        currentBeritaIndex++;
        renderBerita(currentBeritaIndex);
      }
    };
    container.appendChild(nextBtn);
  }

  function renderBerita(index) {
    const berita = beritaKawan[index];
    if (!berita) return;

    // Desktop
    document.getElementById("beritaTitleDesktop").innerText = berita.title;
    document.getElementById("beritaCreatedByDesktop").innerText = berita.createdBy;
    document.getElementById("beritaCreatedAtDesktop").innerText = berita.createdAt;
    document.getElementById("beritaDescDesktop").innerText = truncateWords(berita.desc, 80);
    document.getElementById("readMoreButton").href =
      document.getElementById("readMoreButton").dataset.baseUrl + "/" + berita.slug;
    renderBeritaCarousel(berita.images || []);

    // Mobile
    document.getElementById("beritaTitleMobile").innerText = berita.title;
    document.getElementById("beritaCreatedByMobile").innerText = berita.createdBy;
    document.getElementById("beritaCreatedAtMobile").innerText = berita.createdAt;
    document.getElementById("beritaDescMobile").innerText = truncateWords(berita.desc, 80);
    renderBeritaCarouselMobile(berita.images || []);
    renderBeritaPagination();
  }

  window.nextBerita = function () {
    currentBeritaIndex = (currentBeritaIndex + 1) % beritaKawan.length;
    renderBerita(currentBeritaIndex);
  };

  window.prevBerita = function () {
    currentBeritaIndex = (currentBeritaIndex - 1 + beritaKawan.length) % beritaKawan.length;
    renderBerita(currentBeritaIndex);
  };

  // Inisialisasi
  renderBerita(currentBeritaIndex);
});
