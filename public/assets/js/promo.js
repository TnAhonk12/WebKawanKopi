
document.addEventListener("DOMContentLoaded", function () {
  const promoBanner = document.getElementById("promo-banner");
  const slider = document.getElementById("promoSlider");
  const indicators = document.querySelectorAll("#promoIndicators span");
  const totalSlides = slider.children.length;
  let currentIndex = 0;
  
  const promoses = Array.isArray(window.promoImages) ? window.promoImages : [];

  if (!promoses.length && promoBanner) {
    promoBanner.classList.add("hidden");
    return;
  }

  function updateSlider(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach((dot, i) => {
      dot.classList.toggle("opacity-100", i === index);
      dot.classList.toggle("opacity-50", i !== index);
    });
  }

  document.getElementById("prevPromo").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlider(currentIndex);
  });

  document.getElementById("nextPromo").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider(currentIndex);
  });

  indicators.forEach(dot => {
    dot.addEventListener("click", () => {
      currentIndex = parseInt(dot.dataset.index);
      updateSlider(currentIndex);
    });
  });

  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider(currentIndex);
  }, 5000);

  updateSlider(currentIndex);
});

document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("promoSliderMobile");
  const indicators = document.querySelectorAll("#promoIndicatorsMobile span");
  const totalSlides = slider.children.length;
  let currentIndex = 0;

  function updateSlider(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach((dot, i) => {
      dot.classList.toggle("opacity-100", i === index);
      dot.classList.toggle("opacity-50", i !== index);
    });
  }

  indicators.forEach(dot => {
    dot.addEventListener("click", () => {
      currentIndex = parseInt(dot.dataset.index);
      updateSlider(currentIndex);
    });
  });

  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider(currentIndex);
  }, 4000);

  updateSlider(currentIndex);
});
