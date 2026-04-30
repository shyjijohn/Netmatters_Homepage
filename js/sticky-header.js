(function () {
  const wrapper = document.querySelector('.sticky-header-wrapper');
  if (!wrapper) return;

  let lastScrollY = window.scrollY;

  window.addEventListener('scroll', function () {
    const currentScrollY = window.scrollY;

    if (currentScrollY > lastScrollY && currentScrollY > wrapper.offsetHeight) {
      wrapper.classList.add('header-hidden');
    } else {
      wrapper.classList.remove('header-hidden');
    }

    lastScrollY = currentScrollY;
  }, { passive: true });
})();
