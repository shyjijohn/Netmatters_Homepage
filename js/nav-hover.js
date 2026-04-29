(function () {
  var pairs = [
    { item: '.consultancy-a', section: '.consultancy-hover-section' },
    { item: '.it-support-a',  section: '.it-support-hover-section'  },
    { item: '.marketing-a',   section: '.marketing-hover-section'   },
    { item: '.telecoms-a',    section: '.telecoms-hover-section'    },
    { item: '.web-design-a',  section: '.web-design-hover-section'  },
    { item: '.cyber-a',       section: '.cyber-hover-section'       },
    { item: '.developer-a',   section: '.developer-hover-section'   },
  ];

  var hideTimer = null;

  function clearAll() {
    pairs.forEach(function (p) {
      var i = document.querySelector(p.item);
      var s = document.querySelector(p.section);
      if (i) i.classList.remove('is-active');
      if (s) s.classList.remove('is-active');
    });
  }

  function show(itemEl, sectionEl) {
    clearTimeout(hideTimer);
    clearAll();
    itemEl.classList.add('is-active');
    sectionEl.classList.add('is-active');
  }

  function scheduleHide() {
    hideTimer = setTimeout(clearAll, 120);
  }

  pairs.forEach(function (pair) {
    var itemEl    = document.querySelector(pair.item);
    var sectionEl = document.querySelector(pair.section);
    if (!itemEl || !sectionEl) return;

    itemEl.addEventListener('mouseenter', function () { show(itemEl, sectionEl); });
    itemEl.addEventListener('mouseleave', scheduleHide);

    sectionEl.addEventListener('mouseenter', function () {
      clearTimeout(hideTimer);
      itemEl.classList.add('is-active');
      sectionEl.classList.add('is-active');
    });
    sectionEl.addEventListener('mouseleave', scheduleHide);
  });
})();
