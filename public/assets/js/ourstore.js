document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.find-us-item');
  items.forEach((item, index) => {
    setTimeout(() => {
      item.classList.add('animate-in');
    }, index * 150);
  });
});
