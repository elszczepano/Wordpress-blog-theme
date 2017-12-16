<?php get_header(); ?>
<div class="wrapper">
<div class="main-content">
  <div class="content-container">
    <section class="article-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article data-aos="fade-up-right" class="single-article">
          <div class="article-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <h1 class="article-category"><?php the_category( ' &#124; ' );?></h1>
          </div>
          <header class="article-header">
            <h2 class="article-title"><a href="<?php echo get_the_permalink(get_field('url', false, false)); ?>"><?php echo get_the_title(); ?></a></h2>
            <h3 class="article-meta"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date(); ?><i class="fa fa-pencil" aria-hidden="true"></i><?php echo the_tags('#',' #'); ?></h3>
          </header>
          <div class="article-desc">
            <?php the_excerpt_max_charlength(230); ?>
          </div>
          <a class="article-more" href="<?php echo get_the_permalink(get_field('url', false, false)); ?>">Czytaj całość</a>
      </article>
    <?php endwhile;?>
  <?php else: ?>
    <div>
      <h4 class="err-page-header">Brak zawartości do wyświetlenia</h4>
      <a class="err-page-link" href="<?php echo home_url(); ?>">strona główna</a>
    </div>
  <?php endif;?>
    </section>
    <?php numeric_posts_nav(); ?>
  </div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
