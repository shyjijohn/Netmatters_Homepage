(function () {
  const drawer = document.getElementById('navDrawer');
  const overlay = document.getElementById('navDrawerOverlay');
  const hamburgers = document.querySelectorAll('.btn__outline2');

  function openDrawer() {
    drawer.classList.add('nav-drawer--open');
    overlay.classList.add('nav-drawer__overlay--visible');
    document.body.classList.add('nav-drawer-body-lock');
  }

  function closeDrawer() {
    drawer.classList.remove('nav-drawer--open');
    overlay.classList.remove('nav-drawer__overlay--visible');
    document.body.classList.remove('nav-drawer-body-lock');
  }

  hamburgers.forEach(function (btn) {
    btn.addEventListener('click', function () {
      drawer.classList.contains('nav-drawer--open') ? closeDrawer() : openDrawer();
    });
  });

  overlay.addEventListener('click', closeDrawer);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeDrawer();
  });
})();
