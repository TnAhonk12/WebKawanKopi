document.addEventListener("DOMContentLoaded", function () {
  // DESKTOP Slider
  initSlider("Desktop", "beritaSliderDesktop", "beritaIndicatorsDesktop", "prevberitaDesktop", "nextberitaDesktop");

  // MOBILE Slider
  initSlider("Mobile", "beritaSliderMobile", "beritaIndicatorsMobile");

  // Deskripsi: split jadi atas & bawah
  const fullDesc = window.fullBeritaDesc || "";
  const match = fullDesc.match(/^(.*?\.)\s+(.*)/s);

  if (match) {
    document.getElementById("descTop").innerText = match[1].trim();
    document.getElementById("descBottom").innerText = match[2].trim();
  } else {
    document.getElementById("descTop").innerText = fullDesc;
    document.getElementById("descBottom").innerText = "";
  }
});

function initSlider(suffix, sliderId, indicatorId, prevBtnId = null, nextBtnId = null) {
  const slider = document.getElementById(sliderId);
  const indicators = document.querySelectorAll(`#${indicatorId} span`);
  const totalSlides = slider.children.length;
  let currentIndex = 0;

  function updateSlider(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach((dot, i) => {
      dot.classList.toggle("opacity-100", i === index);
      dot.classList.toggle("opacity-50", i !== index);
    });
  }

  // Manual Control (Desktop only)
  if (prevBtnId && nextBtnId) {
    document.getElementById(prevBtnId).addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlider(currentIndex);
    });

    document.getElementById(nextBtnId).addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlider(currentIndex);
    });
  }

  indicators.forEach(dot => {
    dot.addEventListener("click", () => {
      currentIndex = parseInt(dot.dataset.index);
      updateSlider(currentIndex);
    });
  });

  // Auto Slide
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider(currentIndex);
  }, 5000);

  updateSlider(currentIndex);
}
