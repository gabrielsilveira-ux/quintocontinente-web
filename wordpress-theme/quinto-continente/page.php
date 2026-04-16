<?php
get_header();
?>
<section class="page-hero">
  <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>/</span><span><?php the_title(); ?></span></div>
  <div class="page-hero-label">Página</div>
  <h1><?php the_title(); ?></h1>
</section>

<section style="background:var(--bg)">
  <?php
  while (have_posts()) :
      the_post();
      the_content();
  endwhile;
  ?>
</section>
<?php
get_footer();
