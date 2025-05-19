document.addEventListener("DOMContentLoaded", () => {
  // Animasi muncul bertahap
  const items = document.querySelectorAll('.find-us-item');
  items.forEach((item, index) => {
    setTimeout(() => item.classList.add('animate-in'), index * 150);
  });

  const find = window.findUs;
  if (!find) return;

  // Desktop
  document.getElementById("findNameDesktop").innerText = find.nama_tempat;
  document.getElementById("findAddressDesktop").innerHTML = find.address || "-";
  document.getElementById("findMapsDesktop").innerHTML = find.maps;

  const shopIconsDesktop = document.getElementById("shopIconsDesktop");
  if (shopIconsDesktop) {
    if (find.gofood) shopIconsDesktop.innerHTML += `<a href="${find.gofood}" target="_blank"><img src="/assets/img/ecommerce/Logo_Gofood.png" alt="Gofood"></a>`;
    if (find.shopee) shopIconsDesktop.innerHTML += `<a href="${find.shopee}" target="_blank"><img src="/assets/img/ecommerce/Logo_Shopeefood.png" alt="Shopeefood"></a>`;
    if (find.grab) shopIconsDesktop.innerHTML += `<a href="${find.grab}" target="_blank"><img src="/assets/img/ecommerce/Logo_Grabfood.png" alt="Grabfood"></a>`;
  }

  // Mobile
  document.getElementById("findNameMobile").innerText = find.nama_tempat;
  document.getElementById("findAddressMobile").innerHTML = find.address || "-";
  document.getElementById("findMapsMobile").innerHTML = find.maps;

  const shopIconsMobile = document.getElementById("shopIconsMobile");
  if (shopIconsMobile) {
    if (find.gofood) shopIconsMobile.innerHTML += `<a href="${find.gofood}" target="_blank"><img class="h-6" src="/assets/img/ecommerce/Logo_Gofood.png" alt="Gofood"></a>`;
    if (find.shopee) shopIconsMobile.innerHTML += `<a href="${find.shopee}" target="_blank"><img class="h-6" src="/assets/img/ecommerce/Logo_Shopeefood.png" alt="Shopeefood"></a>`;
    if (find.grab) shopIconsMobile.innerHTML += `<a href="${find.grab}" target="_blank"><img class="h-6" src="/assets/img/ecommerce/Logo_Grabfood.png" alt="Grabfood"></a>`;
  }

  // Slider Desktop
  setupSlider("findUsSlider", "findUsIndicators");

  // Slider Mobile
  setupSlider("findMobileSlider", "findMobileIndicators");
});

function setupSlider(sliderId, indicatorsId) {
  const slider = document.getElementById(sliderId);
  const indicators = document.querySelectorAll(`#${indicatorsId} span`);
  const total = slider.children.length;
  let index = 0;

  function update() {
    slider.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach((dot, i) => {
      dot.classList.toggle("opacity-100", i === index);
      dot.classList.toggle("opacity-50", i !== index);
    });
  }

  indicators.forEach(dot => {
    dot.addEventListener("click", () => {
      index = parseInt(dot.dataset.index);
      update();
    });
  });

  setInterval(() => {
    index = (index + 1) % total;
    update();
  }, 5000);

  update();
}
