// Cursor
const cur = document.getElementById('cur');
const curR = document.getElementById('curR');

document.addEventListener('mousemove', e => {
  const x = e.clientX, y = e.clientY;
  cur.style.left = x + 'px';
  cur.style.top = y + 'px';
  curR.style.left = x + 'px';
  curR.style.top = y + 'px';
});

// Cursor Interaction
document.querySelectorAll('a, button, .svc, .stat-row, .dif').forEach(el => {
  el.addEventListener('mouseenter', () => {
    cur.style.width = '40px';
    cur.style.height = '40px';
    curR.style.width = '60px';
    curR.style.height = '60px';
  });
  el.addEventListener('mouseleave', () => {
    cur.style.width = '8px';
    cur.style.height = '8px';
    curR.style.width = '36px';
    curR.style.height = '36px';
  });
});

// Nav scroll
window.addEventListener('scroll', () => {
  document.getElementById('nav').classList.toggle('scrolled', scrollY > 60);
});

// Reveal
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('vis'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

// Form
function doSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('submit-btn');
  const ok = document.getElementById('form-ok');
  btn.style.opacity = '0.55';
  btn.textContent = 'Enviando...';
  setTimeout(() => {
    btn.style.opacity = '1';
    btn.textContent = '✓ Enviado com sucesso';
    btn.style.background = '#1a2e0a';
    btn.style.color = 'var(--accent)';
    ok.style.display = 'block';
    ok.textContent = 'Nossa equipe entrará em contato em até 24h úteis.';
    e.target.reset();
    setTimeout(() => {
      btn.style.background = '';
      btn.style.color = '';
      btn.innerHTML = 'Solicitar Atendimento Estratégico <svg class="arr" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 7h12M8 2l5 5-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    }, 4000);
  }, 1500);
}