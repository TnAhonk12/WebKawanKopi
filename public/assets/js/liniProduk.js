
// ======= Lini Produk =======
document.addEventListener("DOMContentLoaded", () => {
  const menus = window.menusData;
  const filenameMap = window.filenameMapData;

  const liniProduk = document.getElementById("lini-produk");
  if (!menus || Object.keys(menus).length === 0) {
    liniProduk.classList.add("hidden");
  }

  const productImageDesktop = document.querySelector(".col-lg-6 img");
  const leftColDesktop = document.querySelectorAll(".grid-cols-2 .flex.flex-col")[0];
  const rightColDesktop = document.querySelectorAll(".grid-cols-2 .flex.flex-col")[1];
  const categoryButtonsDesktop = document.querySelectorAll(".category");

  const prevDesktopBtn = document.getElementById("prevMenuDesktop");
  const nextDesktopBtn = document.getElementById("nextMenuDesktop");

  let currentDesktopCategory = null;
  let currentDesktopMenuItems = [];
  let currentDesktopMenuIndex = 0;

  function updateActiveMenuDesktop(index) {
    currentDesktopMenuIndex = index;
    const item = currentDesktopMenuItems[index];
    const imageUrl = filenameMap[item];

    if (imageUrl && productImageDesktop) {
      productImageDesktop.src = imageUrl;
      productImageDesktop.alt = item;
    }

    document.querySelectorAll(".grid-cols-2 .flex.flex-col button").forEach(btn => {
      btn.style.borderBottomColor = "black";
      btn.style.color = "black";
    });

    const allButtons = [...leftColDesktop.children, ...rightColDesktop.children];
    if (allButtons[index]) {
      allButtons[index].style.borderBottomColor = "#8B5E3B";
      allButtons[index].style.color = "#8B5E3B";
    }
  }

  function createDesktopButton(text, index) {
    const btn = document.createElement("button");
    btn.textContent = text;
    btn.className = "text-left font-bold transition pb-2 hover:opacity-70";
    btn.style.borderBottom = "2px solid black";
    btn.onclick = () => {
      updateActiveMenuDesktop(index);
      document.getElementById("desktopMenuNav").classList.remove("hidden");
    };
    return btn;
  }

  categoryButtonsDesktop.forEach(btn => {
    btn.addEventListener("click", () => {
      categoryButtonsDesktop.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      document.getElementById("desktopMenuNav").classList.add("hidden");

      currentDesktopCategory = btn.textContent.trim();
      currentDesktopMenuItems = menus[currentDesktopCategory] || [];
      currentDesktopMenuIndex = 0;

      leftColDesktop.innerHTML = "";
      rightColDesktop.innerHTML = "";

      const halfway = Math.ceil(currentDesktopMenuItems.length / 2);
      const leftItems = currentDesktopMenuItems.slice(0, halfway);
      const rightItems = currentDesktopMenuItems.slice(halfway);

      leftItems.forEach((item, idx) => leftColDesktop.appendChild(createDesktopButton(item, idx)));
      rightItems.forEach((item, idx) => rightColDesktop.appendChild(createDesktopButton(item, idx + halfway)));
    });
  });

  prevDesktopBtn.addEventListener("click", () => {
    if (!currentDesktopMenuItems.length) return;
    currentDesktopMenuIndex = (currentDesktopMenuIndex - 1 + currentDesktopMenuItems.length) % currentDesktopMenuItems.length;
    updateActiveMenuDesktop(currentDesktopMenuIndex);
  });

  nextDesktopBtn.addEventListener("click", () => {
    if (!currentDesktopMenuItems.length) return;
    currentDesktopMenuIndex = (currentDesktopMenuIndex + 1) % currentDesktopMenuItems.length;
    updateActiveMenuDesktop(currentDesktopMenuIndex);
  });

  const productImageMobile = document.getElementById("productImageMobile");
  const leftCol = document.getElementById("menuLeftMobile");
  const rightCol = document.getElementById("menuRightMobile");
  const categoryButtons = document.querySelectorAll(".category");
  const prevBtn = document.getElementById("prevMenuMobile");
  const nextBtn = document.getElementById("nextMenuMobile");

  let currentCategory = null;
  let currentMenuItems = [];
  let currentMenuIndex = 0;

  function updateActiveMenu(index) {
    currentMenuIndex = index;
    const item = currentMenuItems[index];
    const imageUrl = filenameMap[item];

    if (imageUrl) {
      productImageMobile.src = imageUrl;
      productImageMobile.alt = item;
    }

    document.querySelectorAll("#menuLeftMobile button, #menuRightMobile button").forEach(btn => {
      btn.style.borderBottomColor = "black";
      btn.style.color = "black";
    });

    const allButtons = [...leftCol.children, ...rightCol.children];
    if (allButtons[index]) {
      allButtons[index].style.borderBottomColor = "#8B5E3B";
      allButtons[index].style.color = "#8B5E3B";
    }
  }

  function createButton(text, index) {
    const btn = document.createElement("button");
    btn.textContent = text;
    btn.className = "text-left font-bold transition pb-1 hover:opacity-70";
    btn.style.borderBottom = "2px solid black";
    btn.onclick = () => {
      document.getElementById("mobileMenuNav").classList.remove("hidden");
      updateActiveMenu(index);
    };
    return btn;
  }

  categoryButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      document.getElementById("mobileMenuNav").classList.add("hidden");
      categoryButtons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      currentCategory = btn.textContent.trim();
      currentMenuItems = menus[currentCategory] || [];
      currentMenuIndex = 0;

      leftCol.innerHTML = "";
      rightCol.innerHTML = "";

      const halfway = Math.ceil(currentMenuItems.length / 2);
      const leftItems = currentMenuItems.slice(0, halfway);
      const rightItems = currentMenuItems.slice(halfway);

      leftItems.forEach((item, idx) => leftCol.appendChild(createButton(item, idx)));
      rightItems.forEach((item, idx) => rightCol.appendChild(createButton(item, idx + halfway)));
    });
  });

  prevBtn.addEventListener("click", () => {
    if (!currentMenuItems.length) return;
    currentMenuIndex = (currentMenuIndex - 1 + currentMenuItems.length) % currentMenuItems.length;
    updateActiveMenu(currentMenuIndex);
  });

  nextBtn.addEventListener("click", () => {
    if (!currentMenuItems.length) return;
    currentMenuIndex = (currentMenuIndex + 1) % currentMenuItems.length;
    updateActiveMenu(currentMenuIndex);
  });

  const firstCategory = document.querySelector(".category");
  if (firstCategory) firstCategory.click();
});
