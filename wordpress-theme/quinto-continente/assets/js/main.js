(function () {
  'use strict';

  /* Cursor */
  function initCursor() {
    var cur = document.getElementById('cur');
    var curR = document.getElementById('curR');
    if (!cur || !curR) return;
    var mx=0,my=0,rx=0,ry=0;
    document.addEventListener('mousemove',function(e){
      mx=e.clientX; my=e.clientY;
      cur.style.left=mx+'px'; cur.style.top=my+'px';
    });
    (function animR(){
      rx+=(mx-rx)*0.14; ry+=(my-ry)*0.14;
      curR.style.left=rx+'px'; curR.style.top=ry+'px';
      requestAnimationFrame(animR);
    })();
    document.querySelectorAll('a,button,.card,.stat-row,.svc,.dif,input,textarea,select').forEach(function(el){
      el.addEventListener('mouseenter',function(){cur.style.width='14px';cur.style.height='14px';curR.style.width='48px';curR.style.height='48px';});
      el.addEventListener('mouseleave',function(){cur.style.width='8px';cur.style.height='8px';curR.style.width='36px';curR.style.height='36px';});
    });
  }

  /* Scroll reveal */
  function initReveal() {
    var items = document.querySelectorAll('.reveal');
    if (!items.length) return;
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){ e.target.classList.add('vis'); io.unobserve(e.target); }
      });
    },{threshold:0.12});
    items.forEach(function(el){ io.observe(el); });
  }

  /* Nav scroll */
  function initNavScroll() {
    var nav = document.getElementById('nav');
    if (!nav) return;
    function toggle(){ nav.classList.toggle('scrolled', window.scrollY > 40); }
    window.addEventListener('scroll', toggle, {passive:true});
    toggle();
  }

  /* Smooth anchors */
  function initAnchors() {
    document.querySelectorAll('a[href*="#"]').forEach(function(a){
      a.addEventListener('click',function(e){
        var href = a.getAttribute('href');
        var hash = href.indexOf('#') !== -1 ? href.split('#')[1] : null;
        if (!hash) return;
        var target = document.getElementById(hash);
        if (!target) return;
        // only prevent default if we're on the same page or hash-only link
        if (href.indexOf('#') === 0 || !href.split('#')[0]) {
          e.preventDefault();
          target.scrollIntoView({behavior:'smooth'});
        }
      });
    });
  }

  /* Hamburger */
  function initMenu() {
    var btn = document.querySelector('.nav-hamburger');
    var menu = document.querySelector('.nav-mobile');
    if (!btn || !menu) return;
    btn.addEventListener('click',function(){
      var open = menu.classList.toggle('open');
      btn.classList.toggle('open', open);
      document.body.style.overflow = open ? 'hidden' : '';
    });
    menu.querySelectorAll('a').forEach(function(a){
      a.addEventListener('click',function(){
        menu.classList.remove('open');
        btn.classList.remove('open');
        document.body.style.overflow='';
      });
    });
  }

  /* Forms */
  function initForms() {
    document.querySelectorAll('form[data-form]').forEach(function(form){
      form.addEventListener('submit',function(e){
        e.preventDefault();
        var btn = form.querySelector('.btn-form');
        var ok  = form.querySelector('.form-ok');
        if(btn){ btn.disabled=true; btn.textContent='Enviando…'; }
        setTimeout(function(){
          if(btn) btn.style.display='none';
          if(ok){ ok.style.display='block'; ok.textContent='✓ Mensagem enviada! Entraremos em contato em breve.'; }
          form.reset();
        },1200);
      });
    });
  }

  /* Boot */
  function boot() {
    initCursor();
    initReveal();
    initNavScroll();
    initAnchors();
    initMenu();
    initForms();
  }

  if(document.readyState==='loading'){
    document.addEventListener('DOMContentLoaded', boot);
  } else { boot(); }
})();
