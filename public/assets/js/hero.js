
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
          setCharacterImage(newSrc);
        }
      }
    });
  }

  function setCharacterImage(path) {
    if (!character.src.includes(path)) {
      character.src = path;
    }
  }

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
        setCharacterImage(newSrc);
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
          if (now - lastMoveTime > 500 && !isHovering && !character.src.includes("charIdle.webp")) {
            setCharacterImage("/assets/img/character/charIdle.webp");
            currentDirection = null;
          }

          posX += (mouseX - posX) * 0.1;
          const clampedX = Math.min(Math.max(posX, 100), 1400);
          character.style.transform = `translateX(${clampedX}px)`;
        } else {
          const scrollX = hero.scrollLeft;
          const maxScroll = hero.scrollWidth - hero.clientWidth;
          const scrollRatio = maxScroll > 0 ? scrollX / maxScroll : 0;

          const characterMin = 100;
          const characterMax = 1400;
          const charX = characterMin + (characterMax - characterMin) * scrollRatio;

          character.style.transform = `translateX(${Math.round(charX)}px)`;

          if (now - lastScrollTime > 500 && !character.src.includes("charIdle.webp")) {
            setCharacterImage("/assets/img/character/charIdle.webp");
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
});
