(function () {
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  let current = 0;
  let timer;

  function goTo(index) {
    slides[current].classList.remove('slide--active');
    dots[current].classList.remove('dot--active');
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
