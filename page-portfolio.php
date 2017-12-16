<?php get_header();?>
<div class="wrapper">
  <div class="static-page-wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 class="static-page-header"><?php echo get_the_title(); ?></h1>
      <div class="static-page-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <?php else: ?>
      <div>
        <h4 class="err-page-header">Brak zawartości do wyświetlenia</h4>
        <a class="err-page-link" href="<?php echo home_url(); ?>">strona główna</a>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php get_footer();?>
