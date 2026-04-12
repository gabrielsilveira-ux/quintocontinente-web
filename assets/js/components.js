async function loadComponent(id, path) {
  const el = document.getElementById(id);
  if (!el) return;

  try {
    const response = await fetch(path);
    const html = await response.text();
    el.innerHTML = html;
    
    // Dispara evento para o main.js inicializar cursor/animações
    window.dispatchEvent(new Event('componentLoaded'));
  } catch (error) {
    console.error(`Erro ao carregar ${path}:`, error);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  loadComponent("global-header", "/components/header.html");
  loadComponent("global-footer", "/components/footer.html");
});