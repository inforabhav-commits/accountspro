document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Navbar scroll state ---------- */
  var navbar = document.querySelector('.navbar');
  function onScroll () {
    if (window.scrollY > 40) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
  }
  onScroll();
  window.addEventListener('scroll', onScroll);

  /* ---------- Mobile nav ---------- */
  var toggle = document.querySelector('.nav-toggle');
  var mobileNav = document.querySelector('.mobile-nav');
  var overlay = document.querySelector('.nav-overlay');
  var closeBtn = document.querySelector('.mn-close');

  function openNav () { mobileNav.classList.add('open'); overlay.classList.add('open'); }
  function closeNav () { mobileNav.classList.remove('open'); overlay.classList.remove('open'); }

  if (toggle) toggle.addEventListener('click', openNav);
  if (closeBtn) closeBtn.addEventListener('click', closeNav);
  if (overlay) overlay.addEventListener('click', closeNav);

  document.querySelectorAll('.mn-parent').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var panel = btn.nextElementSibling;
      panel.classList.toggle('open');
      btn.querySelector('i').classList.toggle('fa-rotate-90');
    });
  });

  /* ---------- FAQ accordion ---------- */
  document.querySelectorAll('.faq-item').forEach(function (item) {
    var q = item.querySelector('.faq-q');
    var a = item.querySelector('.faq-a');
    q.addEventListener('click', function () {
      var isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(function (i) {
        i.classList.remove('open');
        i.querySelector('.faq-a').style.maxHeight = null;
      });
      if (!isOpen) {
        item.classList.add('open');
        a.style.maxHeight = a.scrollHeight + 'px';
      }
    });
  });

  /* ---------- Scroll reveal ---------- */
  var revealEls = document.querySelectorAll('.reveal');
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  revealEls.forEach(function (el) { io.observe(el); });

  /* ---------- Process line fill ---------- */
  var processWrap = document.querySelector('.process-wrap');
  if (processWrap) {
    var fill = processWrap.querySelector('.process-line-fill');
    var steps = processWrap.querySelectorAll('.p-step');
    var pio = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          if (fill) fill.style.width = '100%';
          steps.forEach(function (s, i) {
            setTimeout(function () { s.classList.add('active'); }, i * 220);
          });
          pio.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    pio.observe(processWrap);
  }

  /* ---------- Counter animation ---------- */
  var counters = document.querySelectorAll('.counter');
  var cio = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target;
        var target = parseFloat(el.getAttribute('data-target'));
        var suffix = el.getAttribute('data-suffix') || '';
        var duration = 1400;
        var start = null;
        function step (ts) {
          if (!start) start = ts;
          var progress = Math.min((ts - start) / duration, 1);
          var value = (target * progress);
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

  /* ---------- Button ripple ---------- */
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

  /* ---------- Contact form (demo submit) ---------- */
  var form = document.querySelector('.contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('button[type="submit"]');
      var original = btn.innerHTML;
      btn.innerHTML = '<i class="fa-solid fa-check"></i> Message sent';
      form.reset();
      setTimeout(function () { btn.innerHTML = original; }, 2600);
    });
  }

  /* ---------- Newsletter (demo submit) ---------- */
  document.querySelectorAll('.newsletter').forEach(function (nl) {
    nl.addEventListener('submit', function (e) {
      e.preventDefault();
      var input = nl.querySelector('input');
      input.placeholder = 'Thanks — you\'re subscribed!';
      input.value = '';
    });
  });

});
