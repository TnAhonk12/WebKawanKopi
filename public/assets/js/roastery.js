document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.roastery-item');
  items.forEach((item, index) => {
    setTimeout(() => {
      item.classList.add('animate-in');
    }, index * 150); // delay per item biar animasinya berurutan
  });
});
