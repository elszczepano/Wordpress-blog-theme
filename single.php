<?php get_header(); ?>
<div class="single-container">
<section class="wrapper">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="single-post-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
  <div class="single-post-about">
    <h1><?php echo get_the_title(); ?></h1>
    <h2><?php the_category( ' &#124; ' );?> <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date();?> <i class="fa fa-pencil" aria-hidden="true"></i> <?php echo the_tags('#',' #'); ?></h2>
  </div>
  <div class="single-post-content-wrapper">
    <article class="single-post-content">
      <?php the_content(); ?>
      <div id="disqus_thread"></div>
    <script>
    (function() {
    var d = document, s = d.createElement('script');
    s.src = 'https://dszczepaniak.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </article>
    <?php get_sidebar(); ?>
  </div>
  <?php endwhile; ?>
  <?php else: ?>
    <div>
      <h4 class="err-page-header">Brak zawartości do wyświetlenia</h4>
      <a class="err-page-link" href="<?php echo home_url(); ?>">strona główna</a>
    </div>
  <?php endif; ?>
</section>
</div>
<?php get_footer(); ?>
