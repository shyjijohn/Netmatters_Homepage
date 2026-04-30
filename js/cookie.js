document.addEventListener('DOMContentLoaded', function () {
  const overlay = document.getElementById('cookie-overlay');

  if (!localStorage.getItem('cookiesAccepted')) {
    overlay.classList.add('is-visible');
  }

  document.getElementById('cookie-accept').addEventListener('click', function () {
    localStorage.setItem('cookiesAccepted', 'true');
    overlay.classList.remove('is-visible');
  });

  document.getElementById('cookie-settings').addEventListener('click', function () {
    overlay.classList.remove('is-visible');
  });
});
