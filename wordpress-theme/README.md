# WordPress Theme Base — Quinto Continente

Tema WordPress gerado a partir dos arquivos estáticos do repositório (`index.html`, `sobre/index.html`, `servicos/index.html`, `servicos/booking/index.html`, `404.html`).

## Como funciona

- Os arquivos estáticos foram copiados para `quinto-continente/source-html/`.
- Cada template WordPress renderiza diretamente o HTML correspondente dessa pasta.
- Durante a renderização, o tema converte links e paths de assets para URLs WordPress.

## Estrutura principal

- `quinto-continente/functions.php` — renderizador legado + transformação de URLs
- `quinto-continente/front-page.php` — renderiza `source-html/index.html`
- `quinto-continente/page-sobre.php` — renderiza `source-html/sobre/index.html`
- `quinto-continente/page-servicos.php` — renderiza `source-html/servicos/index.html`
- `quinto-continente/page-booking.php` — renderiza `source-html/servicos/booking/index.html`
- `quinto-continente/404.php` — renderiza `source-html/404.html`
- `quinto-continente/assets/*` — CSS/JS do site original

## Instalação

1. Copie `quinto-continente` para `wp-content/themes/`.
2. Ative o tema em **Aparência > Temas**.
3. Crie as páginas e associe templates:
   - Sobre → `Sobre`
   - Serviços → `Serviços`
   - Booking → `Booking`
4. Em **Configurações > Leitura**, defina página inicial estática para Home.
