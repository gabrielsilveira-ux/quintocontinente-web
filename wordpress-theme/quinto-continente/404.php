<?php
get_header();
?>
<section class="page-hero">
  <div class="page-hero-label">Erro 404</div>
  <h1>Página não encontrada</h1>
  <p class="page-hero-sub">A URL acessada não existe ou foi movida.</p>
  <p><a class="btn-main" href="<?php echo esc_url(home_url('/')); ?>">Voltar para a Home</a></p>
</section>
<?php
get_footer();
