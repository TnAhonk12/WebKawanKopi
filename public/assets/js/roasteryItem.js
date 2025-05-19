document.addEventListener("DOMContentLoaded", () => {
  // Inisialisasi
  let currentRoasteryIndex = roasteryProducts.findIndex(p => p.id === activeRoasteryId);
  if (currentRoasteryIndex < 0) currentRoasteryIndex = 0;

  function renderRoasteryProduct(index) {
    const product = roasteryProducts[index];
    if (!product) return;

    // Desktop
    document.getElementById("categoryNameDesktop").innerText = product.kategori;
    document.getElementById("roasteryImageDesktop").src = product.image;
    document.getElementById("roasteryNameDesktop").innerHTML = styleRoasteryName(product.name);
    document.getElementById("roasteryDescDesktop").innerText = product.desc;

    renderPriceAndWeight("Desktop", product.price, product.berat);
    renderEcommerceIcons("Desktop", product.link, product.link_shopee);

    // Mobile
    document.getElementById("categoryNameMobile").innerText = product.kategori;
    document.getElementById("roasteryImageMobile").src = product.image;
    document.getElementById("roasteryNameMobile").innerHTML = styleRoasteryName(product.name);
    document.getElementById("roasteryDescMobile").innerText = product.desc;

    renderPriceAndWeight("Mobile", product.price, product.berat);
    renderEcommerceIcons("Mobile", product.link, product.link_shopee);
  }

  function renderPriceAndWeight(view, price, berat) {
    const priceDiv = document.getElementById(`roasteryPrice${view}`);
    const weightDiv = document.getElementById(`roasteryWeight${view}`);
    priceDiv.innerHTML = "";
    weightDiv.innerHTML = "";

    if (price) {
      priceDiv.innerHTML = `
        <div class="absolute top-2 left-10 bg-red-600 text-white text-${view === "Mobile" ? "sm" : "lg"} font-bold px-3 py-1.5 rounded-full shadow">
          <span>IDR ${price}K</span>
        </div>`;
    }

    if (berat) {
      weightDiv.innerHTML = `
        <div class="absolute top-2 right-10 bg-red-600 text-white text-${view === "Mobile" ? "sm" : "lg"} font-bold px-3 py-1.5 rounded-full shadow">
          <span>${berat}gr</span>
        </div>`;
    }
  }

  function renderEcommerceIcons(view, linkTokped, linkShopee) {
    const container = document.getElementById(`ecommerceIcons${view}`);
    container.innerHTML = "";

    if (linkTokped) {
      container.innerHTML += `<a href="${linkTokped}" target="_blank">
        <img src="${tokopediaLogo}" alt="Tokopedia">
      </a>`;
    }

    if (linkShopee) {
      container.innerHTML += `<a href="${linkShopee}" target="_blank">
        <img src="${shopeeLogo}" alt="Shopee">
      </a>`;
    }
  }

  function styleRoasteryName(name) {
    const [first, ...rest] = name.split(" ");
    return `<span class="fw-bold mb-2">${first}</span> ${rest.join(" ")}`;
  }

  // Navigasi
  window.nextRoasteryProduct = function () {
    currentRoasteryIndex = (currentRoasteryIndex + 1) % roasteryProducts.length;
    renderRoasteryProduct(currentRoasteryIndex);
  };

  window.prevRoasteryProduct = function () {
    currentRoasteryIndex = (currentRoasteryIndex - 1 + roasteryProducts.length) % roasteryProducts.length;
    renderRoasteryProduct(currentRoasteryIndex);
  };

  // Trigger pertama
  renderRoasteryProduct(currentRoasteryIndex);
});
