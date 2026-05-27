(function () {
  var TRANSITION_MS = 300;
  var PAUSE_MS      = 2000;

  document.querySelectorAll('.ad__track').forEach(function (track) {
    var items = Array.from(track.children);
    var count = items.length;

    items.forEach(function (item) {
      var clone = item.cloneNode(true);
      clone.setAttribute('aria-hidden', 'true');
      track.appendChild(clone);
    });

    var current = 0;
    var timer;

    function itemWidth() {
      var gap = parseFloat(window.getComputedStyle(track).gap) || 40;
      return track.children[0].offsetWidth + gap;
    }

    function step() {
      current++;
      track.style.transition = 'transform ' + TRANSITION_MS + 'ms ease-in-out';
      track.style.transform  = 'translateX(-' + (current * itemWidth()) + 'px)';

      setTimeout(function () {
        if (current >= count) {
          current = 0;
          track.style.transition = 'none';
          track.style.transform  = 'translateX(0)';
          track.getBoundingClientRect(); // force reflow before next transition
        }
      }, TRANSITION_MS);
    }

    function start() {
      timer = setInterval(step, TRANSITION_MS + PAUSE_MS);
    }

    function stop() {
      clearInterval(timer);
    }

    track.addEventListener('mouseenter', stop);
    track.addEventListener('mouseleave', start);

    start();
  });
})();
