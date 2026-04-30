// Vanilla JS — check on page load
document.addEventListener('DOMContentLoaded', function () {

  const overlay = document.getElementById('cookie-overlay');

  // Only show modal if user hasn't accepted yet
  if (!localStorage.getItem('cookiesAccepted')) {
    overlay.style.display = 'flex';
  } else {
    overlay.style.display = 'none';
  }

});

// jQuery — handle button clicks
$(document).ready(function () {

  // ACCEPT — save to localStorage and close modal
  $('#cookie-accept').on('click', function () {
    localStorage.setItem('cookiesAccepted', 'true');
    $('#cookie-overlay').fadeOut(300);
  });

  // CHANGE SETTINGS — you can expand this later
  // For now it just closes the modal too (or link to a settings page)
  $('#cookie-settings').on('click', function () {
    $('#cookie-overlay').fadeOut(300);
  });

});