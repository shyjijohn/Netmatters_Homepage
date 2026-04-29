(function () {
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  let current = 0;
  let timer;
  let exitTimeout;

  function goTo(index) {
    const exiting = slides[current];
    exiting.classList.remove('slide--active');
    exiting.classList.add('slide--exit');
    dots[current].classList.remove('dot--active');

    clearTimeout(exitTimeout);
    exitTimeout = setTimeout(function () {
      exiting.style.transition = 'none';
      exiting.classList.remove('slide--exit');
      exiting.offsetHeight; // force reflow before re-enabling transition
      exiting.style.transition = '';
    }, 800);

    current = index;
    slides[current].classList.add('slide--active');
    dots[current].classList.add('dot--active');
  }

  function startTimer() {
    timer = setInterval(function () {
      goTo((current + 1) % slides.length);
    }, 5000);
  }

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () {
      clearInterval(timer);
      goTo(i);
      startTimer();
    });
  });

  startTimer();
})();
