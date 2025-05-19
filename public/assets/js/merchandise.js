document.addEventListener("DOMContentLoaded", () => {
  const merchandise = document.getElementById("merchandise");
  const products = Array.isArray(window.merchandiseProducts) ? window.merchandiseProducts : [];

  if (!products.length && merchandise) {
    merchandise.classList.add("hidden");
    return;
  }

  let currentIndex = 0;

  function renderProduct(index) {
    const product = products[index];
    if (product) {
      document.getElementById("productImage").src = product.image;
      document.getElementById("productName").innerText = product.name;
      document.getElementById("productPrice").innerText = product.price;
      document.getElementById("productLink").href = product.link;
    }

    renderProductList(index);
  }

  function renderProductList(excludeIndex) {
    const container = document.getElementById("productListContainer");
    if (!container) return;

    container.innerHTML = "";

    products.forEach((product, index) => {
      if (index === excludeIndex) return;

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

  // Expose for button onclick handlers (optional)
  window.nextProduct = nextProduct;
  window.prevProduct = prevProduct;
  window.setProduct = setProduct;

  renderProduct(currentIndex);
});
