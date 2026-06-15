(function () {
  var TRANSITION_MS = 500;
  var PAUSE_MS      = 1500;

  document.querySelectorAll('.ad__track').forEach(function (track) {
    var timer;
    var paused = false;
    var adEl   = track.closest('.ad');

    function getGap() {
      var style = window.getComputedStyle(track);
      return parseFloat(style.columnGap) || parseFloat(style.gap) || 40;
    }

    function step() {
      var first     = track.children[0];
      var adLeft    = adEl ? adEl.getBoundingClientRect().left : 0;
      var trackLeft = track.getBoundingClientRect().left - adLeft;
      var itemWidth = first.getBoundingClientRect().width;
      var w         = Math.ceil(trackLeft + itemWidth + getGap());

      track.style.transition = 'transform ' + TRANSITION_MS + 'ms ease-in-out';
      track.style.transform  = 'translateX(-' + w + 'px)';

      setTimeout(function () {
        track.appendChild(first);
        track.style.transition = 'none';
        track.style.transform  = 'translateX(0)';
        track.getBoundingClientRect();

        if (!paused) {
          timer = setTimeout(step, PAUSE_MS);
        }
      }, TRANSITION_MS);
    }

    track.addEventListener('mouseenter', function () {
      paused = true;
      clearTimeout(timer);
    });
    track.addEventListener('mouseleave', function () {
      paused = false;
      timer = setTimeout(step, PAUSE_MS);
    });

    timer = setTimeout(step, PAUSE_MS);
  });
})();
