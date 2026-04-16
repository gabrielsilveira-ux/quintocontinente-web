<?php
/*
Template Name: Booking
*/
get_header();
?>
<div class="page-hero">
  <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>/</span><span>Booking</span></div>
  <div class="page-hero-label">Briefing</div>
  <h1>Solicitação de booking</h1>
  <p class="page-hero-sub">Preencha os dados para receber proposta estratégica e disponibilidade.</p>
</div>

<section class="contato" id="contato">
  <div class="form-box" style="max-width:900px;margin:0 auto;">
    <?php echo do_shortcode('[contact-form-7 id="booking" title="Formulário de booking"]'); ?>
    <p class="form-ok">Template pronto para integração com Contact Form 7, Fluent Forms ou Gravity Forms.</p>
  </div>
</section>

<?php
get_footer();
