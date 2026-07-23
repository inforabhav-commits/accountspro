document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.querySelector('.navbar');
  function onScroll() {
    if (window.scrollY > 40) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
  }
  onScroll();
  window.addEventListener('scroll', onScroll);

  var toggle = document.querySelector('.nav-toggle');
  var mobileNav = document.querySelector('.mobile-nav');
  var overlay = document.querySelector('.nav-overlay');
  var closeBtn = document.querySelector('.mn-close');

  function openNav() { mobileNav.classList.add('open'); overlay.classList.add('open'); }
  function closeNav() { mobileNav.classList.remove('open'); overlay.classList.remove('open'); }

  if (toggle) toggle.addEventListener('click', openNav);
  if (closeBtn) closeBtn.addEventListener('click', closeNav);
  if (overlay) overlay.addEventListener('click', closeNav);

  document.querySelectorAll('.btn').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      var rect = btn.getBoundingClientRect();
      var ripple = document.createElement('span');
      ripple.className = 'ripple';
      ripple.style.left = (e.clientX - rect.left) + 'px';
      ripple.style.top = (e.clientY - rect.top) + 'px';
      btn.appendChild(ripple);
      setTimeout(function () { ripple.remove(); }, 650);
    });
  });

  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  }

  var counters = document.querySelectorAll('.counter');
  if ('IntersectionObserver' in window) {
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseFloat(el.getAttribute('data-target'));
          var suffix = el.getAttribute('data-suffix') || '';
          var duration = 1400;
          var start = null;
          function step(ts) {
            if (!start) start = ts;
            var progress = Math.min((ts - start) / duration, 1);
            var value = target * progress;
            el.textContent = (target % 1 !== 0 ? value.toFixed(1) : Math.floor(value)) + suffix;
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target + suffix;
          }
          requestAnimationFrame(step);
          cio.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { cio.observe(el); });
  }
});
