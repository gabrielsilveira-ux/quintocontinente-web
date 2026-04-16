<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="cur" class="cursor"></div>
<div id="curR" class="cursor-ring"></div>
<nav id="nav">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
    <span style="font-family:Syne,sans-serif;font-size:1.1rem;font-weight:800;color:var(--text)">Quinto Continente</span>
  </a>

  <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'nav-links',
      'fallback_cb'    => 'qc_nav_fallback',
    ]);
  ?>

  <a href="<?php echo esc_url(home_url('/#contato')); ?>" class="nav-btn">Consultar Agenda</a>
  <button class="nav-hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
</nav>
<div class="nav-mobile">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
  <a href="<?php echo esc_url(home_url('/sobre/')); ?>">Quem Somos</a>
  <a href="<?php echo esc_url(home_url('/servicos/')); ?>">Serviços</a>
  <a href="https://blog.quintocontinente.com.br" target="_blank" rel="noopener">Blog</a>
  <a href="<?php echo esc_url(home_url('/#contato')); ?>" style="color:var(--accent)">Consultar Agenda</a>
</div>
