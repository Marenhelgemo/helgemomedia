document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('.main-nav');
  const closeBtn = document.querySelector('.nav-close');
  const overlay = document.querySelector('.nav-overlay');

  hamburger.addEventListener('click', () => {
    nav.classList.add('open');
    overlay.classList.add('active');
  });

  closeBtn.addEventListener('click', () => {
    nav.classList.remove('open');
    overlay.classList.remove('active');
  });

  overlay.addEventListener('click', () => {
    nav.classList.remove('open');
    overlay.classList.remove('active');
  });
});
