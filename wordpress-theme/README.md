# WordPress Theme Base — Quinto Continente

Este diretório contém a estrutura inicial do tema WordPress para migração do site estático.

## Estrutura

- `quinto-continente/style.css` — metadados do tema
- `quinto-continente/functions.php` — setup do tema + enqueue de assets + menu
- `quinto-continente/header.php` / `footer.php` — estrutura global
- `quinto-continente/front-page.php` — home institucional
- `quinto-continente/page-sobre.php` — template de página Sobre
- `quinto-continente/page-servicos.php` — template de Serviços
- `quinto-continente/page-booking.php` — template de Booking
- `quinto-continente/page.php` / `index.php` / `404.php` — templates padrão
- `quinto-continente/assets/*` — CSS/JS migrados do site atual

## Instalação

1. Copie a pasta `quinto-continente` para `wp-content/themes/` no seu WordPress.
2. Ative o tema em **Aparência > Temas**.
3. Crie as páginas no admin:
   - Home
   - Sobre
   - Serviços
   - Booking
4. Em cada página, associe o template correspondente (`Sobre`, `Serviços`, `Booking`).
5. Em **Configurações > Leitura**, defina a Home estática para usar a página inicial.
6. Configure o menu principal em **Aparência > Menus**.

## Observações

- O tema já está pronto para receber formulário via shortcode.
- O conteúdo completo das páginas pode ser refinado no Gutenberg/ACF.
