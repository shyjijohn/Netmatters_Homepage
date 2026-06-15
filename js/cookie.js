document.addEventListener('DOMContentLoaded', function () {
  const overlay = document.getElementById('cookie-overlay');

  if (!localStorage.getItem('cookiesAccepted')) {
    overlay.classList.add('is-visible');
    document.body.classList.add('cookie-body-lock');
  }

  document.getElementById('cookie-accept').addEventListener('click', function () {
    localStorage.setItem('cookiesAccepted', 'true');
    overlay.classList.remove('is-visible');
    document.body.classList.remove('cookie-body-lock');
  });

  document.getElementById('cookie-settings').addEventListener('click', function () {
    // intentionally does not close the banner
  });
});