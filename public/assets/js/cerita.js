document.addEventListener('DOMContentLoaded', function () {
  const ceritaKawan = document.getElementById('cerita-kawan');
  const scrollContainer = document.getElementById('ceritaKawanScroll');
  const scrollHint = document.getElementById('scrollHint');

  const ceritases = Array.isArray(window.ceritases) ? window.ceritases : [];

  if (!ceritases.length && ceritaKawan) {
    ceritaKawan.classList.add("hidden");
    return;
  }

  if (!scrollContainer) return;

  let isDragging = false;
  let startX;
  let scrollLeft;
  let hintHidden = false;

  // Mouse drag-to-scroll
  scrollContainer.addEventListener('mousedown', (e) => {
    isDragging = false;
    startX = e.pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
    scrollContainer.classList.add('cursor-grabbing');

    function onMouseMove(e) {
      isDragging = true;
      const x = e.pageX - scrollContainer.offsetLeft;
      const walk = (x - startX) * 2;
      scrollContainer.scrollLeft = scrollLeft - walk;
    }

    function onMouseUp(e) {
      scrollContainer.classList.remove('cursor-grabbing');
      document.removeEventListener('mousemove', onMouseMove);
      document.removeEventListener('mouseup', onMouseUp);

      if (!isDragging && e.target.closest('a')) {
        const link = e.target.closest('a');
        window.location.href = link.href;
      }
    }

    document.addEventListener('mousemove', onMouseMove);
    document.addEventListener('mouseup', onMouseUp);
  });

  // Mobile drag
  scrollContainer.addEventListener('touchstart', (e) => {
    startX = e.touches[0].pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
  });

  scrollContainer.addEventListener('touchmove', (e) => {
    const x = e.touches[0].pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2;
    scrollContainer.scrollLeft = scrollLeft - walk;
  });

  // Hilangkan scroll hint setelah scroll pertama
  scrollContainer.addEventListener('scroll', () => {
    if (!hintHidden && scrollContainer.scrollLeft > 10 && scrollHint) {
      scrollHint.classList.add('opacity-0');
      hintHidden = true;
    }
  });
});
