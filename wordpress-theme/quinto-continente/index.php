<?php
get_header();
?>
<section class="page-hero">
  <div class="page-hero-label">Conteúdo</div>
  <h1><?php bloginfo('name'); ?></h1>
  <p class="page-hero-sub"><?php bloginfo('description'); ?></p>
</section>

<section style="background:var(--bg)">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?> style="max-width:900px;margin:0 auto 3rem;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <p>Nenhum conteúdo encontrado.</p>
  <?php endif; ?>
</section>
<?php
get_footer();
