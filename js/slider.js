(function () {
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  let current = 0;
  let timer;
  let exitTimeout;

  function goTo(index, direction) {
    direction = direction || 'next';
    const exiting = slides[current];
    const entering = slides[index];

    // Position entering slide off-screen in the correct direction before activating.
    // Transition must be off while repositioning, otherwise the slide animates
    // from its default translateX(100%) to -100% instead of jumping there instantly.
    if (direction === 'prev') {
      entering.style.transition = 'none';
      entering.classList.add('slide--from-left');
      entering.offsetHeight; // force reflow so the -100% position is painted before we re-enable transition
      entering.style.transition = '';
    }

    exiting.classList.remove('slide--active');
    exiting.classList.add(direction === 'prev' ? 'slide--exit-right' : 'slide--exit');
    dots[current].classList.remove('dot--active');

    clearTimeout(exitTimeout);
    exitTimeout = setTimeout(function () {
      exiting.style.transition = 'none';
      exiting.classList.remove('slide--exit', 'slide--exit-right');
      exiting.offsetHeight; // force reflow before re-enabling transition
      exiting.style.transition = '';
    }, 800);

    current = index;
    entering.classList.add('slide--active');
    // Clean up helper class after the transition completes
    setTimeout(function () {
      entering.classList.remove('slide--from-left');
    }, 800);
    dots[current].classList.add('dot--active');
  }

  function startTimer() {
    timer = setInterval(function () {
      goTo((current + 1) % slides.length, 'next');
    }, 5000);
  }

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () {
      clearInterval(timer);
      goTo(i, i < current ? 'prev' : 'next');
      startTimer();
    });
  });

  // Drag / swipe support
  const slider = document.querySelector('.slider');
  let dragStartX = null;
  let isDragging = false;
  const DRAG_THRESHOLD = 50;

  function onDragStart(x) {
    dragStartX = x;
    isDragging = false;
  }

  function onDragMove(x) {
    if (dragStartX === null) return;
    if (Math.abs(x - dragStartX) > 5) isDragging = true;
  }

  function onDragEnd(x) {
    if (dragStartX === null) return;
    const delta = x - dragStartX;
    if (Math.abs(delta) >= DRAG_THRESHOLD) {
      clearInterval(timer);
      if (delta < 0) {
        goTo((current + 1) % slides.length, 'next');
      } else {
        goTo((current - 1 + slides.length) % slides.length, 'prev');
      }
      startTimer();
    }
    dragStartX = null;
    isDragging = false;
  }

  // Prevent click-through on buttons after a drag
  slider.addEventListener('click', function (e) {
    if (isDragging) e.stopPropagation();
  }, true);

  // Mouse events
  slider.addEventListener('mousedown', function (e) { onDragStart(e.clientX); });
  window.addEventListener('mousemove', function (e) { onDragMove(e.clientX); });
  window.addEventListener('mouseup', function (e) { onDragEnd(e.clientX); });

  // Touch events
  slider.addEventListener('touchstart', function (e) { onDragStart(e.touches[0].clientX); }, { passive: true });
  slider.addEventListener('touchmove', function (e) { onDragMove(e.touches[0].clientX); }, { passive: true });
  slider.addEventListener('touchend', function (e) { onDragEnd(e.changedTouches[0].clientX); });

  // Drag cursor feedback
  slider.style.cursor = 'grab';
  slider.addEventListener('mousedown', function () { slider.style.cursor = 'grabbing'; });
  window.addEventListener('mouseup', function () { slider.style.cursor = 'grab'; });

  startTimer();
})();
