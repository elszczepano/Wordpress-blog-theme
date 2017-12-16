<aside class="sidebar">
  <div class="sidebar-posts" data-aos="fade-left">
    <div class="sidebar-searchform">
      <form role="search" method="get" id="searchform" class="searchform" action="http://dszczepaniak.pl">
        <div>
          <input type="text" value="" name="s" id="s" placeholder="szukaj...">
          <button type="=submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </form>
    </div>
    <div class="sidebar-header"><h1>Wybrane dla Ciebie</h1></div>
    <?php echo wpb_rand_posts(); ?>
  </div>
</aside>
